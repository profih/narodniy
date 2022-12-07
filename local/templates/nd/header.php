<!DOCTYPE html>
<html lang="ru" >
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="https://feniks-narodniy.ru/favicon.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <?
    include $_SERVER["DOCUMENT_ROOT"] . "/local/classes/DJPrices.php";
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.6.0.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.mask.js");

    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/analytics.php";

    $APPLICATION->ShowPanel();

    $GLOBALS['phone'] = '8 (800) 600-15-97';


    function getFileId($path){
        $path = explode('/', $path);
        unset($path[count($path) - 1]);
        unset($path[1]);;
        unset($path[0]);
        $res =  CFile::getList(array(), ['SUBDIR' => implode('/', $path)]);

        return $res -> fetch()['ID'];
    }

    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    $GLOBALS['price-20'] = DJPrices::getPricesById(104)['UF_PRICE_1C'];
    $GLOBALS['base_price-20'] = DJPrices::getPricesById(104)['UF_BASE_PRICE_1'];
    $GLOBALS['price-30'] = DJPrices::getPricesById(106)['UF_PRICE_1C'];
    $GLOBALS['base_price-30'] = DJPrices::getPricesById(106)['UF_BASE_PRICE_1'];
    ?>
    <title><?$APPLICATION -> ShowTitle();?></title>
    <script src="//code.jivo.ru/widget/Mj3ayeDYPA" async></script>
</head>
<header>
    <div class="header__container">
        <div class="header__logo"></div>
        <div class="header__menu">
            <a href="#features" class="header__menu-item">Преимущества</a>
            <a href="#shipment" class="header__menu-item">Доставка и оплата</a>
        </div>
		<div class="header__phone"><a id='call' class="phone-main" href="tel:8 (800) 600-15-97">8 (800) 600-15-97</a></div>
        <div class="header__burger mobile">
        </div>
        <div class="header__burger-menu" style="display: none">
            <a href="#features" class="header__burger-pointer">Преимущества</a>
            <a href="#shipment" class="header__burger-pointer">Доставка и оплата</a>
            <a href="#order" class="header__burger-pointer">Заказать</a>
        </div>
    </div>
</header>