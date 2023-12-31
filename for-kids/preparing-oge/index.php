<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Школа подготовки к ЕГЭ/ОГЭ");
?>

<?php $APPLICATION->IncludeComponent("bitrix:news.detail","header_image",Array(
    "DISPLAY_DATE" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "USE_SHARE" => "Y",
    "SHARE_HIDE" => "N",
    "SHARE_TEMPLATE" => "",
    "SHARE_HANDLERS" => array("delicious"),
    "SHARE_SHORTEN_URL_LOGIN" => "",
    "SHARE_SHORTEN_URL_KEY" => "",
    "AJAX_MODE" => "N",
    "IBLOCK_TYPE" => "slider",
    "IBLOCK_ID" => "14",
    "ELEMENT_ID" => 112,
    "ELEMENT_CODE" => "",
    "CHECK_DATES" => "Y",
    "FIELD_CODE" => Array("ID"),
    "PROPERTY_CODE" => Array("DESCRIPTION"),
    "IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
    "DETAIL_URL" => "",
    "SET_TITLE" => "Y",
    "SET_CANONICAL_URL" => "N",
    "SET_BROWSER_TITLE" => "N",
    "BROWSER_TITLE" => "-",
    "SET_META_KEYWORDS" => "N",
    "META_KEYWORDS" => "-",
    "SET_META_DESCRIPTION" => "N",
    "META_DESCRIPTION" => "-",
    "SET_STATUS_404" => "N",
    "SET_LAST_MODIFIED" => "N",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "ADD_ELEMENT_CHAIN" => "N",
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "USE_PERMISSIONS" => "N",
    "GROUP_PERMISSIONS" => Array(),
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600",
    "CACHE_GROUPS" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "PAGER_TITLE" => "Страница",
    "PAGER_TEMPLATE" => "",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_BASE_LINK_ENABLE" => "Y",
    "SHOW_404" => "N",
    "MESSAGE_404" => "",
    "STRICT_SECTION_CHECK" => "N",
    "PAGER_BASE_LINK" => "",
    "PAGER_PARAMS_NAME" => "arrPager",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N"
  )
);?>

<?php
$arrFilterPreparingEge = ['!CODE' => 'dobroznayka'];
$APPLICATION->IncludeComponent(
  "bitrix:catalog.section",
  "preparing-ege",
  Array(
    "IBLOCK_TYPE" => 'products',
    "IBLOCK_ID" => '2',
    "ELEMENT_SORT_FIELD" => 'ID',
    "ELEMENT_SORT_ORDER" => 'asc',
    "PROPERTY_CODE" => [],
    "META_KEYWORDS" => '-',
    "META_DESCRIPTION" => '-',
    "BROWSER_TITLE" => '-',
    "INCLUDE_SUBSECTIONS" => 'N',
    "BASKET_URL" => '/personal/cart/',
    "ACTION_VARIABLE" => 'action',
    "PRODUCT_ID_VARIABLE" => 'id',
    "SECTION_ID_VARIABLE" => 'SECTION_ID',
    "FILTER_NAME" => 'arrFilterPreparingEge',
    "DISPLAY_PANEL" => 'N',
    "CACHE_TYPE" => 'A',
    "CACHE_TIME" => '36000000',
    "CACHE_FILTER" => 'N',
    "CACHE_GROUPS" => 'Y',
    "SET_TITLE" => 'Y',
    "SET_STATUS_404" => 'Y',
    "DISPLAY_COMPARE" => '',
    "PAGE_ELEMENT_COUNT" => '10',
    "LINE_ELEMENT_COUNT" => '1',
    "PRICE_CODE" => array("BASE"),
    "USE_PRICE_COUNT" => 'Y',
    "SHOW_PRICE_COUNT" => '',
    "PRICE_VAT_INCLUDE" => "N",
    "DISPLAY_TOP_PAGER" => 'N',
    "DISPLAY_BOTTOM_PAGER" => 'Y',
    "PAGER_TITLE" => 'Продукция',
    "PAGER_SHOW_ALWAYS" => 'N',
    "PAGER_TEMPLATE" => 'arrows',
    "PAGER_DESC_NUMBERING" => 'N',
    "PAGER_DESC_NUMBERING_CACHE_TIME" => '36000000',
    "PAGER_SHOW_ALL" => 'N',
    "SECTION_ID" => '1',
    "SECTION_CODE" => '',
    "SECTION_URL" => '',
    "DETAIL_URL" => '',
  )
);
?>

