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

$component = $this -> getComponent();

$arResult['IMAGES'][0] = $component ->
formatImage($arParams['IMAGE'],
    array('width' => 280, 'height'=>280),
    array('width' => 280, 'height'=>280));

$arResult['IMAGES'][1] = $component ->
formatImage($arParams['LOGO_SDEK'],
    array('width' => 200, 'height'=>100),
    array('width' => 200, 'height'=>100));

$arResult['IMAGES'][2] = $component ->
formatImage($arParams['LOGO_POCHTA'],
    array('width' => 200, 'height'=>100),
    array('width' => 200, 'height'=>100));

