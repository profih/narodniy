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
<section class="package" id="package">
    <div class="package__container centered-container">
        <div class="package__title st-font">Улучшили каждую деталь:</div>
        <div class="package__comment">главное - в мелочах!</div>
        <div class="package__wrapper ">
            <?foreach ($arResult['ITEMS'] as $item):?>
            <div class="package__item">
                <div class="package__item-image-wrapper">
                    <img loading="lazy" src="<?=CFile::GetPath($item['DETAIL_PICTURE'])?>" alt="" class="package__item-image">
                </div>
                <div class="package__item-title"><?=$item['NAME']?></div>
                <div class="package__item-text"><?=$item['DETAIL_TEXT']?></div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>