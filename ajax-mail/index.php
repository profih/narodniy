<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$CLASSES_DIR = $_SERVER['DOCUMENT_ROOT'] . '/local/classes/';

// Тестируем необходимые классы (список не окончательный)
require_once $CLASSES_DIR . 'Dadata/Api.php';
require_once $CLASSES_DIR . 'Dadata/Request.php';

function getRealIP() {
    $ip = false;
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode (', ', $_SERVER['HTTP_X_FORWARDED_FOR']);
        for ($i = 0; $i < count($ips); $i++) {
            if (!preg_match("/^(10|172\\.16|192\\.168)\\./", $ips[$i])) {
                $ip = $ips[$i];
                break;
            }
        }
    }
    return ($ip ? : $_SERVER['REMOTE_ADDR']);
}

$dadata =  new \Dadata\Api();
$city = json_decode($dadata -> searchByIp(getRealIP()), true)['location']['value'];

if (!$_POST){die();
}
CModule::IncludeModule('dj.bitrix24');

use DJScripts\Bitrix24;

$bx = new Bitrix24(9623667395, false, 'Новый запрос Народный', false);

if ($_POST['template'] === 'poll') {
    $data = json_decode($_POST['data'], true);
    $message = "Имя " . $data['name'];
    $message .= "\nТелефон: " . $data['phone'];
    $message .= "\nПочта: " . $data['email'];
    foreach ($data['poll'] as $question => $answer) {
        $message .= "\n - " . $question . "\n";
        $message .= " - " . $answer . "\n";
    }
    mail('narodniy@feniks-opt.ru', 'Пройденный опрос (Народный)', $message);
    $bx -> createCallbackLead($_POST['phone'], "Пройденный опрос (Народный)\n" . $message, "Пройденный опрос (Народный)", $_POST['name'], $city);
}else if ($_POST['template'] === 'tinkoff') {
    $message = "Имя " . $_POST['name'];
    $message .= "\nТелефон: " . $_POST['phone'];
    mail('narodniy@feniks-opt.ru', 'Заявка на рассрочку tinkoff (Народный)', $message);
    $bx -> createCallbackLead($_POST['phone'], 'Заявка на рассрочку tinkoff (Народный)', 'Заявка на рассрочку tinkoff (Народный)', $_POST['name'], $city);
}else if ($_POST['template'] === 'callback') {
    $message = "Имя " . $_POST['name'];
    $message .= "\nТелефон: " . $_POST['phone'];
    $message .= "\nПочта: " . $_POST['email'];
    mail('narodniy@feniks-opt.ru', 'Заявка на обратный звонок (Народный)', $message);
    $bx -> createCallbackLead($_POST['phone'], 'Заявка на обратный звонок (Народный)', 'Заявка на обратный звонок (Народный)', $_POST['name'], $city);
}else if ($_POST['template'] === 'order') {
    $data = json_decode($_POST['data'], true);
    $message = 'Новый заказ!
Состав:
';
    $products_array = [];
    foreach ($data['cart'] as $item) {
        $message .= $item['PRODUCT_NAME'] . ' - ' . $item['PRICE'] . 'р
';
        $products_array[] = [
            'PRODUCT_NAME' => $item['PRODUCT_NAME'],
            'PRICE' => $item['PRICE'],
            'QUANTITY' => $item['QUANTITY']
        ];
    }
    $message .= '
Сумма: ' . $data['sum'] . '
Имя: ' . $data['name'] . '
Телефон: ' . $data['phone'] . '
Почта: ' . $data['email'];
    mail('narodniy@feniks-opt.ru', 'Новый заказ (Народный)', $message);
    $bx -> createOrderLead($data['phone'], $products_array, null, 'Новый заказ Народный', $data['name'], $data['email'], $city);

}
file_put_contents("/home/bitrix/ext_www/opt.dj-development.ru/post.log", print_r($_POST, true), FILE_APPEND );
