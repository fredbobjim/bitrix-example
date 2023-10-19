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

<section class="about-detail kampus">

  <?foreach($arResult["ITEMS"] as $key => $arItem):?>

      <div class="double-info<?php if ($key == 0) :?> kampus__mt<?php  elseif ($key == 1) :?> double-info-reverse<?php endif;?>">
          <div class="o-limit-x flex kampus__row">

            <?php $picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>1220, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>

              <?php if ($key == 0) :?>
                  <div class="double-info__text">
                      <h2><?= $arItem['NAME'] ?></h2>
                      <p>
                        <?= $arItem['PREVIEW_TEXT'] ?>
                      </p>
                  </div>
                  <div class="kampus__img">
                      <img data-src="<?= $picture['src'] ?>" alt="" uk-img>
                  </div>
                  <div class="double-info__img uk-visible@m">
                      <img data-src="<?= SITE_TEMPLATE_PATH?>/images/abs8.svg" alt="" uk-img>
                  </div>
                  <div class="double-info__img double-info__img_mob uk-hidden@m">
                      <img data-src="<?= SITE_TEMPLATE_PATH?>/images/kampus-mob-patterns-odd.svg" alt="" uk-img>
                  </div>
              <? endif; ?>

            <?php if ($key == 1) :?>
                <div class="kampus__img">
                    <img src="<?= $picture['src'] ?>" alt="">
                </div>
                <div class="double-info__text kampus__row_reverse">
                    <h2><?= $arItem['NAME'] ?></h2>
                    <p>
                      <?= $arItem['PREVIEW_TEXT'] ?>
                    </p>
                </div>
                <div class="double-info__img uk-visible@m">
                    <img data-src="<?= SITE_TEMPLATE_PATH?>/images/abs9.svg" alt="" uk-img>
                </div>
                <div class="double-info__img double-info__img_mob uk-hidden@m">
                    <img data-src="<?= SITE_TEMPLATE_PATH?>/images/kampus-mob-patterns-even.svg" alt="" uk-img>
                </div>
            <? endif; ?>

            <?php if ($key == 2) :?>
                <div class="double-info__text">
                    <h2><?= $arItem['NAME'] ?></h2>
                    <p>
                      <?= $arItem['PREVIEW_TEXT'] ?>
                    </p>
                </div>
                <div class="kampus__img">
                    <img data-src="<?= $picture['src'] ?>" alt="" uk-img>
                </div>
                <div class="double-info__img kampus__img-top uk-visible@m">
                    <img data-src="<?= SITE_TEMPLATE_PATH?>/images/abs7.svg" alt="" uk-img>
                </div>
                <div class="double-info__img double-info__img_mob uk-hidden@m">
                    <img data-src="<?= SITE_TEMPLATE_PATH?>/images/kampus-mob-patterns-odd.svg" alt="" uk-img>
                </div>
            <? endif; ?>

          </div>
      </div>

  <?endforeach;?>

</section>
