<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader,
  Bitrix\Main\Context,
  Bitrix\Sale\Basket,
  Bitrix\Sale\FUser;

if(!Loader::includeModule("catalog") ||
  !Loader::includeModule("sale") ||
  !Loader::includeModule("main") ||
  !Loader::includeModule("iblock"))
  die();

global $USER;

$request = Context::getCurrent()->getRequest();

if ($USER->IsAuthorized()) {
  $rsUser = $USER->GetByID($USER->GetID());
  $arUser = $rsUser->Fetch();

  $user = new CUser;
  $arFields = Array(
    "NAME" => $request->get('user_name'),
    "PERSONAL_PHONE" => $request->get('user_phone')
  );
  $user->Update($arUser['ID'], $arFields);

  $rsUser = $USER->GetByID($USER->GetID());
  $arUser = $rsUser->Fetch();
} else {

  $rsUser = CUser::GetByLogin($request->get('user_email'));
  $arUser = $rsUser->Fetch();

  if (!$arUser) {
    $name = $request->get('user_name');
    $email = $request->get('user_email');
    $phone = $request->get('user_phone');
    $password = randString(8);

    $user = new CUser;
    $arFields = Array(
      "NAME"              => $name,
      "LAST_NAME"         => "",
      "EMAIL"             => $email,
      "LOGIN"             => $email,
      "ACTIVE"            => "Y",
      "GROUP_ID"          => array(2, 3, 4),
      "PASSWORD"          => $password,
      "CONFIRM_PASSWORD"  => $password,
      "PERSONAL_PHONE"    => $phone
    );

    $userID = $user->Add($arFields);
    $rsUser = $USER->GetByID($userID);
    $arUser = $rsUser->Fetch();
  } else {
    $user = new CUser;
    $arFields = Array(
      "NAME" => $request->get('user_name'),
      "PERSONAL_PHONE" => $request->get('user_phone')
    );
    $user->Update($arUser['ID'], $arFields);

    $rsUser = CUser::GetByLogin($request->get('user_email'));
    $arUser = $rsUser->Fetch();
  }

  $USER->Authorize($arUser['ID']);
}

$basket = Basket::loadItemsForFUser(
  Fuser::getId(),
  Context::getCurrent()->getSite()
);

$order = Bitrix\Sale\Order::create(Context::getCurrent()->getSite(), Fuser::getId());
$order->setPersonTypeId(1);
$order->setBasket($basket);
$order->setFieldNoDemand('USER_ID', $arUser['ID']);

$shipmentCollection = $order->getShipmentCollection();
$shipment = $shipmentCollection->createItem(
  Bitrix\Sale\Delivery\Services\Manager::getObjectById(1)
);

$shipmentItemCollection = $shipment->getShipmentItemCollection();

foreach ($basket as $basketItem)
{
  $item = $shipmentItemCollection->createItem($basketItem);
  $item->setQuantity($basketItem->getQuantity());
}

$paymentCollection = $order->getPaymentCollection();
$payment = $paymentCollection->createItem(
  Bitrix\Sale\PaySystem\Manager::getObjectById((int)$request->get('pay_system_id'))
);

$payment->setField("SUM", $order->getPrice());
$payment->setField("CURRENCY", $order->getCurrency());

$propertyCollection = $order->getPropertyCollection();
$phoneProp = $propertyCollection->getPhone();
$phoneProp->setValue($arUser['PERSONAL_PHONE']);
$nameProp = $propertyCollection->getPayerName();
$nameProp->setValue($arUser['NAME']);
$emailProp = $propertyCollection->getUserEmail();
$emailProp->setValue($arUser['EMAIL']);

$result = $order->save();
if ($result->isSuccess())
{
  echo json_encode(['order_id' => $result->getId()]);
} else {
  $result->getErrors();
}
