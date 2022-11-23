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
<section class="shipment" id="shipment">
    <div class="shipment__container centered-container">
    <div class="shipment__title st-font st-font--white">
        Бесплатная доставка по России
    </div>
    <div class="shipment__wrapper">
        <div class="shipment__russia">
            <b>По России:</b> бесплатная доставка до ближайшего пункта <img src="<?=$arResult['IMAGES'][1]?>" alt="sdek" width="50em"> (3-5дней) или <img
                    src="<?=$arResult['IMAGES'][2]?>" alt="pochta" width="80em">
        </div>
        <div class="shipment__msk"><b>Москва и МО:</b> бесплатная доставка собственной курьерской службой (1-3&nbspдня)
        </div>
        <div class="shipment__questions">По любым вопросам обращаться по телефону: <b><?= $GLOBALS['phone'] ?></b>
        </div>
        <img src="<?=$arResult['IMAGES'][0]?>" class="shipment__image">
        <div class="shipment__payment">Оплата сразу после получения. Можно вскрыть упаковку и проверить товар.</div>
    </div>
    </div>
</section>
