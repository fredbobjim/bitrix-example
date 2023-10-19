<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>

<section class="todo todo-enroll flex o-limit-x">
    <img src="<?= SITE_TEMPLATE_PATH?>/images/childs.svg" alt="">
    <div class="flex flex-col align-middle justify-center">
        <div>
            <h3 class="todo__h3">Записаться на курс</h3>
            <p class="todo__p">
              <?= $arResult['DISPLAY_PROPERTIES']['TEXT_BEFORE_PRICE']['VALUE'] ?>
              <?= $arResult['PRICE_MATRIX']['MATRIX'][1]['ZERO-INF']['PRICE'] ?> р.
              <?= $arResult['DISPLAY_PROPERTIES']['TEXT_AFTER_PRICE']['VALUE'] ?>
            </p>
            <div class="flex mt-10 w-full">
                <a class="btn-border btn-todo mr-5 flex-1 justify-center button-cart"
                   href="javascript:void(0);"
                   data-ids="<?= $arResult['ID'] ?>"
                   data-count="1"
                   data-url="/local/ajax/addToBasket.php"
                >
                    Купить</a>
                <a href="#entry-form" class="btn-alert flex-1 justify-center">Записаться</a>
            </div>
        </div>
    </div>
</section>
