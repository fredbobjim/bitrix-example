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

<section class="courses o-limit-x">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

      <?php foreach($arResult["ITEMS"] as $arItem):?>
          <div class="courses__item">
              <div class="courses__bg">
                  <?php $previewImg = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>1240, 'height'=>620), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                  <img src="<?= $previewImg['src'] ?>" alt="<?= $arItem['NAME'] ?>">
              </div>
              <div class="courses__content">
                  <div>
                      <h2><?= $arItem['NAME'] ?></h2>
                      <p>
                        <?= $arItem['PREVIEW_TEXT'] ?>
                      </p>
                  </div>
                  <a href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>" class="btn btn-arr-right">Узнать подробнее</a>
              </div>
          </div>

      <?php endforeach;?>

    </div>
</section>
