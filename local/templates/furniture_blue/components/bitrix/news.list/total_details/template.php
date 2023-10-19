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

<div class="puzzles__content grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10" uk-scrollspy="cls: uk-animation-slide-left; target: .puzzles__item > img; delay: 100; repeat: false; offset-top: -300">

  <?foreach($arResult["ITEMS"] as $arItem):?>

    <div class="puzzles__item">
        <img src="<?= CFile::GetPath($arItem['PROPERTIES']['IMAGE']['VALUE']) ?>" alt="">
        <h4><?= $arItem['NAME'] ?></h4>
    </div>

  <?endforeach;?>

</div>
