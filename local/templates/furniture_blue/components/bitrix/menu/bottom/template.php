<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (empty($arResult)) return;
?>

<div class="footer-grid-col">
  <?php foreach($arResult as $key => $arItem): ?>
      <?php if ($arItem['LINK'] == '') :?>
          <h5><?= $arItem["TEXT"] ?></h5>
      <?php else :?>
          <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
    <?php endif;?>
  <?php endforeach;?>
</div>
