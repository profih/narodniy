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
<section class="features" id="features">
    <div class="features__container centered-container">
        <div class="features__feature">
            <img src="<?=$arResult['IMAGES'][0]?>" alt="Нержавеющая сталь" class="features__image">
            <div class="features__name">
                Нержавеющая сталь
            </div>
            <div class="features__description">
                Высокая коррозионная стойкость, износостойкость, идеальный материал для&nbspсамогонного аппарата
            </div>
        </div>
        <div class="features__feature">
            <img src="<?=$arResult['IMAGES'][1]?>" alt="Гарантия производителя" class="features__image">
            <div class="features__name">
                Гарантия производителя
            </div>
            <div class="features__description">
                Как производители, мы несем ответственность за свою продукцию. По всем вопросам можно связаться напрямую
            </div>
        </div>
        <div class="features__feature">
            <img src="<?=$arResult['IMAGES'][2]?>" alt="Экономим время" class="features__image">
            <div class="features__name">
                Экономим время
            </div>
            <div class="features__description">
                Высокая скорость очистки позволяет экономить время на перегонке. И быстро получать любимые напитки
            </div>
        </div>
        <div class="features__feature">
            <img src="<?=$arResult['IMAGES'][3]?>" alt="Экономим деньги" class="features__image">
            <div class="features__name">
                Экономим деньги
            </div>
            <div class="features__description">
                Получаем домашние, натуральные&nbspнапитки в 3 или 4 раза дешевле, чем в магазине
            </div>
        </div>
    </div>
</section>