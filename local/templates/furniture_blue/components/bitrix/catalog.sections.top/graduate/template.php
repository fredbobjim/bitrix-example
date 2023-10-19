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

<section class="graduates">
    <div class="o-limit-x">
        <h3 class="label text-center">ЛУЧШИЕ КАЧЕСТВА</h3>
        <h2 class="text-center">Выпускник школы «МИР» </h2>

        <?php foreach($arResult["SECTIONS"] as $key => $arSection):?>

            <?php if($key == 0) :?>
                <p class="graduates__sub"><?= $arSection['DESCRIPTION'] ?></p>
            <?php else :?>
                <h4 class="graduates__title-divider"><?= $arSection['DESCRIPTION'] ?></h4>
            <?php endif; ?>

            <div class="flex gap-5 flex-wrap">

                <?php
                if (count($arSection['ITEMS']) > 6) $columns = 3;
                else $columns = 2;
                foreach(array_chunk($arSection["ITEMS"], $columns) as $chunk):?>

                    <div class="flex-1">

                        <?php foreach($chunk as $arElement):?>

                                <div class="advantages__item without-toggle">
                                    <div class="advantages__img">
                                        <img src="<?= SITE_TEMPLATE_PATH?>/images/hi1.svg" alt="<?=$arElement["NAME"]?>">
                                    </div>
                                    <h4 class="advantages__name"><?=$arElement["NAME"]?></h4>
                                    <p>
                                      <?=$arElement["PREVIEW_TEXT"]?>
                                    </p>
                                </div>

                        <?php endforeach?>

                    </div>

                <?php endforeach?>

            </div>

        <?php endforeach?>

    </div>
</section>
