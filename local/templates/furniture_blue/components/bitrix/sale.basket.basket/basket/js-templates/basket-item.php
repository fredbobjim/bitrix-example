<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $mobileColumns
 * @var array $arParams
 * @var string $templateFolder
 */

$usePriceInAdditionalColumn = in_array('PRICE', $arParams['COLUMNS_LIST']) && $arParams['PRICE_DISPLAY_MODE'] === 'Y';
$useSumColumn = in_array('SUM', $arParams['COLUMNS_LIST']);
$useActionColumn = in_array('DELETE', $arParams['COLUMNS_LIST']);

$restoreColSpan = 2 + $usePriceInAdditionalColumn + $useSumColumn + $useActionColumn;

$positionClassMap = array(
	'left' => 'basket-item-label-left',
	'center' => 'basket-item-label-center',
	'right' => 'basket-item-label-right',
	'bottom' => 'basket-item-label-bottom',
	'middle' => 'basket-item-label-middle',
	'top' => 'basket-item-label-top'
);

$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}
?>
<script id="basket-item-template" type="text/html">

    <div id="basket-item-{{ID}}" data-id="{{ID}}" data-entity="basket-item" class="basket__item">
        <div>
            <h4>{{NAME}}</h4>
            <p class="basket__p">{{{SECTION_NAME}}}</p>
        </div>
        <div class="basket__item_rs" id="basket-item-height-aligner-{{ID}}">
            <div class="basket__price">
                <div class="basket__price_label">Цена</div>
                <div class="basket__price_val">{{{CURRENT_PRICE}}} ₽</div>
            </div>
            <div class="basket__count-item">
                <div class="input-group inline-group"  data-entity="basket-item-quantity-block">
                    <div class="input-group-prepend">
                        <button class="btn-minus" data-entity="basket-item-quantity-minus"></button>
                    </div>
                    <input id="basket-item-quantity-{{ID}}"
                           class="quantity"
                           value="{{QUANTITY}}"
                           data-value="{{QUANTITY}}"
                           data-entity="basket-item-quantity-field"
                    >
                    <div class="input-group-append">
                        <button class="btn-plus" data-entity="basket-item-quantity-plus"></button>
                    </div>
                </div>
            </div>
            <div class="basket__price-total">{{{SUM_PRICE_FORMATED}}}</div>
            <button data-entity="basket-item-delete" class="basket__del"></button>
        </div>
    </div>

</script>
