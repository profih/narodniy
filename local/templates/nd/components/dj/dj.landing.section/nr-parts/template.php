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
<section class="parts" id="parts">
    <div class="parts__container centered-container">
        <div class="parts__title st-font">Максимальная комплектация!</div>
        <div class="parts__comment">Ничего докупать не нужно!</div>

        <div class="parts__images-wrapper">
            <div class="parts__image-dist-wrapper">
                <i class="parts__number parts__number--3">3</i>
                <i class="parts__number parts__number--7">7</i>
                <i class="parts__number parts__number--8">8</i>
                <i class="parts__number parts__number--9">9</i>
                <i class="parts__number parts__number--10">10</i>
                <i class="parts__number parts__number--11">11</i>
                <img loading="lazy" src="<?=$arResult['IMAGES'][1]?>" alt="Народный дистиллятор" class="parts__image-dist"></div>
            <div class="parts__image-cube-wrapper">
                <i class="parts__number parts__number--1">1</i>
                <i class="parts__number parts__number--2">2</i>
                <i class="parts__number parts__number--4">4</i>
                <i class="parts__number parts__number--5">5</i>
                <img loading="lazy" src="<?=$arResult['IMAGES'][0]?>" alt="Народный куб" class="parts__image-cube">
            </div> <div class="parts__image-thermometer-wrapper">
                <i class="parts__number parts__number--6">6</i>
                <img loading="lazy" src="<?=$arResult['IMAGES'][2]?>" alt="Народный термометр" class="parts__image-thermometer">
            </div>
        </div>
        <ol class="parts__package">
            <li class="parts__item">перегонный куб</li>
            <li class="parts__item">сливной кран</li>
            <li class="parts__item">клапан сброса давления</li>
            <li class="parts__item">силиконовая прокладка под фланец</li>
            <li class="parts__item">барашки из нержавеющей стали (7шт)</li>
            <li class="parts__item">цифровой термометр</li>
            <li class="parts__item">фланец переходник 1,5 дюйма</li>
            <li class="parts__item">клапан на 1,5 дюйма</li>
            <li class="parts__item">прокладка на кламп 1,5 дюйма</li>
            <li class="parts__item">дистиллятор Народный New</li>
            <li class="parts__item">кран на сухопарник</li>
        </ol>
        <div class="parts__presents">
            <img src="" alt="Подарки" class="parts__present">
            <span class="parts__comment">+ Подарки</span>
        </div>
    </div>
</section>