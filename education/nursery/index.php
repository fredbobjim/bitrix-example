<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Детский сад");
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
    "ELEMENT_ID" => 739,
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

<section class="double-form">
  <div class="o-limit-x">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
      <div class="double-form__ls">
        <h3 class="label">Детский сад</h3>

        <?php $APPLICATION->IncludeFile("/include/nursery/text.php"); ?>

      </div>

      <?php $APPLICATION->IncludeFile("/local/include/sign_nursery.php"); ?>

    </div>
  </div>
</section>

<?php $APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"elementary_school_member",
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "Y",
		"SHARE_HIDE" => "N",
		"SHARE_TEMPLATE" => "",
		"SHARE_HANDLERS" => array(
			0 => "delicious",
		),
		"SHARE_SHORTEN_URL_LOGIN" => "",
		"SHARE_SHORTEN_URL_KEY" => "",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "teachers",
		"IBLOCK_ID" => "28",
		"ELEMENT_ID" => "205",
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "POST",
			1 => "QUOTE",
			2 => "",
		),
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
		"GROUP_PERMISSIONS" => "",
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
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => "elementary_school_member",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

<section class="advantages advantages__floating advantages-combo">
    <div class="o-limit-x">
        <h3 class="label text-center">ДОСТИГАЕМ ВМЕСТЕ</h3>
        <h2 class="text-center">Ценности детского сада МИР</h2>

        <?php $APPLICATION->IncludeComponent("bitrix:news.list","nursery_values",Array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "N",
                        "IBLOCK_TYPE" => "nursery",
                        "IBLOCK_ID" => "56",
                        "NEWS_COUNT" => "5",
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

    </div>
</section>

<section class="notes">
    <div class="o-limit-x">
        <h3 class="label text-center">ТОЛЬКО ГЛАВНОЕ</h3>
        <h2 class="text-center">Портрет выпускника</h2>

          <?php $APPLICATION->IncludeComponent("bitrix:news.list","elementary_school_only_main",Array(
              "DISPLAY_DATE" => "Y",
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => "Y",
              "DISPLAY_PREVIEW_TEXT" => "Y",
              "AJAX_MODE" => "N",
              "IBLOCK_TYPE" => "nursery",
              "IBLOCK_ID" => "57",
              "NEWS_COUNT" => "8",
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

    </div>
</section>

<section class="puzzles">
    <div class="o-limit-x">
        <h3 class="label text-center">ДЕТАЛИ ОДНОГО ЦЕЛОГО</h3>
        <h2 class="text-center">Основы образовательной программы</h2>

          <?php $APPLICATION->IncludeComponent("bitrix:news.list","total_details",Array(
              "DISPLAY_DATE" => "Y",
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => "Y",
              "DISPLAY_PREVIEW_TEXT" => "Y",
              "AJAX_MODE" => "N",
              "IBLOCK_TYPE" => "nursery",
              "IBLOCK_ID" => "58",
              "NEWS_COUNT" => "4",
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
          ); ?>

    </div>
</section>

<section class="accordion-list">
    <div class="o-limit-x">
        <h3 class="label text-center">САМОЕ ГЛАВНОЕ</h3>
        <h2 class="text-center">Детский сад МИР - это</h2>

          <?php $APPLICATION->IncludeComponent("bitrix:news.list","most_important",Array(
              "DISPLAY_DATE" => "Y",
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => "Y",
              "DISPLAY_PREVIEW_TEXT" => "Y",
              "AJAX_MODE" => "N",
              "IBLOCK_TYPE" => "nursery",
              "IBLOCK_ID" => "59",
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
          ); ?>

    </div>
</section>

<section class="we we-slider">
    <div class="o-limit-x">
        <h3 class="label">О ШКОЛЕ</h3>

      <?php $APPLICATION->IncludeFile("/include/nursery/text2.php"); ?>

    </div>

  <?php $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider_main", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "slider",
		"IBLOCK_ID" => "62",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "DESCRIPTION",
			2 => "",
		),
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
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "slider_main",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);?>

</section>

<?php $APPLICATION->IncludeFile("/local/include/enroll-nursery.php"); ?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
