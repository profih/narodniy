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
<section class="usage" id="usage">
    <div class="usage__container centered-container">
        <img loading="lazy" src="<?= $arResult['IMAGES'][0] ?>" alt="Народный в работе" class="usage__image">

        <div class="usage__title st-font">Порядок работы:</div>
        <div class="usage__order">
            <div class="usage__point fenix-bullet">Заливаем брагу</div>
            <div class="usage__point fenix-bullet">ставим на плиту (или подключаем ТЭН)</div>
            <div class="usage__point fenix-bullet">подключаем воду к нижним трубкам отвода</div>
            <div class="usage__point fenix-bullet">к верхним трубкам подключают отвод воды</div>
            <div class="usage__point fenix-bullet">включаем плиту (или ТЭН)</div>
            <div class="usage__point fenix-bullet">пары проходят очистку через РПН тяжелые фракции кондексируются и оседают</div>
            <div class="usage__point fenix-bullet">легки пары проходят дальше через сухопарник, который улучшают степень очистки.
                Здесь же
                можно добавить ароматические добавки.
            </div>
            <div class="usage__point fenix-bullet">очищенные пары попадают в холодильник, где конденсируются в готовый продукт</div>
        </div>
    </div>
</section>