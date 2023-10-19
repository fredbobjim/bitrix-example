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

<div class="preparation__grid grid grid-cols-1 md:grid-cols-2 gap-6 courses">

  <?foreach($arResult["ITEMS"] as $key => $arItem):?>

    <div class="courses__item">
        <div class="courses__bg">
            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
        </div>
        <div class="courses__content">
            <div>
                <h2><?= $arItem['NAME'] ?></h2>
            </div>
        </div>
    </div>

  <?endforeach;?>

</div>
