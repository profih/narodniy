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
<section class="purification" id="purification">
    <div class="purification__container centered-container">
        <div class="purification__title st-font">Единственный аппарат с тройной степенью очистки</div>
        <div class="purification__text">
            <span class="purification__calc">Сетка панченкова + Дефлегматор + Сухопарник</span>
            <span class="purification__result">= ТРОЙНАЯ очистка</span>
        </div>
        <div class="purification__images-wrapper">
            <div class="purification__image-main-wrapper">
                <img loading="lazy" src="<?= $arResult['IMAGE_MAIN'] ?>" alt="Самогонный аппарат Народный"
                     class="purification__image-main">
            </div>
            <div class="purification__image-wrapper purification__image-wrapper--left">
                <img loading="lazy" src="<?= $arResult['IMAGES'][0] ?>" alt="Сухопарник" class="purification__image">
            </div>
            <div class="purification__image-wrapper purification__image-wrapper--left">
                <img loading="lazy" src="<?= $arResult['IMAGES'][1] ?>" alt="Холодильник" class="purification__image">
            </div>
            <div class="purification__image-wrapper purification__image-wrapper--right">
                <img loading="lazy" src="<?= $arResult['IMAGES'][2] ?>" alt="Дефлегматор" class="purification__image">
            </div>
            <div class="purification__image-wrapper purification__image-wrapper--right">
                <img loading="lazy" src="<?= $arResult['IMAGES'][3] ?>" alt="РПН" class="purification__image">
            </div>
        </div>
    </div>

</section>