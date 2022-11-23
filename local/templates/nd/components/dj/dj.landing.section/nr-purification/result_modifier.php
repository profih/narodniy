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
        $arParams['IMAGE_1'],
        $arParams['IMAGE_2'],
        $arParams['IMAGE_3'],
        $arParams['IMAGE_4'],
    ] as $key => $value) {
    $arResult['IMAGES'][$key] = $component ->
    formatImage($value,
        array('width' => 206, 'height'=>206),
        array('width' => 206, 'height'=>206));
}

$arResult['IMAGE_MAIN'] = $component -> formatImage($arParams['IMAGE_MAIN'],
    array('width' => 374, 'height' => 470),
    array('width' => 374, 'height' => 470));
