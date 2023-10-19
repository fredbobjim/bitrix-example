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

<?php foreach($arResult["ITEMS"] as $key => $arItem):?>
    <div class="dop-double<?php if ($key % 2 != 0):?> dop-double-reverse mt-10<?php endif;?>" uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: div; delay: 100; repeat: false; offset-top: -300">
        <div class="dop-double__content">
            <p class="!w-full !text-left">
                <?= $arItem['PREVIEW_TEXT'] ?>
            </p>
        </div>
        <div class="dop-double__img">
            <?php $img = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>760, 'height'=>490), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
            <img src="<?= $img['src']?>" alt="">
        </div>
    </div>
<?php endforeach;?>
