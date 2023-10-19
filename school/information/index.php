<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сведения об образовательной организации");
?>

<?php
$APPLICATION->IncludeComponent(
  "bitrix:breadcrumb",
  "main", array(
    "START_FROM" => "0",
    "PATH" => "",
    "SITE_ID" => "s1"
  )
);
?>

<div class="o-limit-x">
  <h2 class="text-center">Сведения об образовательной организации</h2>

  <ul class="label-list my-20" uk-scrollspy="cls: uk-animation-slide-top-small; target: li; delay: 100; repeat: false">
    <li><a class="label" href="/school/information/osnovnye-svedeniya/">Основные сведения</a></li>
    <li><a class="label" href="/school/information/struktura-i-organy-upravleniya-organizatsiey/">Структура и органы управления образовательной организацией</a></li>
    <li><a class="label" href="/school/information/dokumenty/">Документы</a></li>
    <li><a class="label" href="/school/information/obrazovanie/">Образование</a></li>
    <li><a class="label" href="/school/information/obrazovatelnye-standarty/">Образовательные стандарты</a></li>
    <li><a class="label" href=/school/information/rukovodstvo-pedagogicheskiy-nauchno-pedagogicheskiy-sostav/>Руководство. Педагогический состав</a></li>
    <li><a class="label" href="/school/information/materialno-tekhnicheskoe-obespechenie-i-osnashchennost-obrazovatelnogo-protsessa/">Материально-техническое обеспечение и оснащённость образовательного процесса</a></li>
    <li><a class="label" href="#">Стипендии и иные виды материальной поддержки</a></li>
    <li><a class="label" href="/school/information/platnye-obrazovatelnye-uslugi/">Платные образовательные услуги</a></li>
    <li><a class="label" href="#">Финансово-хозяйственная деятельность</a></li>
    <li><a class="label" href="/school/information/vakantnye-mesta-dlya-priema-perevoda-obuchayushchikhsya/">Вакантные места для приёма (перевода)</a></li>
    <li><a class="label" href="#">Сводные данные о результатах проведения специальной оценки условий труда</a></li>
    <li><a class="label" href="#">Доступная среда</a></li>
    <li><a class="label" href="#">Международное сотрудничество</a></li>
  </ul>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
