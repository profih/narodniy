<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionList $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 **/
CModule::IncludeModule('dj.imgref');
use DJScripts\ImgRef;
foreach (
    [
        $arParams['IMAGE_1'],
        $arParams['IMAGE_2'],
        $arParams['IMAGE_3'],
        $arParams['IMAGE_4'],
        $arParams['IMAGE_5'],
        $arParams['IMAGE_6'],
    ] as $key => $value) {
    $is_mobile = isMobile();
    if ($is_mobile) {
        $size_array = array('width' => 206, 'height' => 206);
    } else {
        $size_array = array('width' => 206, 'height' => 206);
    }
    $img = ImgRef::optimizeImg(getFileId($value), $size_array);
    $arResult['IMAGES'][$key] = $img['auto'];
}