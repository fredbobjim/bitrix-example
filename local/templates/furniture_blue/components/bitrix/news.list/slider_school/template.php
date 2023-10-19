<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true; autoplay: true">

        <ul class="uk-slider-items hsl-items uk-grid">

            <?foreach($arResult["ITEMS"] as $arItem):?>

                <li>
                    <div class="hsl__item">
                      <?php $picture = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>800, 'height'=>720), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                        <img src="<?= $picture["src"] ?>" alt="<?= $arItem['NAME'] ?>">
                    </div>
                </li>

            <?endforeach;?>

        </ul>

        <a class="uk-position-center-left uk-position-small banner-slider__arr-left" href="#" uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small banner-slider__arr-right" href="#" uk-slider-item="next"></a>

    </div>
</section>
