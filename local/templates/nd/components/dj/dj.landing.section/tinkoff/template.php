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
<section class="installment" id="installment">
    <div class="installment__container centered-container">
        <div class="installment__title">
            РАССРОЧКА<br>
            БЕЗ ПЕРЕПЛАТ<br>
            <span class="installment__title-comment desktop">
            Не получается накопить на желаемую покупку?<br>
            Покупайте сейчас - платите потом
        </span>
        </div>
        <div class="installment__time">
            0<i> р.</i> 0<i> р.</i> 6<i> мес.</i>
        </div>
        <div class="installment__logo" style='background-image: url("/upload/src/tinkoff.png")'></div>
        <form class="installment__form">
            <input type="text" id="tinkoff-name" class="installment__form-input" placeholder="Имя">
            <input type="tel" id="tinkoff-phone" class="installment__form-input tel-mask" placeholder="Телефон*">
            <button type="submit"
                    class="installment__form-button send-tinkoff"
                    data-phone-input="tinkoff-phone"
                    data-name-input="tinkoff-name"
            >Оформить
            </button>
            <div class="installment__politics hero-text">Отправляя форму, Вы соглашаетесь с <a target="_blank" href="/confidential/">ПОЛИТИКОЙ
                    КОНФИДЕНЦИАЛЬНОСТИ</a></div>
        </form>
        <div class="installment__action">ОСТАВЬТЕ ЗАЯВКУ</div>
        <div class="installment__description">
            Наш сотрудник в ближайшее время свяжется с вами для подтверждения заказа. И проконсультирует по всем
            условиям рассрочки или кредита.
        </div>
        <div class="installment__price">
            Всего от 4816 р/мес
        </div>
    </div>
</section>

