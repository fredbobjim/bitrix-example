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

<section class="about-detail about-detail-mob">
    <?php foreach($arResult["ITEMS"] as $key => $arItem):?>
        <?php if ($key % 2 == 0) :?>
            <div class="double-info about-detail__double-info">
                <div class="o-limit-x about-flex-1/2<?php if ($key == 0) :?> img-top-down<?php endif;?>">
                    <div class="double-info__text">
                        <?php if ($key == 0) :?>
                            <h3 class="label">О ШКОЛЕ</h3>
                        <?php endif;?>
                        <h2><?= $arItem['NAME'] ?></h2>
                        <p>
                          <?= $arItem['PREVIEW_TEXT'] ?>
                        </p>
                    </div>
                    <div class="about-img-right">
                        <?php $picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>1160, 'height'=>820), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                        <img data-src="<?= $picture['src']?>" alt="" uk-img>
                    </div>
                    <div class="double-info__img<?php if ($key != 0) :?> double-info__img_upper-top<?php endif;?>">
                        <?php $picture = CFile::ResizeImageGet($arItem['PROPERTIES']['BACKGROUND_IMG']['VALUE'], array('width'=>1160, 'height'=>820), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                        <img src="<?= $picture['src']?>" alt="">
                    </div>
                </div>
            </div>
        <?php else :?>
            <div class="double-info double-info-reverse about-detail__double-info">
                <div class="o-limit-x about-flex-1/2 about-flex-1/2_reverse">
                    <div class="about-img-right">
                      <?php $picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>1160, 'height'=>820), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                        <img data-src="<?= $picture['src']?>" alt="" uk-img>
                    </div>
                    <div class="double-info__text">
                        <h2><?= $arItem['NAME'] ?></h2>
                        <p>
                          <?= $arItem['PREVIEW_TEXT'] ?>
                        </p>
                    </div>
                    <div class="double-info__img">
                      <?php $picture = CFile::ResizeImageGet($arItem['PROPERTIES']['BACKGROUND_IMG']['VALUE'], array('width'=>1160, 'height'=>820), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                        <img src="<?= $picture['src']?>" alt="">
                    </div>
                </div>
            </div>
        <?php endif;?>
    <?php endforeach;?>
</section>
