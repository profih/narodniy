<?php

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Loader;

Loader::includeModule("highloadblock");
Loader::includeModule("iblock");

class DJPrices
{
    public static function getPricesById($id)
    {
        $hlblock = HighloadBlockTable::getList([
            'filter' => ['=NAME' => 'Price1C']
        ])->fetch();
        $entity = HighloadBlockTable::compileEntity($hlblock);
        $entity_data_class = $entity->getDataClass();

        $rsData = $entity_data_class::getList(array(
            "select" => array("*"),
            "order" => array("ID" => "ASC"),
            "filter" => array("UF_ELEMENT_ID" => $id)  // Задаем параметры фильтра выборки
        ));
        return $rsData->Fetch();
    }

    public static function updatePrice($rnPrice, $id)
    {
        $hlblock = HighloadBlockTable::getList([
            'filter' => ['=NAME' => 'Price1C']
        ])->fetch();
        $entity = HighloadBlockTable::compileEntity($hlblock);
        $entity_data_class = $entity->getDataClass();
        $entity_data_class::update($id,
            ['UF_NAME' => $rnPrice['name'],
                'UF_ARTNUMBER' => $rnPrice['article'],
                'UF_ELEMENT_ID' => $rnPrice['ID'],
                'UF_PRICE_1C' => (int)roundUpToAny($rnPrice['price'], 100) - 10,
                'UF_BASE_PRICE_1' => (int)roundUpToAny($rnPrice['price'] * 1.25, 50)]
        );
    }

    public static function createPrice($rnPrice)
    {
        $hlblock = HighloadBlockTable::getList([
            'filter' => ['=NAME' => 'Price1C']
        ])->fetch();
        $entity = HighloadBlockTable::compileEntity($hlblock);
        $entity_data_class = $entity->getDataClass();
        $entity_data_class::add(
            ['UF_NAME' => $rnPrice['name'],
                'UF_ARTNUMBER' => $rnPrice['article'],
                'UF_ELEMENT_ID' => $rnPrice['ID'],
                'UF_PRICE_1C' => (int)roundUpToAny($rnPrice['price'], 100) - 10,
                'UF_BASE_PRICE_1' => roundUpToAny($rnPrice['price'] * 1.25, 50)]
        );
    }

    public static function getPricesByArticle($article)
    {
        $hlblock = HighloadBlockTable::getList([
            'filter' => ['=NAME' => 'Price1C']
        ])->fetch();
        $entity = HighloadBlockTable::compileEntity($hlblock);
        $entity_data_class = $entity->getDataClass();

        $rsData = $entity_data_class::getList(array(
            "select" => array("*"),
            "order" => array("ID" => "ASC"),
            "filter" => array("UF_ARTNUMBER" => $article)  // Задаем параметры фильтра выборки
        ));
        return $rsData->Fetch();
    }

    private static function requestPrices($articles)
    {
        $curlDeal = curl_init();
        curl_setopt_array($curlDeal, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://dobriy-jar.ru/local/classes/price_provider.php?articles=' . implode(',', $articles)));

        $result = curl_exec($curlDeal);
        return json_decode($result, 1);
    }

    public static function priceExists($arData)
    {
        return DJPrices::getPricesById($arData['ID'])['ID'];
    }

    public static function updatePricesTable()
    {
        $arElements = array();
        $articles = array();

        $elements = CIBlockElement::GetList(array(), ['IBLOCK_ID' => [8, 10, 11, 3]], false, false,
            ['IBLOCK_ID', 'ID', 'NAME', "PROPERTY_ARTNUMBER"]);

        while ($arElement = $elements->fetch()) {
            $article = $arElement['PROPERTY_ARTNUMBER_VALUE'];
            if ($article) {
                $articles[] = $arElement['PROPERTY_ARTNUMBER_VALUE'];
            }

            /*
            if (DJPrices::priceExists($article)){
                DJPrices::updatePrice($arElement);
            } else {
                DJPrices::updatePrice($arElement);
            }
            */
        }
        $rnPrices = DJPrices::requestPrices($articles);
        foreach ($rnPrices as $rnPrice) {
            $rsElement = \Bitrix\Iblock\ElementPropertyTable::getList(
                ['filter' => ['VALUE' => $rnPrice['article']], 'select' => ['IBLOCK_ELEMENT_ID']]);
            while ($element = $rsElement->fetch()) {
                $rnPrice['ID'] = $element['IBLOCK_ELEMENT_ID'];
                $id = DJPrices::priceExists($rnPrice);
                if ($id) {
                    DJPrices::updatePrice($rnPrice, $id);
                } else {
                    DJPrices::createPrice($rnPrice);
                }
            }
        }
    }
}

function roundUpToAny($n, $x = 5)
{
    return round(($n + $x / 2) / $x) * $x;
}