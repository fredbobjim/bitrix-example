<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

  <?foreach($arResult["ITEMS"] as $arItem):?>

    <div class="home-news__item">
        <div>
            <div class="home-news__img">
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>">
            </div>
            <h4><?= $arItem['NAME'] ?></h4>
            <p class="home-news__p">
              <?= $arItem['PREVIEW_TEXT'] ?>
            </p>
        </div>
    </div>

  <?endforeach;?>

</div>
