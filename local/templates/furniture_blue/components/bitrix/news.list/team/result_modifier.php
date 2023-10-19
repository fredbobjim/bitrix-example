<?php
$arFilter = array('IBLOCK_ID' => $arResult['ID'], 'ACTIVE' => 'Y', 'SECTION_ID' => false);
$rsSect = CIBlockSection::GetList(array(),$arFilter);

while ($arSect = $rsSect->GetNext())
{
  $arFilter = array("IBLOCK_ID" => $arSect['IBLOCK_ID'], "ACTIVE" => "Y", 'SECTION_ID' => $arSect['ID']);
  $arSelect =array('IBLOCK_ID', 'ID', 'NAME', 'PREVIEW_PICTURE', 'PREVIEW_TEXT', 'PROPERTY_POST', 'PROPERTY_QUOTE');
  $res = CIBlockElement::GetList(array($arParams['SORT_BY1'] => $arParams['SORT_ORDER1']), $arFilter, false, false, $arSelect);

  while($ob = $res->GetNext())
  {
    $arResult['TEAM_SECTIONS'][$arSect['NAME']][] = $ob;
  }

}
