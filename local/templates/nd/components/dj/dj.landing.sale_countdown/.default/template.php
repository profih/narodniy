<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */
?>
<div class="sale-countdown">
    <span class="sale-countdown__comment">До конца акции</span>
    <span class="sale-countdown__left">Осталось:</span>
    <div class="sale-countdown__clock">
        <div class="sale-countdown__sector">
            <div class="sale-countdown__digit countdown-hour">99</div>
            <div class="sale-countdown__unit">час.</div>
        </div>
        <div class="sale-countdown__sector">
            <div class="sale-countdown__digit countdown-min">99</div>
            <div class="sale-countdown__unit">мин.</div>
        </div>
        <div class="sale-countdown__sector">
            <div class="sale-countdown__digit countdown-sec">99</div>
            <div class="sale-countdown__unit">сек.</div>
        </div>
    </div>
</div>
