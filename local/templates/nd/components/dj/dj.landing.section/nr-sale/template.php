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
<section class="sale" id="sale">
    <div class="sale__container centered-container">
        <span class="sale__title">Акция!</span>
        <span class="sale__conditions">при заказе до 30 декабря</span>
        <span class="sale__digits"><b>-20</b>%</span>
        <div class="sale__prices">
            <span class="sale__base-price"><?=number_format($GLOBALS['base_price-20'], 0, '.', '&nbsp')?>р</span>
            <span class="sale__price"><b><?=number_format($GLOBALS['price-20'], 0, '.', '&nbsp')?></b>р</span>
        </div>
        <a href="#order" class="sale__action">Заказать!</a>
        <div class="sale__picture-wrapper">
            <img loading="lazy" src="<?=$arResult['image']?>" alt="Народный" class="sale__picture">
        </div>
        <div class="sale__countdown">
            <?$APPLICATION->IncludeComponent(
                "dj:dj.landing.sale_countdown",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                ),
                false
            );?>
        </div>
    </div>
</section>
