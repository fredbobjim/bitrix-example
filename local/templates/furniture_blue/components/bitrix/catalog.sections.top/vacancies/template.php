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

<?php $count = 0;?>
<?php foreach($arResult['SECTIONS'] as $key => $arSection):?>
    <section class="dop-section md:!mt-16 !mt-8<?php if ($count == 0):?> dop-section-border-0<?php endif;?>">
        <div class="o-limit-x">
            <h2 class="text-center<?php if ($count == 0):?> !border-t-0 !pt-0<?php endif;?>"><?= $arSection['NAME']?></h2>
            <div class="grid md:grid-cols-3 gap-5" uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: .dop-section__item; delay: 100; repeat: false; offset-top: -300">

                <?php foreach($arSection['ITEMS'] as $item):?>
                    <div class="dop-section__item">
                        <div class="dop-section__img">
                            <?php $previewImg = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], array('width'=>820, 'height'=>720), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                            <img src="<?= $previewImg['src']?>" alt="">
                        </div>
                        <div class="dop-section__content">
                            <div>
                                <h4><?= $item['NAME']?></h4>
                            </div>
                            <a href="<?= $item['PROPERTIES']['LINK']['VALUE']?>" class="btn-border btn-export" target="_blank">Подробнее</a>
                        </div>
                    </div>
                <?php endforeach?>

            </div>
        </div>
    </section>
    <?php $count++;?>
<?php endforeach?>
