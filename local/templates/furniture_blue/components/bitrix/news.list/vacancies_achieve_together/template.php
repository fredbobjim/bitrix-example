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

<div class="flex justify-between md:flex-row flex-col gap-5 md:my-20 my-10 md:items-baseline" uk-scrollspy="cls: uk-animation-slide-left-medium; target: div; delay: 100; repeat: false; offset-top: -300">

  <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="be-ready__item flex-1">
        <div class="be-ready__item_content">
            <img src="<?= SITE_TEMPLATE_PATH?>/images/hi1.svg" alt="">
            <h5><?= $arItem['NAME'] ?></h5>
            <p class="be-ready__item_price">
              <?= $arItem['PREVIEW_TEXT'] ?>
            </p>
        </div>
    </div>
  <?endforeach;?>

</div>
