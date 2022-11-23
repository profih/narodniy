<?php

use Bitrix\Main\Localization\Loc;
use    Bitrix\Main\HttpApplication;
use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option;

Loc::loadMessages(__FILE__);

$request = HttpApplication::getInstance()->getContext()->getRequest();

$module_id = htmlspecialcharsbx($request["mid"] != "" ? $request["mid"] : $request["id"]);

Loader::includeModule($module_id);

$aTabs = array(
    array(
        "DIV" => "edit",
        "TAB" => Loc::getMessage("OPTIONS_TAB"),
        "TITLE" => Loc::getMessage("OPTIONS_TAB_COMMON"),
        "OPTIONS" => array(
            Loc::getMessage("OPTIONS_TAB_COMMON"),
            array(
                "webhook_link",
                Loc::getMessage("OPTIONS_WEBHOOK_LINK"),
                "",
                array("text", 50)
            ),
            array(
                "source_id",
                Loc::getMessage("OPTIONS_SOURCE_ID"),
                "",
                array("text", 50)
            ),
            array(
                "assigned_by_id",
                Loc::getMessage("OPTIONS_ASSIGNED_BY"),
                "",
                array("text", 50)
            ),
            array(
                "default_title",
                Loc::getMessage("OPTIONS_DEFAULT_TITLE"),
                "",
                array("text", 50)
            ),
        )
    )
);


$tabControl = new CAdminTabControl(
    "tabControl",
    $aTabs
);

$tabControl->Begin();

if ($request->isPost() && check_bitrix_sessid()) {

    foreach ($aTabs as $aTab) {

        foreach ($aTab["OPTIONS"] as $arOption) {

            if (!is_array($arOption)) {

                continue;
            }

            if ($arOption["note"]) {

                continue;
            }

            if($request["apply"]){
            $optionValue = $request->getPost($arOption[0]);

            Option::set($module_id, $arOption[0], is_array($optionValue) ? implode(",", $optionValue) : $optionValue);
        }
        }
    }

    LocalRedirect($APPLICATION->GetCurPage() . "?mid=" . $module_id . "&lang=" . LANG);
}
?>
<form action="<? echo($APPLICATION->GetCurPage()); ?>?mid=<? echo($module_id); ?>&lang=<? echo(LANG); ?>" method="post">

    <?
    foreach ($aTabs as $aTab) {

        if ($aTab["OPTIONS"]) {

            $tabControl->BeginNextTab();

            __AdmSettingsDrawList($module_id, $aTab["OPTIONS"]);
        }
    }

    $tabControl->Buttons();
    ?>

    <input type="submit" name="apply" value="<? echo(Loc::GetMessage("OPTIONS_INPUT_APPLY")); ?>" class="adm-btn-save"/>

    <?
    echo(bitrix_sessid_post());
    ?>

</form>