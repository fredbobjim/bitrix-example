<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');

function validatePhone($phone)
{
  if (preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/", $phone)) return true;
  else return  false;
}

$error = '';
$PROPS = [];

if ($_REQUEST['form_name'] == 'want-another-course') {
  $iblockId = '37';
}
if ($_REQUEST['form_name'] == 'callback-form') {
    $iblockId = '55';
}
if ($_REQUEST['form_name'] == 'enroll-form') {
  $iblockId = '38';
  $PROPS['PARENT_FIO'] = htmlspecialchars($_REQUEST['parent']);
  $PROPS['CHILD_FIO'] = htmlspecialchars($_REQUEST['name']);
  $PROPS['CLASS'] = htmlspecialchars($_REQUEST['class']);
}
if ($_REQUEST['form_name'] == 'enroll-program') {
    $iblockId = '54';
    $PROPS['PARENT_NAME'] = htmlspecialchars($_REQUEST['parent-name']);
    $PROPS['PARENT_LAST_NAME'] = htmlspecialchars($_REQUEST['name']);
    $PROPS['CHILD_NAME'] = htmlspecialchars($_REQUEST['child-name']);
    $PROPS['CHILD_AGE'] = htmlspecialchars($_REQUEST['child-age']);

    foreach ($_POST as $key => $val) {
        if (strstr($key, 'summer-program'))
            $PROPS['SUMMER_PROGRAMS'][] = $val;
    }
}
if ($_REQUEST['form_name'] == 'entry-dobroznayka') $iblockId = '39';
if ($_REQUEST['form_name'] == 'entry-elementary-school') $iblockId = '40';
if ($_REQUEST['form_name'] == 'entry-middle-school') $iblockId = '41';
if ($_REQUEST['form_name'] == 'entry-nursery') $iblockId = '60';

if (!empty($_REQUEST['phone'])) {
  if (validatePhone($_REQUEST['phone']))
    $PROPS['PHONE'] = htmlspecialchars($_REQUEST['phone']);
  else
    $error = 'Не верный формат номера телефона!';
}

if (!empty($_REQUEST['email'])) {
  if (check_email($_REQUEST['email']))
    $PROPS['EMAIL'] = htmlspecialchars($_REQUEST['email']);
  else
    $error = 'Не верный формат Email!';
}

$arFields = array(
  "ACTIVE" => "Y",
  "IBLOCK_ID" => $iblockId,
  "IBLOCK_SECTION_ID" => false,
  "NAME" => htmlspecialchars($_REQUEST['name']),
  "PROPERTY_VALUES" => $PROPS
);

if ($error) {
  echo $error;
} else {
  $el = new CIBlockElement();
  if ($ID = $el->Add($arFields))
  {
    echo 'done';
  } else {
    echo 'Ошибка при отправке формы!';
  }
}


