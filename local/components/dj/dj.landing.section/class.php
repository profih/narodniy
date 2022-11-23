<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
CModule::IncludeModule('dj.imgref');

use DJScripts\ImgRef;
use Bitrix\Main;

class DJSection extends CBitrixComponent
{

    public function getFileId($path)
    {
        $path = explode('/', $path);
        unset($path[count($path) - 1]);
        unset($path[1]);;
        unset($path[0]);
        $res = CFile::getList(array(), ['SUBDIR' => implode('/', $path)]);

        return $res->fetch()['ID'];
    }

    public function isMobile()
    {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    public function formatImage($file_path, $mobile_sizes, $desktop_sizes)
    {
        $is_mobile = $this->isMobile();
        if ($is_mobile) {
            $size_array = $mobile_sizes;
        } else {
            $size_array = $desktop_sizes;
        }
        $img = ImgRef::optimizeImg(getFileId($file_path), $size_array);
        return $img['auto'];
    }

    public function getElementsByIblockCode($iblock_code, $prices=false){
        CModule::IncludeModule('iblock');
        $rsIblock = \Bitrix\Iblock\IblockTable::getList(['filter' => ['CODE' => $iblock_code]]) -> fetch();
        if ($rsIblock){
            $rsElements = \Bitrix\Iblock\ElementTable::getList(['filter' =>
                ['IBLOCK_ID' => $rsIblock['ID'],
                'ACTIVE' => 'Y'], 'select' => ['ID', 'DETAIL_PICTURE', 'NAME', 'DETAIL_TEXT']]);
            while ($arElement = $rsElements -> fetch()){
                if ($prices){
                    $arPrices = DJPrices::getPricesById($arElement['ID']);
                    $arElement = array_merge($arElement, $arPrices);
                }
                $arElRes[] = $arElement;
            }
        }
        return $arElRes;
    }
}

?>