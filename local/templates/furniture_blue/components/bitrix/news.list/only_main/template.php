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

<div class="grid md:grid-cols-3 gap-24 items-start md:pb-12">

  <?foreach($arResult["ITEMS"] as $key => $arItem):?>

    <div class="advantages__item" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; offset-top: -300 <?php if ($key == 0):?>delay: 300<?php endif?>">
        <div class="admission__step">
            <?= $key + 1 ?>
        </div>
        <h4 class="advantages__name !text-lg !pr-8"><?= $arItem['PROPERTIES']['HEADER']['~VALUE']['TEXT'] ?></h4>
        <p class="hidden uk-animation-slide-bottom-medium">
          <?= $arItem['PREVIEW_TEXT'] ?>
        </p>
    </div>

  <?endforeach;?>

</div>
