<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$resSect = CIBlockSection::GetList(
  [],
  [
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "SECTION_ID" => $arParams["PARENT_SECTION_ID"]
  ]
);
while ($section = $resSect->GetNext())
{
  $arResult['SUBSECTIONS'][$section['ID']] = $section;
}

foreach ($arResult['ITEMS'] as $key => $arItem)
{
	$arItem['PRICES']['PRICE']['PRINT_VALUE'] = number_format($arItem['PRICES']['PRICE']['PRINT_VALUE'], 0, '.', ' ');
	$arItem['PRICES']['PRICE']['PRINT_VALUE'] .= ' '.$arItem['PROPERTIES']['PRICECURRENCY']['VALUE_ENUM'];

	$arResult['ITEMS'][$key] = $arItem;

  $arResult['SUBSECTIONS'][$arItem['~IBLOCK_SECTION_ID']]['ELEMENTS'][] = $arItem;
}
