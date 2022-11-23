<?php
use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Loader;

Loader::includeModule("highloadblock");

class DJPrices {
    public static function getPricesById($id){
        $hlblock = HighloadBlockTable::getList([
            'filter' => ['=NAME' => 'Price1C']
        ])->fetch();
        $entity = HighloadBlockTable::compileEntity($hlblock);
        $entity_data_class = $entity->getDataClass();

        $rsData = $entity_data_class::getList(array(
            "select" => array("*"),
            "order" => array("ID" => "ASC"),
            "filter" => array("UF_ELEMENT_ID"=>$id)  // Задаем параметры фильтра выборки
        ));
        return $rsData->Fetch();
    }
}