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

<?php foreach($arResult["SECTIONS"] as $key => $arSection):?>
    <section class="gallery dop-section<?php if($key == 0) :?> dop-section-border-0<?php endif; ?>">
        <div class=" o-limit-x">
            <h2 class="text-center"><?= $arSection['NAME'] ?></h2>
            <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">

                <?php foreach($arSection["ITEMS"] as $k => $arItem):?>

                    <div class="gallery__item">
                      <?php
                      $img = CFile::ResizeImageGet(
                              $arItem['DETAIL_PICTURE']['ID'],
                              array('width'=>1412, 'height'=>930),
                              BX_RESIZE_IMAGE_PROPORTIONAL,
                              true
                      );
                      ?>
                        <a class="uk-inline" href="<?= $img['src'] ?>" data-caption="<?= $arItem['NAME']?>">
                            <img src="<?= $img['src'] ?>" width="1800" height="1200" alt="">
                        </a>
                    </div>

                <?php endforeach?>

            </div>
        </div>
    </section>
<?php endforeach?>
