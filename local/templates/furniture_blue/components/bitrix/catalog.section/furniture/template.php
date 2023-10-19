<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php foreach($arResult['SUBSECTIONS'] as $section):?>

    <section id="<?= $section['CODE']?>" class="dop-section">
        <div class="o-limit-x">
            <h2 class="text-center"><?= $section['NAME'] ?></h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5" uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: .dop-section__item; delay: 100; repeat: false; offset-top: -300">

                <?php foreach($section['ELEMENTS'] as $element):?>

                    <div class="dop-section__item">
                        <div class="dop-section__img">
                            <img src="<?= $element['PREVIEW_PICTURE']['SRC'] ?>" alt="">
                        </div>
                        <div class="dop-section__content">
                            <div>
                                <h4><?= $element['NAME'] ?></h4>
                                <div class="flex">
                                    <?php if (!empty($element['PROPERTIES']['START_DATE']['VALUE'])) :?>
                                        <div class="dop-section__date">
                                            <?= FormatDate("d F, H:i", MakeTimeStamp($element['PROPERTIES']['START_DATE']['VALUE'])) ?>
                                        </div>
                                    <?php endif;?>
                                    <div class="dop-section__price"><?= $element['PRICE_MATRIX']['MATRIX'][1]['ZERO-INF']['PRICE'] ?>₽</div>
                                </div>
                            </div>
                            <a href="<?= $element['DETAIL_PAGE_URL'] ?>" class="btn-border">Подробнее</a>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>

<?php endforeach; ?>
