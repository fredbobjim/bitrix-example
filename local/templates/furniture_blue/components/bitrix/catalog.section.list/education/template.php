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

    <div class="hidden md:grid md:grid-cols-3 flex-1" uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: a; delay: 100; repeat: false; offset-top: -200">

      <?php foreach ($arResult['SECTIONS'] as $arSection) :?>

          <a href="#<?= $arSection['CODE'] ?>" class="dopob__course">
              <img src="<?= $arSection['PICTURE']['SRC']?>" alt="">
              <p>#<?= mb_strtoupper($arSection["NAME"]) ?></p>
          </a>

      <?php endforeach;?>

    </div>

<?php endif;?>
