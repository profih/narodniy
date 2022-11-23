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
        $arParams['IMAGE_20VOL'],
        $arParams['IMAGE_30VOL']
    ] as $key => $value) {
    $arResult['IMAGES'][$key] = $component ->
    formatImage($value,
        array('width' => 300, 'height'=>560),
        array('width' => 300, 'height'=>560));
}
