<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="advantages">
    <div class="o-limit-x">
        <h3 class="label text-center">ТОЛЬКО ЛУЧШИЕ</h3>
        <h2 class="text-center"><?= $arResult['NAME'] ?></h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <?foreach($arResult["ITEMS"] as $key => $arItem):?>

                <div class="advantages__item <? if ($key > 5) :?><?= 'col-span-1 md:col-span-3' ?><? endif; ?>">
                    <div class="advantages__img">
                        <img src="<?= CFile::GetPath($arItem['PROPERTIES']['IMAGE']['VALUE'])?>" alt="<?= $arItem['NAME'] ?>">
                    </div>
                    <h4 class="advantages__name"><?= $arItem['NAME'] ?></h4>
                    <p class="hidden">
                        <?= $arItem['PREVIEW_TEXT'] ?>
                    </p>
                </div>

            <?endforeach;?>

        </div>
    </div>
</section>
