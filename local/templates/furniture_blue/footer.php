<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

        </main>

        <footer class="footer">
            <div class="o-limit-x py-14">
                <div class="footer-top">
                    <div>
                        <a href="/" class="footer-logo"><img src="<?= SITE_TEMPLATE_PATH?>/images/footer/logo.svg" alt="logo"></a>
                        <div class="footer-contacts">
                            <div>
                                <b>Школа</b>
                                <p>
                                    <?php $APPLICATION->IncludeFile("/include/adress_school.php"); ?>
                                </p>
                            </div>
                            <div>
                                <b>Детский сад</b>
                                <p>
                                    <?php $APPLICATION->IncludeFile("/include/adress_nursery.php"); ?>
                                </p>
                            </div>
                            <a href="https://yandex.ru/maps/-/CCUCJPUb0C" target="_blank" class="grey-link-dashed">Как добраться?</a>
                            <div class="footer__graffic">
                                <p>График работы:</p>
                                <p><?php $APPLICATION->IncludeFile("/include/schedule.php");?></p>
                            </div>
                            <a href="tel:<?php $APPLICATION->IncludeFile("/include/phone.php")?>" class="black-link">
                                <?php $APPLICATION->IncludeFile("/include/phone.php"); ?>
                            </a>
                            <a href="mailto:<?php $APPLICATION->IncludeFile("/include/email.php")?>" class="black-link">
                                <?php $APPLICATION->IncludeFile("/include/email.php"); ?>
                            </a>
                            <div class="flex mt-3">
                                <a href="https://vk.com/public201089217"><img src="<?= SITE_TEMPLATE_PATH?>/images/icons/vk.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-5 gap-4 ">
                            <?php $APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                                "ROOT_MENU_TYPE" => "bottom1",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "Y",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => ""
                            ),
                              false,
                            );?>

                            <?php $APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                              "ROOT_MENU_TYPE" => "bottom2",
                              "MAX_LEVEL" => "1",
                              "CHILD_MENU_TYPE" => "left",
                              "USE_EXT" => "Y",
                              "MENU_CACHE_TYPE" => "A",
                              "MENU_CACHE_TIME" => "36000000",
                              "MENU_CACHE_USE_GROUPS" => "Y",
                              "MENU_CACHE_GET_VARS" => ""
                            ),
                              false,
                            );?>

                            <?php $APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                              "ROOT_MENU_TYPE" => "bottom3",
                              "MAX_LEVEL" => "1",
                              "CHILD_MENU_TYPE" => "left",
                              "USE_EXT" => "Y",
                              "MENU_CACHE_TYPE" => "A",
                              "MENU_CACHE_TIME" => "36000000",
                              "MENU_CACHE_USE_GROUPS" => "Y",
                              "MENU_CACHE_GET_VARS" => ""
                            ),
                              false,
                            );?>

                            <?php $APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                              "ROOT_MENU_TYPE" => "bottom4",
                              "MAX_LEVEL" => "1",
                              "CHILD_MENU_TYPE" => "left",
                              "USE_EXT" => "Y",
                              "MENU_CACHE_TYPE" => "A",
                              "MENU_CACHE_TIME" => "36000000",
                              "MENU_CACHE_USE_GROUPS" => "Y",
                              "MENU_CACHE_GET_VARS" => ""
                            ),
                              false,
                            );?>

                            <?php $APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                              "ROOT_MENU_TYPE" => "bottom5",
                              "MAX_LEVEL" => "1",
                              "CHILD_MENU_TYPE" => "left",
                              "USE_EXT" => "Y",
                              "MENU_CACHE_TYPE" => "A",
                              "MENU_CACHE_TIME" => "36000000",
                              "MENU_CACHE_USE_GROUPS" => "Y",
                              "MENU_CACHE_GET_VARS" => ""
                            ),
                              false,
                            );?>
                        </div>
                    </div>
                    <div class="footer-contacts-mob">
                        <div class="flex gap-4">
                            <div>
                                <b>Школа</b>
                                <p><?php $APPLICATION->IncludeFile("/include/adress_school.php"); ?></p>
                            </div>
                            <div>
                                <b>Детский сад</b>
                                <p><?php $APPLICATION->IncludeFile("/include/adress_nursery.php"); ?></p>
                            </div>
                        </div>
                        <a href="https://yandex.ru/maps/-/CCUCJPUb0C" class="grey-link-dashed">Как добраться?</a>
                        <div class="footer__graffic">
                            <p>График работы: <?php $APPLICATION->IncludeFile("/include/schedule.php"); ?></p>
                        </div>
                        <a href="tel:<?php $APPLICATION->IncludeFile("/include/phone.php") ?>" class="black-link">
                          <?php $APPLICATION->IncludeFile("/include/phone.php"); ?>
                        </a>
                        <a href="mailto:<?php $APPLICATION->IncludeFile("/include/email.php") ?>" class="black-link">
                          <?php $APPLICATION->IncludeFile("/include/email.php"); ?>
                        </a>
                        <div class="flex mt-3">
                            <a href="https://vk.com/public201089217"><img src="<?= SITE_TEMPLATE_PATH?>/images/icons/vk.svg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="mb-3 md:mb-0">
                        <? $APPLICATION->IncludeFile("/include/copyright.php"); ?>
                    </div>
                    <div class="md:text-right">
                        <? $APPLICATION->IncludeFile("/include/footer_text.php"); ?>
                    </div>
                </div>
            </div>
        </footer>

        <div id="team" class="uk-flex-top mir-modal team-modal" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical flex">

                <button class="uk-modal-close-default" type="button" uk-close></button>

                <div class="mir-modal__content">
                    <h3></h3>
                    <p class="mir-modal__p"></p>

                    <p class="team-modal__p"></p>

                    <p class="mir-quote"></p>
                </div>
                <div class="mir-modal__img">
                    <img src="" alt="">
                </div>
            </div>
        </div>

        <div class="popup-fade">
            <div class="popup">
                <a class="popup-close" href="#">Х</a>
                <p>Товар добавлен в корзину</p>
                <a href="/personal/cart/">Перейти в корзину</a>
            </div>
        </div>

        <div id="callBack" class="uk-flex-top mir-modal mir-modal-small" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical flex">

                <button class="uk-modal-close-default" type="button" uk-close></button>

                <div class="mir-modal__content">
                    <h3>Заказать звонок</h3>
                    <form action="">
                        <p class="form-error" style="color: red"></p>
                        <input type="hidden" name="form_name" value="callback-form">
                        <div class="mir-input__wrap">
                            <input type="text" id="name" name="name" class="mir-input" required>
                            <span class="mir-input__label">Имя Фамилия</span>
                        </div>
                        <div class="mir-input__wrap">
                            <input type="text" id="phone" name="phone" class="mir-input phone-mask" required>
                            <span class="mir-input__label">Телефон</span>
                        </div>
                        <button type="submit" class="btn-border">Отправить заявку</button>
                    </form>
                    <div class="form-success uk-animation-slide-left-medium">
                        <div class="flex justify-center flex-col h-full">
                            <img src="<?= SITE_TEMPLATE_PATH?>/images/modal-img.svg" alt="">
                            <h3>Ваша заявка отправлена</h3>
                            <div class="w-full">
                                <p>В ближайшее время наш менеджер рассмотрит заявку и свяжется с вами.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
