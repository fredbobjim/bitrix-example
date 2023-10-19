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

<?php foreach($arResult["SECTIONS"] as $arSection):?>
    <div class="notes-sr__content" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 100; repeat: false; offset-top: -300">
        <div>
            <h4><?= $arSection['NAME'] ?></h4>
            <p class="notes-sr__sub"><?= $arSection['UF_SUB_HEADER'] ?></p>
            <p class="notes-sr__p">
                <?= $arSection['DESCRIPTION'] ?>
            </p>
        </div>

      <?php
      foreach(array_chunk($arSection["ITEMS"], 3) as $chunk):?>

          <div>

            <?php foreach($chunk as $arElement):?>

                <div class="notes-sr__item">
                    <h5><?=$arElement["NAME"]?></h5>
                    <p class="notes-sr__p">
                      <?=$arElement["PREVIEW_TEXT"]?>
                    </p>
                </div>

            <?php endforeach?>

          </div>

      <?php endforeach?>

    </div>
<?php endforeach?>
