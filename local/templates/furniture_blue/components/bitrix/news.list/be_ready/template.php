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

<section class="be-ready">
    <div class="o-limit-x">
        <h3 class="label text-center">БУДЬ ГОТОВ</h3>
        <h2 class="text-center">Академия подготовки к ЕГЭ по 4 основным предметам</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">

          <?foreach($arResult["ITEMS"] as $key => $arItem):?>

            <div class="be-ready__item">
                <div class="be-ready__item_content">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/hi1.svg" alt="">
                    <h5><?= $arItem['NAME'] ?></h5>
                    <p class="be-ready__item_price"><?= $arItem['PROPERTIES']['PRICE']['VALUE'] ?> ₽</p>
                </div>
                <a href="#" class="btn-border">Выбрать предмет</a>
            </div>

          <?endforeach;?>

        </div>

        <p class="text-center be-ready__p">
          <?php $APPLICATION->IncludeFile("/include/preparing_ege/text1.php"); ?>
        </p>
    </div>
</section>
