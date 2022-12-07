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
<section id="presents" class="presents">
    <div class="present__container centered-container">
        <h2 class="presents__title">Подарки!</h2>
        <div class="presents__comment">при оформлении заказа сегодня!</div>
        <? foreach ($arResult['ITEMS'] as $item): ?>
            <div class="presents__item">
                <div class="presents__picture-wrapper">
                    <img loading="lazy" src="<?= CFile::GetPath($item['DETAIL_PICTURE']) ?>" alt="<?= $item['NAME'] ?>"
                         class="presents__picture">
                </div>
                <div class="presents__name"><?= $item['NAME'] ?>,&nbsp<span
                            style="text-decoration: line-through"><?= $item['UF_PRICE_1C'] ?>&nbspр</span>
                </div>
            </div>
        <? endforeach; ?>
        <div class="presents__item presents__item--bonus">
            <img title="Бонусный сертификат" src="/images/svg/present_bonus.svg">
        </div>
        <div class="presents__item presents__item--bonus">
            <img title="Бесплатная доставка" src="/images/svg/shipment.svg">
        </div>
        <div class="presents__discount">
            <div class="presents__discount-text">Ваша экономия</div>
            <div class="presents__discount-price"><b><?
                    $sum = array_reduce($arResult['ITEMS'], function ($carry, $item) {
                        return $carry + $item['UF_PRICE_1C'];
                    }
                    );
                    echo number_format($sum + 1500, 0, '.', '&nbsp');
                    ?></b>р
            </div>
            <div class="presents__discount-zero"><b>= 0</b> рублей</div>
        </div>
        <a href="#order" class="presents__action">Заказать!</a>
    </div>
</section>