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

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var DJSection $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 **/

CModule::IncludeModule('dj.imgref');

use DJScripts\ImgRef;


$is_mobile = isMobile();
if ($is_mobile) {
    $size_array = array('width' => 507, 'height' => 454);
} else {
    $size_array = array('width' => 507, 'height' => 635);
}

if ($is_mobile) {
    $background_img = ImgRef::optimizeImg(getFileId($arParams['IMAGE']), $size_array);
} else {
    $background_img = ImgRef::optimizeImg(getFileId($arParams['IMAGE']), $size_array);
}
$arResult['image'] = $background_img['auto'];