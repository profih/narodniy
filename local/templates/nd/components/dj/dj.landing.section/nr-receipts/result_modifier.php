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
$component = $this -> getComponent();
foreach (
    [
        $arParams['IMAGE_CONJAC'],
        $arParams['IMAGE_ALCOHOL'],
        $arParams['IMAGE_CALVADOS'],
        $arParams['IMAGE_WHISKY']
    ] as $key => $value) {
    $arResult['IMAGES'][$key] = $component ->
    formatImage($value,
        array('width' => 220, 'height'=>220),
        array('width' => 220, 'height'=>220));
}

$arResult['IMAGES'][] = $component ->
formatImage($arParams['IMAGE_RECEIPTS'],
    array('width' => 400, 'height'=>300),
    array('width' => 800, 'height'=>600));
