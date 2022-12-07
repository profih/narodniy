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
    $arParams['IMAGE_CUBE'],
    array('width' => 318, 'height' => 332),
    array('width' => 318, 'height' => 332));

$arResult['IMAGES'][1] = $component->
formatImage(
    $arParams['IMAGE_PARTS'],
    array('width' => 486, 'height' => 371),
    array('width' => 486, 'height' => 371));

$arResult['IMAGES'][2] = $component->
formatImage(
    $arParams['IMAGE_THERMOMETER'],
    array('width' => 250, 'height' => 190),
    array('width' => 250, 'height' => 190));

$arResult['IMAGES'][3] = $component->
formatImage(
    $arParams['IMAGE_PRESENTS'],
    array('width' => 600, 'height' => 600),
    array('width' => 600, 'height' => 600));
