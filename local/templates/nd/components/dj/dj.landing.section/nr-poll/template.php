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
<section class="poll" id="poll">
    <div class="poll__container centered-container">
        <div class="poll__question poll__question--present" id="poll-present">
            <div class="poll__question-title">Подбираете аппарат себе или в подарок?</div>
            <div class="poll__question-answers">
                <div class="poll__question-answer" data-next-question="poll-experience">
                    <img src="/upload/src/present/present_myself.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Себе</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-location-present">
                    <img src="/upload/src/present/present_present.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">В подарок</div>
                </div>
            </div>
        </div>
        <div class="poll__question poll__question--experience" id="poll-experience" style="display: none">
            <div class="poll__question-title">Какой у вас опыт?</div>
            <div class="poll__question-answers">
                <div class="poll__question-answer" data-next-question="poll-location">
                    <img src="/upload/src/present/present_new.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Новичок</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-location">
                    <img src="/upload/src/present/present_medium.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Менее 3 лет</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-location">
                    <img src="/upload/src/present/present_expert.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Более 3 лет</div>
                </div>
            </div>
        </div>
        <div class="poll__question poll__question--location" id="poll-location-present" style="display: none">
            <div class="poll__question-title">Где будет использоваться аппарат?</div>
            <div class="poll__question-answers">
                <div class="poll__question-answer" data-next-question="poll-budget">
                    <img src="/upload/src/present/present_flat.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Квартира</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-budget">
                    <img src="/upload/src/present/present_house.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Дом или дача</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-budget">
                    <img src="/upload/src/present/present_shed.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Гараж, сарай</div>
                </div>
            </div>
        </div>
        <div class="poll__question poll__question--location" id="poll-location" style="display: none">
            <div class="poll__question-title">Где используете аппарат?</div>
            <div class="poll__question-answers">
                <div class="poll__question-answer" data-next-question="poll-plate">
                    <img src="/upload/src/present/present_flat.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Квартира</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-plate">
                    <img src="/upload/src/present/present_house.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Дом или дача</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-plate">
                    <img src="/upload/src/present/present_shed.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Гараж, сарай</div>
                </div>
            </div>
        </div>
        <div class="poll__question poll__question--heat" id="poll-plate" style="display: none">
            <div class="poll__question-title">Какая плита для нагрева?</div>
            <div class="poll__question-answers">
                <div class="poll__question-answer" data-next-question="poll-finale">
                    <img src="/upload/src/present/present_gas.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Газовая</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-finale">
                    <img src="/upload/src/present/present_electric.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Электрическая</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-finale">
                    <img src="/upload/src/present/present_induct.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">Индукционная</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-finale">
                    <img src="/upload/src/present/present_tan.png" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">ТЭН</div>
                </div>
            </div>
        </div>
        <div class="poll__question poll__question--budget" id="poll-budget" style="display: none">
            <div class="poll__question-title">Какой запланирован бюджет?</div>
            <div class="poll__question-answers">
                <div class="poll__question-answer" data-next-question="poll-finale">
                    <img src="/upload/src/present/present_10000.svg" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">10 000 рублей</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-finale">
                    <img src="/upload/src/present/present_15000.svg" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">15 000 рублей</div>
                </div>
                <div class="poll__question-answer" data-next-question="poll-finale">
                    <img src="/upload/src/present/present_20000.svg" class="poll__question-answer-img">

                    <div class="poll__question-answer-text">20 000 рублей</div>
                </div>
            </div>
        </div>
        <div class="poll__next-button poll__next-button--transparent">Далее</div>
    </div>
    <div class="poll__popup fenix__popup pop" id="poll-popup" style="display:none;">
        <form method="post" id="poll-post">
            <p class="poll__popup-title">Спасибо за ваши ответы.<br>Наш менеджер готов предложить вам наиболее подходящий вариант. <br>Пожалуйста, оставьте свои контактные данные и мы перезвоним вам в ближайшее время.</p>
            <input class="poll__input" type="text"  placeholder="Имя:" id="poll-name">
            <input class="poll__input tel-mask" type="tel" required placeholder="Тел.:" id="poll-phone">
            <input class="poll__input" type="email"  placeholder="Email:" id="poll-email">
            <button value="Отправить" class="poll__popup-button fenix__button">отправить</button>
        </form>
    </div>
</section>