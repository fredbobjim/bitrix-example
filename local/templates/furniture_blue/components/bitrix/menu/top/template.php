<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) return; ?>

<nav class="header-nav-desc">

<?php foreach($arResult as $arItem): ?>

    <?php if($arItem['IS_PARENT']) :?>
        <a href="javascript:void(0);"><?=$arItem["TEXT"]?></a>

        <div uk-dropdown class="sch-ddown">
            <ul class="sub-nav">

                <?php foreach ($arResult as $subItem) :?>

                    <?php if ($subItem['DEPTH_LEVEL'] == 2 && $subItem['CHAIN'][0] == $arItem['CHAIN'][0]) :?>

                      <li><a href="<?=$subItem["LINK"]?>"><?=$subItem["TEXT"]?></a></li>

                    <?php endif;?>

                <?php endforeach; ?>

            </ul>
        </div>
    <?php elseif ($arItem['DEPTH_LEVEL'] == 1):?>

        <a href="javascript:void(0);"><?=$arItem["TEXT"]?></a>

    <?php endif;?>

<?php endforeach; ?>

</nav>
