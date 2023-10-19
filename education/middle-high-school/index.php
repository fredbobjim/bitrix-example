<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Средняя и старшая школа");
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
    "ELEMENT_ID" => 158,
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
        <h3 class="label">НАЧАЛЬНАЯ ШКОЛА</h3>

        <?php $APPLICATION->IncludeFile("/include/middle_high_school/text1.php"); ?>

      </div>

      <?php $APPLICATION->IncludeFile("/local/include/sign_middle_high_school.php"); ?>

    </div>
  </div>
</section>

<?php $APPLICATION->IncludeComponent("bitrix:news.detail","elementary_school_member",Array(
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
    "IBLOCK_TYPE" => "teachers",
    "IBLOCK_ID" => 28,
    "ELEMENT_ID" => 202,
    "ELEMENT_CODE" => "",
    "CHECK_DATES" => "Y",
    "FIELD_CODE" => Array('PREVIEW_PICTURE'),
    "PROPERTY_CODE" => Array('POST', 'QUOTE'),
    "IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
    "DETAIL_URL" => "",
    "SET_TITLE" => "N",
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

<section class="mission">
    <div class="o-limit-x md:!pt-16 !pt-8">
        <div class="mission__double">
            <div class="mission__img">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/mission.jpg" alt="">
            </div>
            <div class="mission__text-side">
                <h3 class="label">ДОСТИГАЕМ ВМЕСТЕ</h3>
                <h2>Миссия школы</h2>
                <p class="mission__p">

                  <?php $APPLICATION->IncludeFile("/include/middle_high_school/text2.php"); ?>

                </p>
            </div>
        </div>
    </div>
</section>

<section class="notes-sr">
    <div class="o-limit-x">
        <h3 class="label text-center md:border-t-0 border-t border-[#ECE4DE] md:pt-0 pt-9">ТОЛЬКО ГЛАВНОЕ</h3>
        <h2 class="text-center">Портрет выпускника</h2>

          <?php $APPLICATION->IncludeComponent("bitrix:catalog.sections.top","middle_high_school_only_main",Array(
              "IBLOCK_TYPE" => "middle_school",
              "IBLOCK_ID" => "26",
              "SECTION_FIELDS" => Array(""),
              "SECTION_USER_FIELDS" => Array("UF_SUB_HEADER"),
              "SECTION_SORT_FIELD" => "ID",
              "SECTION_SORT_ORDER" => "ASC",
              "ELEMENT_SORT_FIELD" => "ID",
              "ELEMENT_SORT_ORDER" => "ASC",
              "FILTER_NAME" => "arrFilter",
              "SECTION_URL" => "",
              "DETAIL_URL" => "",
              "BASKET_URL" => "/personal/basket.php",
              "ACTION_VARIABLE" => "action",
              "PRODUCT_ID_VARIABLE" => "id",
              "PRODUCT_QUANTITY_VARIABLE" =>  "quantity",
              "PRODUCT_PROPS_VARIABLE" =>  "prop",
              "SECTION_ID_VARIABLE" => "SECTION_ID",
              "DISPLAY_COMPARE" => "Y",
              "USE_MAIN_ELEMENT_SECTION" => "Y",
              "SECTION_COUNT" => "",
              "ELEMENT_COUNT" => "",
              "LINE_ELEMENT_COUNT" => "",
              "PROPERTY_CODE" => Array(),
              "PRICE_CODE" => Array(),
              "USE_PRICE_COUNT" => "Y",
              "SHOW_PRICE_COUNT" => "1",
              "PRICE_VAT_INCLUDE" => "Y",
              "PRODUCT_PROPERTIES" => array(),
              "USE_PRODUCT_QUANTITY" => "Y",
              "CACHE_TYPE" => "A",
              "CACHE_TIME" => "3600",
              "CACHE_FILTER" => "Y",
              "CACHE_GROUPS" => "Y",
              "HIDE_NOT_AVAILABLE" => "N",
              "QUANTITY_FLOAT" => "N",
              "CONVERT_CURRENCY" => "Y",
              "CURRENCY_ID" => "RUB",
            )
          );?>

    </div>
</section>

<section class="accordion-list md:!mt-16 !mt-0">
    <div class="o-limit-x md:!pt-14 !pt-9">
        <h3 class="label text-center">САМОЕ ГЛАВНОЕ</h3>
        <h2 class="text-center">Академические принципы</h2>

      <?php $APPLICATION->IncludeComponent("bitrix:news.list","most_important",Array(
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "AJAX_MODE" => "N",
          "IBLOCK_TYPE" => "middle_school",
          "IBLOCK_ID" => "27",
          "NEWS_COUNT" => "",
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

<section class="we we-slider">
    <div class="o-limit-x">
        <h3 class="label">О ШКОЛЕ</h3>

        <?php $APPLICATION->IncludeFile("/include/middle_high_school/text3.php"); ?>

    </div>

  <?php $APPLICATION->IncludeComponent("bitrix:news.list","slider_mobile",Array(
      "DISPLAY_DATE" => "Y",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "Y",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "AJAX_MODE" => "N",
      "IBLOCK_TYPE" => "slider",
      "IBLOCK_ID" => "5",
      "NEWS_COUNT" => "20",
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

</section>

<section class="graduates school-graduates">
    <div class="o-limit-x">
        <h3 class="label text-center">САМОЕ ГЛАВНОЕ</h3>
        <h2 class="text-center">Здоровье детей — наш абсолютный приоритет</h2>

      <?php $APPLICATION->IncludeComponent("bitrix:news.list","most_important_middle_high_school",Array(
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "AJAX_MODE" => "N",
          "IBLOCK_TYPE" => "elementary_school",
          "IBLOCK_ID" => "25",
          "NEWS_COUNT" => "6",
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

<?php $APPLICATION->IncludeFile("/local/include/enroll.php"); ?>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
