<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (!empty($_POST['summer_program_id'])) {
    CModule::IncludeModule("iblock");

    $res = CIBlockElement::GetList(
        [],
        ['ID' => $_POST['summer_program_id'], 'IDLOCK_ID' => '2'],
        false,
        false,
        ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_WHAT_TO_DO', 'PROPERTY_DATES_SUMMER']

    );
    if ($el = $res->GetNextElement()) {
        $fields = $el->GetFields();

        $item = [
            'name' => $fields['NAME'],
            'text' => $fields['PREVIEW_TEXT'],
            'dates' => $el->GetProperty('DATES_SUMMER')['VALUE'],
            'whatDoing' => $el->GetProperty('WHAT_TO_DO')['VALUE'],
            'img' => CFile::GetPath($fields['PREVIEW_PICTURE'])
        ];

        echo json_encode($item);
    }
}
