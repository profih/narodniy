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
<section class="additions" id="additions">
    <div class="additions__container centered-container">
        <div class="additions__title st-font">Вместе с аппаратом покупают:</div>
        <div class="additions__wrapper">
            <? foreach ($arResult['ITEMS'] as $item): ?>
                <div class="additions__item" data-catalog-id="<?=$item["ID"]?>">
                    <div class="additions__item-image-wrapper">
                        <img loading="lazy" src="<?= CFile::GetPath($item['DETAIL_PICTURE']) ?>"
                             alt="<?= $item['NAME'] ?>" class="additions__item-image">
                    </div>
                    <span class="additions__item-title"><?= $item['NAME'] ?></span>
                    <span class="additions__item-desc"><?= $item['DETAIL_TEXT'] ?></span>
                    <div class="additions__item-prices">
                        <span class="additions__item-bp"><?=$item['UF_BASE_PRICE_1']?>&nbspр</span><br>
                        <span class="additions__item-p"><b><?=$item['UF_PRICE_1C']?></b>&nbspр</span>
                    </div>
                    <i class="additions__item-cart"></i>
                    <div class="additions__item-quan">
                        <span class="additions__quan-dec" data-catalog-id="<?=$item["ID"]?>">-</span>
                        <input type="number" class="additions__quan-number" value="0">
                        <span class="additions__quan-inc" data-catalog-id="<?=$item["ID"]?>">+</span>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>