<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="slider-price divider-on-limit">
    <div class="o-limit-x">
        <h2>Другие курсы</h2>
        <div class="uk-position-relative slider-courses" uk-slider="autoplay: true; autoplay-interval: 4000">
            <div class="uk-slider-container uk-light" tabindex="-1">
                <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m">
                  <?php foreach($arResult['ITEMS'] as $course):?>

                    <li>
                        <div class="dop-section__item">
                            <div class="dop-section__img">
                                <img src="<?= $course['PREVIEW_PICTURE']['SRC'] ?>" alt="">
                            </div>
                            <div class="dop-section__content">
                                <div>
                                    <h4><?= $course['NAME'] ?></h4>
                                    <div class="flex">
                                        <div class="dop-section__date"><?= FormatDate("d F, H:i", MakeTimeStamp($course['DATE_ACTIVE_FROM'])) ?></div>
                                        <div class="dop-section__price"><?= $course['PRICE_MATRIX']['MATRIX'][1]['ZERO-INF']['PRICE'] ?>₽</div>
                                    </div>
                                </div>
                                <a href="<?= $course['DETAIL_PAGE_URL'] ?>" class="btn-border">Подробнее</a>
                            </div>
                        </div>
                    </li>

                  <?php endforeach; ?>
                </ul>
            </div>
            <a class="uk-position-center-left-out uk-position-small banner-slider__arr-left" href="#" uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small banner-slider__arr-right" href="#" uk-slider-item="next"></a>
        </div>
    </div>
</section>
