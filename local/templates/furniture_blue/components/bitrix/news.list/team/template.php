<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="o-limit-x">

    <?php $count = 0; ?>
    <?php foreach($arResult['TEAM_SECTIONS'] as $name => $section):?>

      <?php if ($count > 0) : ?>
        <div class="team-block">
            <h3 class="label text-center">КОМАНДА</h3>
            <h2 class="text-center"><?= $name ?></h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
      <?php else:?>
        <div class="team-block grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5" style="border-top: none;">
      <?php endif; ?>


                <?php $i = 1; ?>
                <?php foreach($section as $key => $item):?>

                    <div class="team-item" data-id="<?= $item['ID'] ?>">
                        <?php
                        if ($item['PREVIEW_PICTURE']) {
                          $picture = CFile::ResizeImageGet($item['PREVIEW_PICTURE'], array('width'=>820, 'height'=>980), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                          $imgPath = $picture['src'];
                        } else {
                          $imgPath = SITE_TEMPLATE_PATH.'/images/user1.jpg';
                        }

                        ?>
                        <img src="<?= $imgPath ?>" class="team-item__img" alt="<?= $item['NAME'] ?>">
                        <button class="team-item__helper" uk-toggle="target: #team"></button>
                        <div class="team-item__content<?php if (empty($item['PREVIEW_PICTURE'])) :?> team-item__content-background-none<?php endif;?>">
                            <h4><?= $item['NAME'] ?></h4>
                            <p>
                              <?= $item['PROPERTY_POST_VALUE'] ?>
                            </p>
                        </div>
                    </div>

                  <?php $i++; ?>
                <?php endforeach; ?>

            <?php if ($count > 0) : ?>
            </div>
            <?php endif; ?>
        </div>

        <?php $count++; ?>
    <?php endforeach; ?>

</section>
