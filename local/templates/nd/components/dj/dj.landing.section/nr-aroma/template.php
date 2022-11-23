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
<section class="aroma" id="aroma">
    <div class="aroma__container centered-container">
        <div class="aroma__title st-font">Сухопарник-аромакорзина!</div>
        <div class="aroma__features">
            <div class="aroma__feature fenix-bullet">ароматный самогон в процессе перегона</div>
            <div class="aroma__feature fenix-bullet">удобный сухопарник с аромакорзиной!</div>
            <div class="aroma__feature fenix-bullet">используйте травы, пряности или цедру для ароматизации конечного продукта</div>
            <div class="aroma__feature fenix-bullet">удобно засыпать во время перегонки</div>
            <div class="aroma__feature fenix-bullet">удобная ручка на джин-корзине</div>
        </div>
        <div class="aroma__images-wrapper">
            <div class="aroma__image-wrapper aroma__image-neg">
                <img loading="lazy" src="<?=$arResult['IMAGES'][0]?>" alt="Недостаток 1" class="aroma__image">
            </div>
            <div class="aroma__image-wrapper aroma__image-neg">

                <img loading="lazy" src="<?=$arResult['IMAGES'][1]?>" alt="Недостаток 2" class="aroma__image">
            </div>
            <div class="aroma__image-wrapper aroma__image-neg">

                <img loading="lazy" src="<?=$arResult['IMAGES'][2]?>" alt="Недостаток 3" class="aroma__image">
            </div>
            <div class="aroma__image-wrapper aroma__image-pos">

                <img loading="lazy" src="<?=$arResult['IMAGES'][3]?>" alt="Преимущество 4" class="aroma__image">
            </div>
            <div class="aroma__image-wrapper aroma__image-pos">

                <img loading="lazy" src="<?=$arResult['IMAGES'][4]?>" alt="Преимущество 5" class="aroma__image">
            </div>
            <div class="aroma__image-wrapper aroma__image-pos">

                <img loading="lazy" src="<?=$arResult['IMAGES'][5]?>" alt="Преимущество 6" class="aroma__image">
            </div>
        </div>

    </div>
</section>
