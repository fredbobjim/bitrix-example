<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use \Bitrix\Main,
\Bitrix\Main\Localization\Loc as Loc,
Bitrix\Main\Loader,
Bitrix\Main\Config\Option,
Bitrix\Sale\Delivery,
Bitrix\Sale\PaySystem,
Bitrix\Sale,
Bitrix\Catalog,
Bitrix\Sale\Order,
Bitrix\Sale\Basket,
Bitrix\Currency\CurrencyManager,
Bitrix\Sale\DiscountCouponsManager,
Bitrix\Main\Context;
use \Bitrix\Highloadblock as HL;

if(!Loader::includeModule("catalog") ||
!Loader::includeModule("sale") ||
!Loader::includeModule("main") ||
!Loader::includeModule("iblock"))
die();

global $USER;

$SITE_ID = Context::getCurrent()->getSite();
$CURRENCY_CODE = CurrencyManager::getBaseCurrency();

//Форма магазина
if( isset($_REQUEST["AJAX_ADD_TO_BASKET_WITH_DOP"]) &&
$_REQUEST["AJAX_ADD_TO_BASKET_WITH_DOP"] == "Y" ) {

$request = Context::getCurrent()->getRequest();

$OFFER_ID = intval($request->get("OFFER_ID"));
$QUANTITY = intval($request->get("QUANTITY"));
$PRODUCT = CIBlockElement::GetByID(/*CCatalogSku::GetProductInfo(*/$OFFER_ID/*)['ID']*/)->GetNext();
// Получение корзины для текущего пользователя
$basket = \Bitrix\Sale\Basket::loadItemsForFUser(
\Bitrix\Sale\Fuser::getId(),
\Bitrix\Main\Context::getCurrent()->getSite()
);

if($QUANTITY > 1)  $QUANTITY =  $QUANTITY;
else   $QUANTITY = 1;

if ($item = $basket->getExistsItem('catalog', $PRODUCT["ID"])){

//Обновление товара в корзине
$item->setField('QUANTITY', $item->getQuantity() + $QUANTITY);

}else{

//Добавление товара
$item = $basket->createItem('catalog', $PRODUCT["ID"]);
$item->setFields([
'QUANTITY' => $QUANTITY,
'CURRENCY' => \Bitrix\Currency\CurrencyManager::getBaseCurrency(),
'LID' => \Bitrix\Main\Context::getCurrent()->getSite(),
'PRODUCT_PROVIDER_CLASS' => \Bitrix\Catalog\Product\Basket::getDefaultProviderName() ,
]);
}

//Сохранение изменений
$basket->save();

echo json_encode(Array('RESPONSE' => 'OK'));

}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
