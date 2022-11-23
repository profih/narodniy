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
        $arParams['IMAGE_DIST'],
        $arParams['IMAGE_DIST_KNOT']
    ] as $key => $value) {
    $arResult['IMAGES'][$key] = $component ->
    formatImage($value,
        array('width' => 260, 'height'=>590),
        array('width' => 250, 'height'=>630));
}
