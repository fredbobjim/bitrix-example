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

<img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMG']['VALUE'])?>" alt="">
<div class="flex flex-col align-middle justify-center">
    <div>
        <h3 class="todo__h3"><?= $arResult["NAME"]?></h3>
        <p class="todo__p">
            <?= $arResult["PREVIEW_TEXT"] ?>
        </p>
        <div class="flex mt-10 w-full w-1/2">
            <a class="btn-alert flex-1 justify-center" href="#enroll-programm" uk-toggle>Записаться</a>
        </div>
    </div>
</div>
