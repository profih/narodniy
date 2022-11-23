<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var DJSection $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 **/


$component = $this->getComponent();

$arResult['IMAGES'][0] = $component->
formatImage(
    $arParams['MAIN_IMAGE'],
    array('width' => 477, 'height' => 762),
    array('width' => 477, 'height' => 762));

$arResult['IMAGES'][1] = $component->
formatImage(
    $arParams['BACKGROUND'],
    array('width' => 1972, 'height' => 700),
    array('width' => 1972, 'height' => 700));

$arResult['IMAGES'][2] = $component->
formatImage(
    $arParams['BACKGROUND_MOBILE'],
    array('width' => 768, 'height' => 1582),
    array('width' => 768, 'height' => 1582));
$arResult['background'] = $component -> isMobile() ? $arResult['IMAGES'][2] : $arResult['IMAGES'][1];