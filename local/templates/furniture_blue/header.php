<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="icon" type="image/png" href="<?= SITE_TEMPLATE_PATH?>/images/favicon.png" />
    <link rel="stylesheet" href="https://stijndv.com/fonts/Eudoxus-Sans.css">

    <?php
    $templatePath = SITE_TEMPLATE_PATH;
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addCss("$templatePath/dist/app.css");
    Asset::getInstance()->addCss("$templatePath/css/custom.css");
    Asset::getInstance()->addJs("$templatePath/dist/runtime.js");
    Asset::getInstance()->addJs("$templatePath/dist/jquery.js");
    Asset::getInstance()->addJs("$templatePath/dist/uikit.js");
    Asset::getInstance()->addJs("$templatePath/dist/icons.js");
    Asset::getInstance()->addJs("$templatePath/dist/external.js");
    Asset::getInstance()->addJs("$templatePath/dist/slick.js");
    Asset::getInstance()->addJs("$templatePath/dist/validate.js");
    Asset::getInstance()->addJs("$templatePath/dist/select.js");
    Asset::getInstance()->addJs("$templatePath/dist/app.js");
    Asset::getInstance()->addJs("$templatePath/js/custom.js");
    ?>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        ym(92613350, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
    <!-- Yandex.Metrika counter noscript-->
    <noscript><div><img src="https://mc.yandex.ru/watch/92613350" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter noscript-->

    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <header class="header">
        <div class="o-limit-x flex justify-between items-center">
            <button class="burger"></button>
            <a href="/" class="header__logo">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/header/logo.svg" alt="">
            </a>

            <?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "2",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "Y",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "36000000",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => ""
            ),
                false,
                array(
                    "ACTIVE_COMPONENT" => "Y"
                )
            );?>

            <div class="header__call">
                <a href="tel:<?=  $APPLICATION->GetFileContent("include/phone.php") ?>">
                    <b>
                        <? $APPLICATION->IncludeFile("/include/phone.php"); ?>
                    </b>
                </a>
                <a href="#callBack" uk-toggle class="block">Заказать звонок</a>
            </div>
            <?php if($APPLICATION->GetCurPage(false) != '/education/nursery/'):?>
                <a href="https://mirschool.eljur.ru" class="header__eljur">ЭЛЖУР</a>
            <?php endif;?>

              <?$APPLICATION->IncludeComponent(
                "bitrix:sale.basket.basket.line",
                "basket",
                array(
                  "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                  "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                  "SHOW_PERSONAL_LINK" => "N",
                  "SHOW_NUM_PRODUCTS" => "Y",
                  "SHOW_TOTAL_PRICE" => "N",
                  "SHOW_PRODUCTS" => "N",
                  "POSITION_FIXED" =>"N",
                  "SHOW_AUTHOR" => "N",
                  "PATH_TO_REGISTER" => SITE_DIR."login/",
                  "PATH_TO_PROFILE" => SITE_DIR."personal/",
                  "HIDE_ON_BASKET_PAGES" => "N"
                ),
                false
              );?>

        </div>
    </header>

    <div class="burger-menu hidden">

          <?$APPLICATION->IncludeComponent("bitrix:menu", "top_mobile", array(
            "ROOT_MENU_TYPE" => "top",
            "MAX_LEVEL" => "2",
            "CHILD_MENU_TYPE" => "left",
            "USE_EXT" => "Y",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_TIME" => "36000000",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => ""
          ),
            false
          );?>

        <div class="burger-menu__footer">
            <a class="header__call" href="tel:<?=  $APPLICATION->GetFileContent("include/phone.php") ?>">
              <? $APPLICATION->IncludeFile("/include/phone.php"); ?>
            </a>
            <a href="#callBack" class="callback" uk-toggle>Заказать звонок</a>
            <?php if($APPLICATION->GetCurPage(false) != '/education/nursery/'):?>
                <a href="https://mirschool.eljur.ru" class="header__eljur">ЭЛЖУР</a>
            <?php endif;?>
        </div>
    </div>

    <main>
