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

<section class="order" id="order">
    <div class="order__container centered-container">
        <div class="order__title st-font">Оформление заказа:</div>
        <div class="order__items">
            <? foreach ($arResult['ITEMS'] as $item):?>
            <div class="order__item base" data-catalog-id="<?=$item['ID']?>">
                <div class="order__item-quan">
                    <span class="order__quan-dec">-</span>
                    <input type="number" class="order__quan-num" value="0">
                    <span class="order__quan-inc">+</span>
                </div>
                <div class="order__item-name"><?=$item['NAME']?></div>
                <div class="order__item-bp"><?=number_format($item['UF_BASE_PRICE_1'], 0, '.', '&nbsp')?>&nbspр</div>
                <div class="order__item-p"><?=number_format($item['UF_PRICE_1C'], 0, '.', '&nbsp')?>&nbspр</div>
            </div>
            <? endforeach;?>
        </div>
        <img src="<?=CFile::GetPath($arResult['ITEMS'][0]["DETAIL_PICTURE"])?>" class="order__image">
        <div class="order__prices">
            <span class="order__bp"><?=number_format($GLOBALS['base_price-20'], 0, '.', '&nbsp')?></span><br>
            <span class="order__p"><b><?=number_format($GLOBALS['price-20'], 0, '.', '&nbsp')?></b>&nbspр</span>
        </div>
        <a class="order__action">Оформить</a>
    </div>
    <div class="order__popup pop" style="display:none;">
        <form method="post" id="order-post">
            <p class="order__popup-title">Ваши данные для подтверждения заказа:</p>
            <input class="order__input tel-mask" type="tel" required placeholder="Тел.:" id="phone">
            <button value="Отправить" class="order__popup-button">отправить</button>
        </form>
    </div>
    <div class="order__thanks pop" style="display:none;">
            <p class="order__popup-title">Спасибо за Ваш заказ!</p>
        <p class="order__popup-text">Ваш менеджер спешит подготовить для вас самое лучшее предложение!</p>
        <p class="order__popup-text">Как только он все согласует сразу Вам позвонит!</p>
    </div>
</section>