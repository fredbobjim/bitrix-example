<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<?php if ($arResult["SECTIONS_COUNT"] > 0) :?>

    <div class="uk-position-relative uk-visible-toggle uk-light block md:hidden mb-9" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 4000">

        <ul class="uk-slider-items hsl-items uk-grid">

          <?php foreach ($arResult['SECTIONS'] as $arSection) :?>

              <li>
                  <a href="#<?= $arSection['CODE'] ?>" class="hsl__item dopob__course">
                      <img src="<?= $arSection['PICTURE']['SRC']?>" alt="">
                      <p>#<?= mb_strtoupper($arSection["NAME"]) ?></p>
                  </a>
              </li>

          <?php endforeach;?>

        </ul>

        <a class="uk-position-center-left uk-position-small banner-slider__arr-left" href="#" uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small banner-slider__arr-right" href="#" uk-slider-item="next"></a>

    </div>

<?php endif;?>
