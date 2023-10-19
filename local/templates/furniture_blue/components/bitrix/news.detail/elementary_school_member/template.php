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

<section class="member">
    <div class="o-limit-x">
        <div class="member__double">
            <div class="member__text-side">
                <p class="mir-quote">
                    <?= $arResult['PROPERTIES']['QUOTE']['VALUE']['TEXT'] ?>
                </p>
                <h3><?=$arResult["NAME"]?></h3>
                <p class="member__sub">
                  <?= $arResult['PROPERTIES']['POST']['VALUE'] ?>
                </p>
            </div>
            <div class="member__img-side">
              <?php $picture = CFile::ResizeImageGet($arResult["PREVIEW_PICTURE"]['ID'], array('width'=>800, 'height'=>1060), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                <img src="<?= $picture["src"]?>" alt="<?=$arResult["NAME"]?>">
            </div>
        </div>
    </div>
</section>
