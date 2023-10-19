<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()

$strReturn .= '<div class="o-limit-x"><ul class="uk-breadcrumb sch-breadcrumb">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
  if ($arResult[$index]["LINK"] == '/') {
    $title = '';
    $class = 'home-breadcrumb';
  } else {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $class = '';
  }

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li>
				<a class="'.$class.'" href="'.$arResult[$index]["LINK"].'">'.$title.'</a>
			</li>';
	}
	else
	{
		$strReturn .= '<li><span>'.$title.'</span></li>';
	}
}

$strReturn .= '</ul></div>';

return $strReturn;
