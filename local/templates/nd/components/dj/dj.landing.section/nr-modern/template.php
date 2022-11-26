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
<section class="modern" id="modern">
    <div class="modern__container centered-container">
        <div class="modern__title st-font">Модульная конструкция</div>
        <div class="modern__features-1">
            <div class="modern__feature fenix-bullet">
                Модернизируйте аппарат за&nbspсчет доп. товаров
            </div>
            <div class="modern__feature fenix-bullet">
                царга - увеличит крепость&nbspдо&nbsp96%
            </div>
            <div class="modern__feature fenix-bullet">
                диоптр - визуальный контроль за процессом в колонне
            </div>
            <div class="modern__feature fenix-bullet">
                получился аппарат колонного типа
            </div>
        </div>
        <img src="<?=$arResult['IMAGES'][0]?>" alt="Народный без диоптра" class="modern__narod">
        <img src="<?=$arResult['IMAGES'][1]?>" alt="Народный с диоптром" class="modern__narod-dioptr">
        <div class="modern__features-2">
            <div class="modern__feature fenix-bullet">Бесконечно можно смотреть на три вещи: как горит огонь, как течёт вода и как поднимаются спиртовые пары</div>
        <div class="modern__comment">Все гениальное – просто!</div>
</div>
    </div>
</section>