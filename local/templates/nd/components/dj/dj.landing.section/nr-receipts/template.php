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
<section class="receipts" id="receipts">
    <div class="receipts__container centered-container">
        <div class="receipts__title st-font">Элитные напитки пропали?<br> Ничего подобного!</div>
        <div class="receipts__comment">Бурбон, виски, ром и многое другое - вы можете сделать сами, намного дешевле!
        </div>
        <div class="receipts__drinks">
            <div class="receipts__drink fenix-bullet">водка</div>
            <div class="receipts__drink fenix-bullet">джин</div>
            <div class="receipts__drink fenix-bullet">бальзам</div>
            <div class="receipts__drink fenix-bullet">самогон</div>
            <div class="receipts__drink fenix-bullet">спирт</div>
            <div class="receipts__drink fenix-bullet">коньяк</div>
            <div class="receipts__drink fenix-bullet">виски</div>
            <div class="receipts__drink fenix-bullet">ром</div>
            <div class="receipts__drink fenix-bullet">бренди</div>
            <div class="receipts__drink fenix-bullet">настойка</div>
        </div>
        <div class="receipts__table">
            <div class="receipts__receipt receipts__receipt--head desktop">
                <div class="receipts__receipt-title">Напиток</div>
                <div class="receipts__receipt-title">Вода</div>
                <div class="receipts__receipt-title">Сахар</div>
                <div class="receipts__receipt-title">Дрожжи</div>
                <div class="receipts__receipt-title">Тайный ингридиент</div>
                <div class="receipts__receipt-title">
                    Цена за 0,5 л
                </div>
            </div>
            <div class="receipts__receipt">
                <div class="receipts__name">Водка, Спирт</div>
                <div class="receipts__prices">
                    <span class="receipts__bp">260 р</span>
                    <span class="receipts__p">от <b>37</b> р</span>
                </div>
                <div class="receipts__water"><span>25 л</span></div>
                <div class="receipts__sugar"><span>5 кг</span></div>
                <div class="receipts__yeast"><span>200 г</span></div>
                <div class="receipts__ingredient empty"></div>
                <div class="receipts__image"><img src="<?= $arResult['IMAGES'][1] ?>" alt=""
                                                  class="receipts__receipt-img">
                </div>
            </div>
            <div class="receipts__receipt">
                <div class="receipts__name">Кальвадос</div>
                <div class="receipts__prices">
                    <span class="receipts__bp">890 р</span>
                    <span class="receipts__p">от <b>155</b> р</span>
                </div>
                <div class="receipts__water"><span>10 л</span></div>
                <div class="receipts__sugar empty"><span></span></div>
                <div class="receipts__yeast"><span>100 г</span></div>
                <div class="receipts__ingredient receipts__ingredient--apple"><span>15 кг</span></div>
                <div class="receipts__image"><img src="<?= $arResult['IMAGES'][2] ?>" alt=""
                                                  class="receipts__receipt-img">
                </div>
            </div>
            <div class="receipts__receipt">
                <div class="receipts__name">Виски</div>
                <div class="receipts__prices">
                    <span class="receipts__bp">1200 р</span>
                    <span class="receipts__p">от <b>210</b> р</span>
                </div>
                <div class="receipts__water"><span>20 л</span></div>
                <div class="receipts__sugar empty"><span></span></div>
                <div class="receipts__yeast"><span>200 г</span></div>
                <div class="receipts__ingredient receipts__ingredient--grain"><span>6 кг</span></div>
                <div class="receipts__image"><img src="<?= $arResult['IMAGES'][3] ?>" alt=""
                                                  class="receipts__receipt-img">
                </div>
            </div>
            <div class="receipts__receipt">
                <div class="receipts__name">Коньяк, Чача, Ракия</div>
                <div class="receipts__prices">
                    <span class="receipts__bp">950 р</span>
                    <span class="receipts__p">от <b>140</b> р</span>
                </div>
                <div class="receipts__water empty"><span></span></div>
                <div class="receipts__sugar empty"><span></span></div>
                <div class="receipts__yeast"><span>200 г</span></div>
                <div class="receipts__ingredient receipts__ingredient--grape"><span>20 кг</span></div>
                <div class="receipts__image"><img src="<?= $arResult['IMAGES'][0] ?>" alt=""
                                                  class="receipts__receipt-img">
                </div>
            </div>
        </div>
    </div>
</section>