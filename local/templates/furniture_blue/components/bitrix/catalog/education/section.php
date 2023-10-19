<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
$db_list = CIBlockSection::GetList(
        [],
        ['IBLOCK_ID' => $arParams["IBLOCK_ID"], 'CODE' => $arResult["VARIABLES"]["SECTION_CODE"]],
  false,
        ['UF_TEXT_1', 'UF_TEXT_2']
);
if ($arSection = $db_list->GetNext()) {?>

    <section class="banner">
        <img src="<?= CFile::GetPath($arSection['PICTURE']) ?>" class="banner__img" alt="">
        <div class="banner__content">
            <div class="o-limit-x flex flex-col justify-end h-full">
                <h1><?= $arSection['DESCRIPTION'] ?></h1>
            </div>
        </div>
    </section>

    <section class="dopob dobob-abs">
        <div class="o-limit-x">
            <div class="flex justify-between flex-col md:flex-row">
                <div class="flex-1">
                    <h2>Направления курсов</h2>
                    <p class="dopob__p">
                      <?= $arSection['UF_TEXT_1'] ?>
                    </p>
                    <p class="dopob__p">
                      <?= $arSection['UF_TEXT_2'] ?>
                    </p>

                  <?php $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "education_mobile",
                    Array(
                      "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                      "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                      "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
                      "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                      "DISPLAY_PANEL" => "N",
                      "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                      "CACHE_TIME" => $arParams["CACHE_TIME"],
                      "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                      "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
                      "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                      "SHOW_PARENT_NAME" => $arParams["SECTION_SHOW_PARENT_NAME"]
                    ),
                    $component
                  );?>

                    <a href="#another-course" class="btn-border" uk-toggle>ХОЧУ ДРУГОЙ КУРС</a>
                </div>

                  <?php $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "education",
                    Array(
                      "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                      "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                      "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
                      "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                      "DISPLAY_PANEL" => "N",
                      "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                      "CACHE_TIME" => $arParams["CACHE_TIME"],
                      "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                      "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
                      "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                      "SHOW_PARENT_NAME" => $arParams["SECTION_SHOW_PARENT_NAME"]
                    ),
                    $component
                  );?>

            </div>
        </div>
    </section>

<?php
}
?>

<?php $APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"furniture",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
		"ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
 		"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
		"META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
		"META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
		"BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
		"INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
		"BASKET_URL" => $arParams["BASKET_URL"],
		"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
		"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
		"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_FILTER" => $arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
		"PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
		"LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
		"PRICE_CODE" => $arParams["PRICE_CODE"],
		"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
		"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],

		"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],

		"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],

		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
        "PARENT_SECTION_ID" => $arSection['ID']
	),
	$component
);
?>

<div id="another-course" class="uk-flex-top mir-modal mir-modal-small" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical flex">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="mir-modal__content">
            <h3>Если вы не нашли курс, который вам по душе</h3>
            <p class="mir-modal__p">заполните эту форму, и при большом количестве желающих мы обязательно реализуем этот курс для вас</p>
            <form action="">
                <p class="form-error" style="color: red"></p>
                <input type="hidden" name="form_name" value="want-another-course">
                <div class="mir-input__wrap">
                    <input type="text" id="parent" name="name" class="mir-input letters-only" required>
                    <span class="mir-input__label">Имя Фамилия</span>
                </div>
                <div class="mir-input__wrap">
                    <input type="text" id="phone" name="phone" class="mir-input phone-mask" required>
                    <span class="mir-input__label">Телефон</span>
                </div>
                <button type="submit" class="btn-border">Отправить заявку</button>
            </form>
            <div class="form-success uk-animation-slide-left-medium">
                <div class="flex justify-center flex-col h-full">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/modal-img.svg" alt="">
                    <h3>Ваша заявка отправлена</h3>
                    <div class="w-full">
                        <p>В ближайшее время наш менеджер рассмотрит заявку и свяжется с вами.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="divider-on-limit">
  <?php $APPLICATION->IncludeFile("/include/pay.php"); ?>
</div>
