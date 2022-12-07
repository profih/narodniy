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
            <a href="https://t.me/feniks_narodniy" target="_blank"> <img class="messages__icon" alt='telegramm' loading="lazy" src="/images/tg.png"></a>
            <a href="https://api.whatsapp.com/send?phone=79685706952" target="_blank"> <img src="/images/whatsapp.png" alt="whatsapp" class="messages__icon"></a>
        </div>
        <div class="messages__message">
            Или закажите обратный звонок, и мы свяжемся с вами в ближайшее время:
        </div>
        <input type="text" id="messages-phone" class="messages__input tel-mask" placeholder="Тел.:">
        <a class="messages__submit" id="messages-submit">Отправить</a>
        <img loading="lazy" src="<?=$arResult['IMAGES'][0]?>" alt="Народный вебсайт" class="messages__background desktop">
    </div>
</section>
<div class="fixed-action-button" id="action-callback">
    Хочу купить!
</div>

<div class="order__callback pop" style="display:none;">
    <form method="post" id="#callback-post">
        <p class="order__popup-title">Поможем оформить заказ:</p>
        <img loading="lazy"  src="<?=$arResult['IMAGES'][1]?>" alt="Народный" class="order__callback-image">
        <input class="order__input" type="text" placeholder="Имя" id="name-callback">
        <input class="order__input tel-mask" type="tel" required placeholder="Тел.:" id="phone-callback">
        <input class="order__input" type="email" placeholder="Email:" id="email-callback">
        <button value="Отправить" id='#callback-post' class="order__popup-button">отправить</button>
    </form>
</div>