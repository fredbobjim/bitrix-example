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

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

  <?foreach($arResult["ITEMS"] as $arItem):?>

    <div class="advantages__item without-toggle"  uk-scrollspy="cls: uk-animation-slide-top-small; repeat: false; offset-top: -300">
        <div class="advantages__img">
            <img src="<?= SITE_TEMPLATE_PATH?>/images/hi1.svg" alt="">
        </div>
        <h4 class="advantages__name"><?= $arItem['NAME'] ?></h4>
    </div>

  <?endforeach;?>

</div>
