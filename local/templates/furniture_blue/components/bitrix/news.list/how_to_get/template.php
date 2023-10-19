<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="advantages advantages__floating">
    <div class="o-limit-x">
        <h3 class="label text-center">СОВСЕМ РЯДОМ</h3>
        <h2 class="text-center">Как до нас добраться?</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

          <?foreach($arResult["ITEMS"] as $arItem):?>

            <div class="advantages__item without-toggle">
                <div class="advantages__img">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/hi1.svg" alt="<?= $arItem['NAME'] ?>">
                </div>
                <h4 class="advantages__name"><?= $arItem['NAME'] ?></h4>
                <p>
                  <?= $arItem['PREVIEW_TEXT'] ?>
                </p>
            </div>

          <?endforeach;?>

        </div>

    </div>
</section>
