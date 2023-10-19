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

<div class="notes__content grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4" uk-scrollspy="cls: uk-animation-slide-top-small; target: .notes__col; delay: 100; repeat: false; offset-top: -300">

  <?foreach(array_chunk($arResult["ITEMS"], 2) as $chunk):?>

    <div class="notes__col">

      <?foreach($chunk as $arItem):?>

        <div class="notes__item">
            <h4><?= $arItem['NAME'] ?></h4>
            <p>
              <?= $arItem['PREVIEW_TEXT'] ?>
            </p>
        </div>

      <?endforeach;?>

    </div>

  <?endforeach;?>

</div>
