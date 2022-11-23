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
    $arParams['IMAGE_DIST'],
    array('width' => 444, 'height' => 552),
    array('width' => 444, 'height' => 552));

