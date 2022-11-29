<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

include $_SERVER["DOCUMENT_ROOT"] . "/local/classes/DJPrices.php";
DJPrices::updatePricesTable();