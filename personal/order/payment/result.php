<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результат оплаты");
?>

<section>
    <div class="o-limit-x">
        <h2>Оплата произведена успешно</h2>

      <?php $APPLICATION->IncludeComponent(
        "bitrix:sale.order.payment.receive",
        "",
        Array(
          "PAY_SYSTEM_ID" => "2",
          "PERSON_TYPE_ID" => ""
        ),
      false
      );?>
    </div>
</section>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
