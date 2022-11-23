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
<section class="compact" id="compact">
    <div class="compact__container centered-container">
        <div class="compact__title st-font st-font--white">Удобный, компактный, идеально впишется
            на любой кухне!
        </div>
        <div class="compact__text">
            Народный NEW работает с любыми типами плит:
            <br>- газовые
            <br>- электрические
            <br>- индукционные
            <br>- керамические
        </div>
        <img loading="lazy" src="<?=$arResult['IMAGES'][0]?>" alt="Народный на кухне" class="compact__image">
    </div>
</section>
