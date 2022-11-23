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
foreach (
    [
        $arParams['IMAGE_1'],
        $arParams['IMAGE_2'],
        $arParams['IMAGE_3'],
        $arParams['IMAGE_4'],
        $arParams['IMAGE_5'],
        $arParams['IMAGE_6'],
    ] as $key => $value) {
    $arResult['IMAGES'][$key] = $component ->
    formatImage($value,
        array('width' => 140, 'height'=>140),
        array('width' => 140, 'height'=>140));
}

$arResult['IMAGE_MAIN'] = $component -> formatImage($arParams['IMAGE_MAIN'],
    array('width' => 460, 'height' => 460),
    array('width' => 460, 'height' => 460));
