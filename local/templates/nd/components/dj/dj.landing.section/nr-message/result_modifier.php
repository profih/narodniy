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
        $arParams['IMAGE'],
        $arParams['IMAGE_POPUP'],
    ] as $key => $value) {
    $arResult['IMAGES'][$key] = $component ->
    formatImage($value,
        array('width' => 577, 'height'=>514),
        array('width' => 577, 'height'=>560));
}
