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

<div class="flex md:flex-row flex-col md:gap-5 gap-0">

  <?foreach(array_chunk($arResult["ITEMS"], 2) as $chunk):?>

    <div class="flex-1">

      <?foreach($chunk as $arItem):?>

        <div class="advantages__item without-toggle">
            <div class="advantages__img">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/hi1.svg" alt="">
            </div>
            <h4 class="advantages__name"><?= $arItem['NAME'] ?></h4>
            <p>
              <?= $arItem['PREVIEW_TEXT'] ?>
            </p>
        </div>

      <?endforeach;?>

    </div>

  <?endforeach;?>

</div>
