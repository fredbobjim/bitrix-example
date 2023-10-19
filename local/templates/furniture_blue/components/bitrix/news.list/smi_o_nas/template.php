<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section  class="home-news news-more">
  <div class="o-limit-x">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 md:gap-6">

      <?php foreach($arResult["ITEMS"] as $arItem):?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('NEWS_DELETE_CONFIRM')));
        ?>
        <div class="home-news__item">
          <div>
            <div class="home-news__img">
              <?php $previewImg = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>800, 'height'=>720), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
              <img src="<?= $previewImg["src"]?>" alt="">
            </div>
            <?php if (!empty ($arItem["PROPERTIES"]["TAGS"]['VALUE'])) :?>
              <h6>
                <?foreach($arItem["PROPERTIES"]["TAGS"]['VALUE'] as $tag):?>
                  <?="#{$tag}"?>
                <?endforeach;?>
              </h6>
            <?php endif;?>
            <h4><?= $arItem["NAME"]?></h4>
            <p class="home-news__p">
              <?= TruncateText($arItem["PREVIEW_TEXT"], 150) ?>
            </p>
          </div>
          <a href="<?= $arItem["PROPERTIES"]['LINK']['VALUE']?>" class="link-dotted" target="_blank">Читать далее</a>
        </div>
      <?endforeach;?>

    </div>
  </div>
</section>
