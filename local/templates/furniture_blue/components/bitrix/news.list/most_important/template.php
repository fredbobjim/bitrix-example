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

<ul uk-accordion="multiple: true">

  <?foreach($arResult["ITEMS"] as $key => $arItem):?>

    <li <?php if ($key == 0) :?>class="uk-open"<?php endif;?>>
        <a class="uk-accordion-title" href="#"><?= $arItem['NAME'] ?></a>
        <div class="uk-accordion-content">
            <p>
              <?= $arItem['PREVIEW_TEXT'] ?>
            </p>
        </div>
    </li>

  <?endforeach;?>

</ul>
