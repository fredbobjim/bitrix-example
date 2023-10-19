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

<section class="banner">
    <?php $picture = CFile::ResizeImageGet($arResult['DETAIL_PICTURE']['ID'], array('width'=>1905, 'height'=>500), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
    <img data-src="<?= $picture["src"]?>" class="banner__img" alt="" uk-img>
    <div class="banner__content">
        <div class="o-limit-x flex flex-col justify-end h-full">
            <h1>
              <?php if (!empty($arResult['PROPERTIES']['IMG_HEADER']['~VALUE']['TEXT'])) :?>
                <?= $arResult['PROPERTIES']['IMG_HEADER']['~VALUE']['TEXT'] ?>
              <?php  else: ?>
                <?= $arResult["NAME"]?>
              <?php endif; ?>
            </h1>
            <?php if (!empty($arResult["DETAIL_TEXT"])) {?>
                <p><?= $arResult["DETAIL_TEXT"] ?></p>
            <?php }?>
        </div>
    </div>
</section>
