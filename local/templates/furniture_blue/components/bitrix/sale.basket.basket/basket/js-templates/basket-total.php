<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 */
?>
<script id="basket-total-template" type="text/html">

		<?
		if ($arParams['HIDE_COUPON'] !== 'Y')
		{
			?>
			<div>
                <div class="form promo-code btn-border btn-chevrone-right btn-black small-radius">
                    <input type="text" id="" placeholder="Промокод на скидку" data-entity="basket-coupon-input">
                </div>
			</div>
			<?
		}
		?>
		<div class="flex align-middle flex-col md:flex-row basket__total-side">
            <div class="basket__price">
                <div class="basket__price_label"><?=Loc::getMessage('SBB_TOTAL')?></div>
                <div class="basket__price_val" data-entity="basket-total-price">{{{PRICE_FORMATED}}}</div>
            </div>
            <a href="#" class="btn-filled" data-entity="basket-checkout-button"><?=Loc::getMessage('SBB_ORDER')?></a>
		</div>

		<?/*
		if ($arParams['HIDE_COUPON'] !== 'Y')
		{
		?>
			<div class="basket-coupon-alert-section">
				<div class="basket-coupon-alert-inner">
					{{#COUPON_LIST}}
					<div class="basket-coupon-alert text-{{CLASS}}">
						<span class="basket-coupon-text">
							<strong>{{COUPON}}</strong> - <?=Loc::getMessage('SBB_COUPON')?> {{JS_CHECK_CODE}}
							{{#DISCOUNT_NAME}}({{DISCOUNT_NAME}}){{/DISCOUNT_NAME}}
						</span>
						<span class="close-link" data-entity="basket-coupon-delete" data-coupon="{{COUPON}}">
							<?=Loc::getMessage('SBB_DELETE')?>
						</span>
					</div>
					{{/COUPON_LIST}}
				</div>
			</div>
			<?
		}
		*/?>

</script>
