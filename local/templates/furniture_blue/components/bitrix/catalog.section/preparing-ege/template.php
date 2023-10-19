<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="be-ready">
    <div class="o-limit-x">
        <h3 class="label text-center">БУДЬ ГОТОВ</h3>
        <h2 class="text-center">Академия подготовки к ЕГЭ по 4 основным предметам</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">

          <?foreach($arResult["ITEMS"] as $key => $arItem):?>

              <div class="be-ready__item">
                  <div class="be-ready__item_content">
                      <img src="<?= SITE_TEMPLATE_PATH?>/images/hi1.svg" alt="">
                      <h5><?= $arItem['NAME'] ?></h5>
                      <p class="be-ready__item_price"><?= $arItem['PRICE_MATRIX']['MATRIX'][1]['ZERO-INF']['PRICE'] ?> ₽</p>
                  </div>
                  <a href="javascript:void(0);"
                     class="btn-border button-cart"
                     data-ids="<?= $arItem['ID'] ?>"
                     data-count="1"
                     data-url="/local/ajax/addToBasket.php"
                  >Выбрать предмет</a>
              </div>

          <?endforeach;?>

        </div>

        <p class="text-center be-ready__p">
          <?php $APPLICATION->IncludeFile("/include/preparing_ege/text1.php"); ?>
        </p>
    </div>
</section>
