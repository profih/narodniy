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
<section class="volumes" id="volumes">
    <div class="volumes__container centered-container">
        <div class="volumes__title st-font">Выбери свой объем перегонного куба!</div>
        <div class="volumes__features">
            <div class="volumes__feature fenix-bullet">два самых популярных литража</div>
            <div class="volumes__feature fenix-bullet">20 литров = до 5 л на выходе</div>
            <div class="volumes__feature fenix-bullet">30 литров = до 7 л на выходе</div>
            <div class="volumes__feature fenix-bullet">Пищевая нержавеющая сталь AISI 304/430</div>
        </div>
        <div class="volumes__image-container">
                <img loading="lazy" src="<?= $arResult['IMAGES'][0] ?>" alt="Народный 20л "
                     class="volumes__image volume-20">
            <div class="volumes__text">
                <span class="volumes__volume-title">20 литров</span><br>
                <span class="volumes__bp"><?=number_format($GLOBALS['base_price-20'], 0, '.', '&nbsp')?>р</span><br>
                <span class="volumes__p"><b><?=number_format($GLOBALS['price-20'], 0, '.', '&nbsp')?></b>р</span>
            </div>
        </div>
        <div class="volumes__image-container">
            <img loading="lazy" src="<?= $arResult['IMAGES'][1] ?>" alt="Народный 30л "
                 class="volumes__image volume-30">
            <div class="volumes__text"><span class="volumes__volume-title">30 литров</span><br>
                <span class="volumes__bp"><?=number_format($GLOBALS['base_price-30'], 0, '.', '&nbsp')?>р</span><br>
                <span class="volumes__p"><b><?=number_format($GLOBALS['price-30'], 0, '.', '&nbsp')?></b>р</span>
            </div>
        </div>
    </div>
</section>