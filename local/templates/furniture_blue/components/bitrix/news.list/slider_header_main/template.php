<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<div class="uk-position-relative uk-visible-toggle uk-light home-slider" tabindex="-1" uk-slider>

    <ul class="uk-slider-items uk-grid">

      <?php foreach($arResult["ITEMS"] as $arItem): ?>

        <li class="uk-width-1-1 banner-slider__li">
            <div class="uk-panel">
              <?php $picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>1905, 'height'=>500), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                <img src="<?= $picture["src"] ?>" alt="<?= $arItem['NAME'] ?>">
                <div class="banner-slider__content">
                    <h2 uk-slider-parallax="x: 100,-100"><?= $arItem['NAME'] ?></h2>
                    <?php if (!empty($arItem['PROPERTIES']['LINK']['VALUE'])) : ?>
                        <a href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>" class="btn btn-arr-right">Узнать подробнее</a>
                    <?php endif; ?>
                </div>
            </div>
        </li>

      <? endforeach; ?>

    </ul>

    <a class="uk-position-center-left uk-position-small banner-slider__arr-left" href="#" uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small banner-slider__arr-right" href="#" uk-slider-item="next"></a>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom-center banner-slider__dots"></ul>
</div>
