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

<section>
    <div class="o-limit-x">
        <div class="tutor-content">

          <?php foreach($arResult["ITEMS"] as $key => $arItem):?>

            <div class="tutor-double<?php if ($key % 2 == 1) :?> tutor-double-reverse<?php endif;?>">
                <div class="tutor-double__img">
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
                </div>
                <div class="tutor-double__content">
                    <h3><?= $arItem['NAME'] ?></h3>
                    <p>
                      <?= $arItem['PREVIEW_TEXT'] ?>
                    </p>
                </div>
            </div>

          <?php endforeach;?>

        </div>
    </div>
</section>
