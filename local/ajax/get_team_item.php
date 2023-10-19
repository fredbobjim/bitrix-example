<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (!empty($_POST['item_id'])) {
  CModule::IncludeModule("iblock");
  CModule::IncludeModule("main");

  $res = CIBlockElement::GetList(
    [],
    ['ID' => $_POST['item_id'], 'IDLOCK_ID' => 9],
    false,
    false,
    ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_POST', 'PROPERTY_QUOTE']

  );
  if ($el = $res->GetNext()) {

    $item = [
      'name' => $el['NAME'],
      'post' => $el['PROPERTY_POST_VALUE'],
      'description' => $el['PREVIEW_TEXT'],
      'quote' => $el['PROPERTY_QUOTE_VALUE']['TEXT'],
      'img' => CFile::GetPath($el['PREVIEW_PICTURE'])
    ];

    echo json_encode($item);

  }
}
