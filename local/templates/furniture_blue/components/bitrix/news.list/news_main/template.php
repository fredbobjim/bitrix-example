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

<section class="home-news">
    <div class="o-limit-x">
        <h3 class="label text-center">САМЫЕ ЧЕСТНЫЕ</h3>
        <h2 class="text-center"><?= $arResult['NAME'] ?></h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

          <?foreach($arResult["ITEMS"] as $arItem):?>

              <div class="home-news__item">
                  <div>
                      <div class="home-news__img">
                        <?php $previewImg = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>800, 'height'=>720), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                          <img src="<?= $previewImg["src"] ?>" alt="<?= $arItem['NAME'] ?>">
                      </div>
                      <h6><?= $arItem['PROPERTIES']['DIRECTION']['VALUE'] ?></h6>
                      <h4><?= $arItem['NAME'] ?></h4>
                      <p class="home-news__p">
                        <?= TruncateText($arItem["PREVIEW_TEXT"], 150) ?>
                      </p>
                  </div>
                  <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="link-dotted">Читать далее</a>
              </div>

          <?endforeach;?>

        </div>
        <a href="/news/" class="btn-border mx-auto mt-10">Хочу узнать больше новостей</a>
    </div>
</section>
