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

<div class="grid md:grid-cols-2 gap-6 courses md:!mt-12 !mt-5">

  <?foreach($arResult["ITEMS"] as $key => $arItem):?>

    <div class="courses__item">
        <div class="courses__bg">
            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
        </div>
        <div class="courses__content">
            <div>
                <h2>
                  <?php if (!empty($arItem['PREVIEW_TEXT'])) :?>
                    <?= $arItem['PREVIEW_TEXT'] ?>
                  <?php else :?>
                    <?= $arItem['NAME'] ?>
                  <?php endif;?>
                </h2>
            </div>
        </div>
    </div>

  <?endforeach;?>

</div>
