<?php
foreach ($arResult["ITEMS"] as $key => $arItem) {
  if ($arItem['CODE'] == 'extensive_child_development') {
    $arResult["ELEMENT_BEFORE"] = $arItem;
    unset($arResult["ITEMS"][$key]);
  }

  if ($arItem['CODE'] == 'creating_community') {
    $arResult["ELEMENT_AFTER"] = $arItem;
    unset($arResult["ITEMS"][$key]);
  }
}
