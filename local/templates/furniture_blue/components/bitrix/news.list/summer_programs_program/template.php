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

<div class="grid md:grid-cols-3 grid-cols-1 gap-5 md:my-20 my-8" uk-scrollspy="cls: uk-animation-slide-left-medium; target: div; delay: 100; repeat: false; offset-top: -300">
    <?php foreach($arResult["ITEMS"] as $arItem):?>
        <div class="be-ready__item">
            <div class="be-ready__item_content">
                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['IMG_SUMMER']['VALUE']) ?>" alt="">
                <a href="#programm" class="ghost-link get-summer-program" uk-toggle data-summer-id="<?= $arItem['ID']?>">
                    <h5><?= $arItem['NAME']?> <br>(<?= $arItem['PROPERTIES']['DATES_SUMMER']['VALUE']?>)</h5>
                </a>
            </div>
            <a href="#programm" class="btn-border md:max-w-none max-w-[196px] !text-base get-summer-program" uk-toggle data-summer-id="<?= $arItem['ID']?>">Подробнее</a>
        </div>
    <?php endforeach;?>
</div>

<div id="programm" class="uk-flex-top mir-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical flex">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="mir-modal__content">
            <h3></h3>
            <p class="mir-modal__p"></p>
            <p class="team-modal__p"></p>
            <b>Что будем делать:</b>
            <ul class="list"></ul>
        </div>
        <div class="mir-modal__img">
            <img src="" alt="">
        </div>
    </div>
</div>
