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
<section class="main" id="main" style='background-image: url("<?=$arResult["background"]?>")'>
    <div class="main__wrapper centered-container">
        <div class="main__title">
            <div class="main__title-comment">Самогонный аппарат</div>
            <div class="main__title-name">НАРОДНЫЙ NEW</div>
        </div>
        <div class="main__features">
            <div class="fenix-bullet">самогон и спирт до&nbsp<span style="color: var(--fenix-main-color)"> 85˚</span></div>
            <div class="fenix-bullet">экономия воды и энергии</div>
            <div class="fenix-bullet">нержавеющая сталь AISI 304</div>
            <div class="fenix-bullet">универсальный аппарат для&nbspподключения колонны</div>
            <div class="fenix-bullet">дефлегматор и холодильник</div>
        </div>
        <div class="main__video" id="narodniy-video">
            <div class="main__video-name">Видео</div>
            <i class="main__video-icon"></i>
        </div>
        <div class="main__image-wrapper">
            <img src="<?=$arResult['IMAGES'][0]?>" alt="" class="main__image">
        </div>
        <div class="main__sale">
            <div class="main__sale-conditions">При заказе
                <span class="main__sale-date">до 30 ноября</span>
                <span class="main__sale-price">от <b><?=number_format($GLOBALS['price-20'], 0, '.', '&nbsp')?></b> р</span>
            </div>
            <a href="#order" class="main__sale-action">Заказать!</a>
            <div class="main__sale-bonus">+ бесплатная доставка</div>
        </div>
        <div class="main__sale-bottom">
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