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

<div class="tutor-content !border-t-0 !pt-0">

  <?php foreach($arResult["ITEMS"] as $key => $arItem):?>
      <div class="tutor-double<?php if ($key % 2 != 0) :?> tutor-double-reverse<?php endif;?>">
          <div class="tutor-double__img">
              <?php $picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>1220, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
              <img src="<?= $picture['src']?>" alt="">
          </div>
          <div class="tutor-double__content">
              <h3>
                <?= $arItem['NAME'] ?>
              </h3>
              <p>
                <?= $arItem['PREVIEW_TEXT'] ?>
              </p>
          </div>
      </div>
  <?php endforeach;?>

</div>
