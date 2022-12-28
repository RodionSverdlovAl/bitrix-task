<?php
echo "<pre>";
print_r($arResult);
echo "</pre>";
if(isset($arResult["SPECIALDATE"])){
    $APPLICATION->SetPageProperty("specialdate", $arResult["SPECIALDATE"]);
} else {
    $APPLICATION->SetPageProperty("specialdate", "Не установлена");
}