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

<?php if (!empty($arResult["ELEMENT_BEFORE"])) :?>
    <div class="dop-double" uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: div; delay: 100; repeat: false; offset-top: -300">
        <div class="dop-double__content">
            <h3>
              <?= $arResult["ELEMENT_BEFORE"]['NAME'] ?>
            </h3>
            <p class="!w-full !text-left">
              <?= $arResult["ELEMENT_BEFORE"]['PREVIEW_TEXT'] ?>
            </p>
        </div>
        <div class="dop-double__img">
            <img src="<?= $arResult["ELEMENT_BEFORE"]['PREVIEW_PICTURE']['SRC']?>" alt="">
        </div>
    </div>
<?php endif;?>

<div class="flex justify-between md:flex-row flex-col gap-5 md:my-20 my-8 md:items-baseline" uk-scrollspy="cls: uk-animation-slide-left-medium; target: div; delay: 100; repeat: false; offset-top: -300">

  <?php foreach($arResult["ITEMS"] as $arItem):?>

      <div class="be-ready__item flex-1">
          <div class="be-ready__item_content">
              <img src="<?= SITE_TEMPLATE_PATH?>/images/hi1.svg" alt="">
              <h5><?= $arItem['NAME'] ?></h5>
          </div>
          <button class="btn-border btn-more-sbt md:max-w-none max-w-[196px] !text-base">Подробнее</button>
          <p class="more-toggle-el hidden">
            <?= $arItem['PREVIEW_TEXT'] ?>
          </p>
      </div>

  <?php endforeach;?>

</div>

<?php if (!empty($arResult["ELEMENT_AFTER"])) :?>
    <div class="dop-double dop-double-reverse" uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: div; delay: 100; repeat: false; offset-top: -300">
        <div class="dop-double__content">
            <h3>
              <?= $arResult["ELEMENT_AFTER"]['NAME'] ?>
            </h3>
            <p class="!w-full !text-left">
              <?= $arResult["ELEMENT_AFTER"]['PREVIEW_TEXT'] ?>
            </p>
        </div>
        <div class="dop-double__img">
            <img src="<?= $arResult["ELEMENT_AFTER"]['PREVIEW_PICTURE']['SRC']?>" alt="">
        </div>
    </div>
<?php endif;?>
