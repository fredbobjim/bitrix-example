<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подготовка к школе");
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
    "ELEMENT_ID" => 110,
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

<section class="double-form md:mt-16 !mt-6">
    <div class="o-limit-x">
        <div class="grid md:grid-cols-2 gap-5">
            <div class="double-form__ls">
                <h3 class="label">ДОБРОЗНАЙКА</h3>
                <h2 class="md:!mb-8 !mb-0"><?php $APPLICATION->IncludeFile("/include/preparing/header1.php"); ?></h2>
                <p class="md:!block !hidden">
                  <?php $APPLICATION->IncludeFile("/include/preparing/text1.php"); ?>
                </p>
            </div>

            <?php $APPLICATION->IncludeFile("/local/include/sign_preparing.php"); ?>

        </div>
    </div>
</section>

<section class="info md:!mt-16 !mt-8">
    <div class="o-limit-x info__border-top md:!pt-12 !pt-8">
        <p class="md:text-center mx-auto md:w-1/2 w-full">
          <?php $APPLICATION->IncludeFile("/include/preparing/text2.php"); ?>
        </p>

      <?php $APPLICATION->IncludeComponent("bitrix:news.list","planning_enrol",Array(
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "AJAX_MODE" => "N",
          "IBLOCK_TYPE" => "preparing",
          "IBLOCK_ID" => "10",
          "NEWS_COUNT" => "2",
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

<section class="advantages advantages__floating advantages-combo">
    <div class="o-limit-x">
        <h3 class="label text-center">УДОБНЫЙ ГРАФИК</h3>
        <h2 class="text-center">Как проходят занятия?</h2>

      <?php $APPLICATION->IncludeComponent("bitrix:news.list","how_going_lessons",Array(
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "AJAX_MODE" => "N",
          "IBLOCK_TYPE" => "preparing",
          "IBLOCK_ID" => "11",
          "NEWS_COUNT" => "4",
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

        <div class="info-banner">
            <p>
              <?php $APPLICATION->IncludeFile("/include/preparing/text3.php"); ?>
            </p>
        </div>
    </div>
</section>

<section class="we">
    <div class="o-limit-x">
        <h3 class="label">ПРАВИЛЬНЫЙ ВЫБОР</h3>
        <h2>Почему мы?</h2>
        <p class="md:!w-1/2 !w-full">
          <?php $APPLICATION->IncludeFile("/include/preparing/text4.php"); ?>
        </p>
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

<?$APPLICATION->IncludeComponent(
  "bitrix:catalog.element",
  "dobroznayka",
  Array(
    "IBLOCK_TYPE" => 'products',
    "IBLOCK_ID" => '2',
    "PROPERTY_CODE" => ['TEXT_BEFORE_PRICE', 'TEXT_AFTER_PRICE'],
    "META_KEYWORDS" => '',
    "META_DESCRIPTION" => '',
    "BROWSER_TITLE" => '',
    "BASKET_URL" => '/personal/cart/',
    "ACTION_VARIABLE" => 'action',
    "PRODUCT_ID_VARIABLE" => 'id',
    "SECTION_ID_VARIABLE" => 'SECTION_ID',
    "DISPLAY_PANEL" => 'N',
    "CACHE_TYPE" => 'A',
    "CACHE_TIME" => '36000000',
    "CACHE_GROUPS" => 'Y',
    "SET_TITLE" => 'N',
    "SET_STATUS_404" => 'Y',
    "PRICE_CODE" => ['BASE'],
    "USE_PRICE_COUNT" => 'Y',
    "SHOW_PRICE_COUNT" => '',
    "PRICE_VAT_INCLUDE" => 'N',
    "PRICE_VAT_SHOW_VALUE" => 'N',
    "LINK_IBLOCK_TYPE" => '',
    "LINK_IBLOCK_ID" => '',
    "LINK_PROPERTY_SID" => '',
    "LINK_ELEMENTS_URL" => 'link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#',

    "ELEMENT_ID" => '',
    "ELEMENT_CODE" => 'dobroznayka',
    "SECTION_ID" => '',
    "SECTION_CODE" => '',
    "SECTION_URL" => '',
    "DETAIL_URL" => '',
    "DETAIL_SHOW_PICTURE" => 'Y',
    "ADD_SECTIONS_CHAIN" => 'N',
    "ADD_ELEMENT_CHAIN" => 'N'
  )
);?>

<?php $APPLICATION->IncludeFile("/include/pay.php"); ?>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
