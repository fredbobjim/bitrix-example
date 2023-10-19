<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О школе");
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
    "ELEMENT_ID" => 83,
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

<?php $APPLICATION->IncludeComponent("bitrix:news.list","about_school",Array(
    "DISPLAY_DATE" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "AJAX_MODE" => "N",
    "IBLOCK_TYPE" => "school",
    "IBLOCK_ID" => "42",
    "NEWS_COUNT" => "",
    "SORT_BY1" => "SORT",
    "SORT_ORDER1" => "ASC",
    "SORT_BY2" => "ID",
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

<?php $APPLICATION->IncludeComponent("bitrix:catalog.sections.top","graduate",Array(
    "IBLOCK_TYPE" => "school",
    "IBLOCK_ID" => "15",
    "SECTION_FIELDS" => Array(""),
    "SECTION_USER_FIELDS" => Array(""),
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

<section class="about-team">
  <div class="o-limit-x">
    <div class="flex justify-between align-middle flex-col md:flex-row">
      <div class="about-team__ls flex-1">
        <h3 class="label">КОМАНДА</h3>

        <?php $APPLICATION->IncludeFile("/include/school/text4.php"); ?>

        <a href="/school/team/" class="btn-border btn-export">Узнать больше</a>
      </div>
      <div class="about-team__rs flex-1 flex justify-end">
        <div class="about-team__img">
          <img src="<?= SITE_TEMPLATE_PATH?>/images/ab1.jpg" alt="">
        </div>
        <a href="/school/team/" class="btn-border btn-export">Узнать больше</a>
      </div>
    </div>
  </div>
</section>

<section class="about-team">
  <div class="o-limit-x">
    <div class="flex justify-between align-middle flex-col-reverse md:flex-row">
      <div class="about-team__ls flex-1">
          <div class="hidden md:block">
            <div class="grid grid-cols-5 gap-5">
              <div class="col-span-2">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/ga1.jpg" alt="">
              </div>
              <div class="col-span-3 row-span-2">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/ga2.jpg" alt="">
              </div>
              <div class="col-span-2">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/ga3.jpg" alt="">
              </div>
              <div class="col-span-5 row-span-1">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/ga4.jpg" alt="">
              </div>
            </div>
          </div>

          <div class="block md:hidden">
              <section class="mt-8">

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
          </div>
          <a href="https://vk.com/public201089217" class="btn-border btn-vk tr-mob-flex">Страница VK</a>
      </div>
      <div class="about-team__rs flex-1">
        <h3 class="label">МИР ЭТО ЖИЗНЬ</h3>

        <?php $APPLICATION->IncludeFile("/include/school/text5.php"); ?>

        <a href="https://vk.com/public201089217" class="btn-border btn-vk tr-desk">Страница VK</a>
      </div>
    </div>
  </div>
</section>

<section class="sl-info">
  <div class="o-limit-x">
    <h3 class="label text-center">МИР ДЛЯ ВСЕХ</h3>
    <h2 class="text-center">И не только школа</h2>
    <p class="sl-info__p">
      <?php $APPLICATION->IncludeFile("/include/school/text6.php"); ?>
    </p>
  </div>

    <?php $APPLICATION->IncludeComponent("bitrix:news.list","slider_mobile",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "slider",
        "IBLOCK_ID" => "16",
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

<section class="sl-info">
  <div class="o-limit-x">
    <h3 class="label text-center">ИНТЕРЬЕР</h3>
    <h2 class="text-center">Как выглядит школа изнутри</h2>
    <p class="sl-info__p">

      <?php $APPLICATION->IncludeFile("/include/school/text7.php"); ?>

    </p>
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

<section class="todo flex o-limit-x about-todo">
  <img src="<?= SITE_TEMPLATE_PATH?>/images/childs.svg" alt="">
  <div class="flex flex-col align-middle justify-center">
    <div>
      <h3 class="todo__h3">Поступление и стоимость обучения</h3>
      <p class="todo__p">
        Обучение в школе платное – 46 000 рублей в месяц. <br>
        Поступление на основании результатов собеседования. <br>
        Подробнее о правилах поступления читайте здесь. <br>
      </p>
      <div class="flex mt-10">
        <a class="btn-border btn-todo mr-5" href="/education/how-enroll/" uk-toggle>Как поступить</a>
      </div>
    </div>
  </div>
</section>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
