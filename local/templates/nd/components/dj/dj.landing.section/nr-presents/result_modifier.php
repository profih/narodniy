<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 **/

$component = $this -> getComponent();
$arResult['ITEMS'] = $component -> getElementsByIblockCode('nd_pres', true);
