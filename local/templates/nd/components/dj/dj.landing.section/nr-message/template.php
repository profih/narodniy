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
<section class="messages" id="messages">
    <div class="messages__container centered-container">
        <div class="messages__title st-font">Хотите заказать нашу продукцию или есть вопросы?</div>
        <div class="messages__message">
            Напишите нам в удобный мессенджер и мы проконсультируем Вас в течение рабочего дня
        </div>
        <div class="messages__icons">
            <img class="messages__icon" alt='telegramm' loading="lazy" src="/images/tg.png">
            <img src="/images/whatsapp.png" alt="whatsapp" class="messages__icon">
        </div>
        <div class="messages__message">
            Или закажите обратный звонок, и мы свяжемся с вами в ближайшее время:
        </div>
        <input type="text" id="messages-phone" class="messages__input tel-mask" placeholder="Тел.:">
        <a class="messages__submit" id="messages-submit">Отправить</a>
        <img src="<?=$arResult['IMAGES'][0]?>" alt="Народный вебсайт" class="messages__background desktop">
    </div>
</section>
<div class="fixed-action-button" id="action-callback">
    Хочу купить!
</div>