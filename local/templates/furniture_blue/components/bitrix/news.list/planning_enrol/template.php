<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="preparation__grid md:!mt-28 !mt-14 grid grid-cols-1 md:grid-cols-2 gap-6 courses info-dobroznayka-pattern-mob">

    <?php foreach($arResult["ITEMS"] as $key => $arItem):?>
        <?php
        if($key == 0) {
            $slide = 'left';
        } else {
          $slide = 'right';
        }
        ?>

        <div class="courses__item" uk-scrollspy="cls: uk-animation-slide-<?= $slide ?>; repeat: false; offset-top: -300">
            <div class="courses__bg">
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>">
            </div>
            <div class="courses__content">
                <div>
                    <h2><?= $arItem['NAME'] ?></h2>
                    <p>
                      <?= $arItem['PREVIEW_TEXT'] ?>
                    </p>
                </div>
            </div>
        </div>

    <?endforeach;?>

</div>
