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
<section class="cube" id="cube">
    <div class="cube__container centered-container">

        <div class="cube__title st-font st-font--white">Профессиональный перегонный куб с широкой горловиной</div>
        <div class="cube__wrapper">
            <div class="cube__detail flanec">
                <div class="cube__detail-picture">
                    <img loading="lazy" src="<?=$arResult['IMAGES'][0]?>" alt="" class="cube__detail-img">
                </div>
                <div class="cube__detail-feature fenix-bullet">Фланец с переходом на 1,5“</div>
            </div>
            <div class="cube__detail gorlo">
                <div class="cube__detail-picture">
                    <img loading="lazy" src="<?=$arResult['IMAGES'][1]?>" alt="" class="cube__detail-img">
                </div>
                <div class="cube__detail-feature fenix-bullet">Удобная широкая горловина</div>
            </div>
            <div class="cube__detail kran">
                <div class="cube__detail-picture">
                    <img loading="lazy" src="<?=$arResult['IMAGES'][2]?>" alt="" class="cube__detail-img">
                </div>
                <div class="cube__detail-feature fenix-bullet">Кран крепится на ниппель/муфту</div>
            </div>
            <div class="cube__detail clapan">
                <div class="cube__detail-picture">
                    <img loading="lazy" src="<?=$arResult['IMAGES'][3]?>" alt="" class="cube__detail-img">
                </div>
                <div class="cube__detail-feature fenix-bullet">Клапан сброса давления</div>
            </div>
            <div class="cube__detail ten">
                <div class="cube__detail-picture">
                    <img loading="lazy" src="<?=$arResult['IMAGES'][4]?>" alt="" class="cube__detail-img">
                </div>
                <div class="cube__detail-feature fenix-bullet">Можно купить сразу с ТЭНом</div>
            </div>
            <div class="cube__detail dno">
                <div class="cube__detail-picture">
                    <img loading="lazy" src="<?=$arResult['IMAGES'][5]?>" alt="" class="cube__detail-img">
                </div>
                <div class="cube__detail-feature fenix-bullet">Плоское дно</div>
            </div>
            <div class="cube__image-wrapper">
                <img loading="lazy" src="<?=$arResult['IMAGE_MAIN']?>" alt="Куб Народный" class="cube__image">
            </div>
        </div>
    </div>
</section>