<section class="preparation">
  <div class="o-limit-x">
    <h3 class="label">ОТЛИЧНАЯ ПОДГОТОВКА</h3>
    <h2>Почему мы?</h2>
    <p class="preparation__description">
      <?php $APPLICATION->IncludeFile("/include/preparing_ege/text2.php"); ?>
    </p>

    <?php $APPLICATION->IncludeComponent("bitrix:news.list","why_us",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "preparing_ege",
        "IBLOCK_ID" => "18",
        "NEWS_COUNT" => "4",
        "SORT_BY1" => "ID",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => Array(),
        "PROPERTY_CODE" => Array('PRICE'),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
      )
    );?>

  </div>
</section>

<section class="home-news benefits home-news-ege">
    <div class="o-limit-x">
        <h3 class="label text-center">ТОЛЬКО ЛУЧШЕЕ</h3>
        <h2 class="text-center">Преимущества занятий с нами</h2>

      <?php $APPLICATION->IncludeComponent("bitrix:news.list","advantages_studying_with_us",Array(
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "AJAX_MODE" => "N",
          "IBLOCK_TYPE" => "preparing",
          "IBLOCK_ID" => "12",
          "NEWS_COUNT" => "3",
          "SORT_BY1" => "ID",
          "SORT_ORDER1" => "ASC",
          "SORT_BY2" => "SORT",
          "SORT_ORDER2" => "ASC",
          "FILTER_NAME" => "",
          "FIELD_CODE" => Array("ID"),
          "PROPERTY_CODE" => Array("DESCRIPTION"),
          "CHECK_DATES" => "Y",
          "DETAIL_URL" => "",
          "PREVIEW_TRUNCATE_LEN" => "",
          "ACTIVE_DATE_FORMAT" => "d.m.Y",
          "SET_TITLE" => "N",
          "SET_BROWSER_TITLE" => "N",
          "SET_META_KEYWORDS" => "N",
          "SET_META_DESCRIPTION" => "N",
          "SET_LAST_MODIFIED" => "Y",
          "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
          "ADD_SECTIONS_CHAIN" => "N",
          "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
          "PARENT_SECTION" => "",
          "PARENT_SECTION_CODE" => "",
          "INCLUDE_SUBSECTIONS" => "Y",
          "CACHE_TYPE" => "A",
          "CACHE_TIME" => "3600",
          "CACHE_FILTER" => "Y",
          "CACHE_GROUPS" => "Y",
          "DISPLAY_TOP_PAGER" => "N",
          "DISPLAY_BOTTOM_PAGER" => "N",
          "PAGER_TITLE" => "Новости",
          "PAGER_SHOW_ALWAYS" => "Y",
          "PAGER_TEMPLATE" => "",
          "PAGER_DESC_NUMBERING" => "Y",
          "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
          "PAGER_SHOW_ALL" => "Y",
          "PAGER_BASE_LINK_ENABLE" => "Y",
          "SET_STATUS_404" => "Y",
          "SHOW_404" => "Y",
          "MESSAGE_404" => "",
          "PAGER_BASE_LINK" => "",
          "PAGER_PARAMS_NAME" => "arrPager",
          "AJAX_OPTION_JUMP" => "N",
          "AJAX_OPTION_STYLE" => "Y",
          "AJAX_OPTION_HISTORY" => "N",
          "AJAX_OPTION_ADDITIONAL" => ""
        )
      );?>

    </div>
</section>

<?php $APPLICATION->IncludeComponent("bitrix:news.list","how_to_get",Array(
    "DISPLAY_DATE" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "AJAX_MODE" => "N",
    "IBLOCK_TYPE" => "preparing",
    "IBLOCK_ID" => "13",
    "NEWS_COUNT" => "3",
    "SORT_BY1" => "ID",
    "SORT_ORDER1" => "ASC",
    "SORT_BY2" => "SORT",
    "SORT_ORDER2" => "ASC",
    "FILTER_NAME" => "",
    "FIELD_CODE" => Array("ID"),
    "PROPERTY_CODE" => Array("DESCRIPTION"),
    "CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "SET_TITLE" => "N",
    "SET_BROWSER_TITLE" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_LAST_MODIFIED" => "Y",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
    "PARENT_SECTION" => "",
    "PARENT_SECTION_CODE" => "",
    "INCLUDE_SUBSECTIONS" => "Y",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "PAGER_TITLE" => "Новости",
    "PAGER_SHOW_ALWAYS" => "Y",
    "PAGER_TEMPLATE" => "",
    "PAGER_DESC_NUMBERING" => "Y",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "Y",
    "PAGER_BASE_LINK_ENABLE" => "Y",
    "SET_STATUS_404" => "Y",
    "SHOW_404" => "Y",
    "MESSAGE_404" => "",
    "PAGER_BASE_LINK" => "",
    "PAGER_PARAMS_NAME" => "arrPager",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_ADDITIONAL" => ""
  )
);?>

<?php $APPLICATION->IncludeFile("/include/faq.php"); ?>

<?php $APPLICATION->IncludeFile("/include/pay.php"); ?>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
