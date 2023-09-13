<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */
?>




<div class="product-item">

    <? if ($itemHasDetailUrl): ?>
    <a class="product-item-image-wrapper" href="<?= $item['DETAIL_PAGE_URL'] ?>" title="<?= $imgTitle ?>"
       data-entity="image-wrapper">
        <? else: ?>
        <span class="product-item-image-wrapper" data-entity="image-wrapper">
	<? endif; ?>
		<span class="product-item-image-slider-slide-container slide" id="<?= $itemIds['PICT_SLIDER'] ?>"
			<?= ($showSlider ? '' : 'style="display: none;"') ?>
			data-slider-interval="<?= $arParams['SLIDER_INTERVAL'] ?>" data-slider-wrap="true">
			<?
            if ($showSlider) {
                foreach ($morePhoto as $key => $photo) {
                    ?>
                    <span class="product-item-image-slide item <?= ($key == 0 ? 'active' : '') ?>"
                          style="background-image: url('<?= $photo['SRC'] ?>');"></span>
                    <?
                }
            }
            ?>
		</span>
		<span class="product-item-image-original" id="<?= $itemIds['PICT'] ?>"
              style="background-color:#D9D9D9; background-image: url('<?= $item['PREVIEW_PICTURE']['SRC'] ?>'); <?= ($showSlider ? 'display: none;' : '') ?>"></span>
		<?
        if ($item['SECOND_PICT']) {
            $bgImage = !empty($item['PREVIEW_PICTURE_SECOND']) ? $item['PREVIEW_PICTURE_SECOND']['SRC'] : $item['PREVIEW_PICTURE']['SRC'];
            ?>
            <span class="product-item-image-alternative" id="<?= $itemIds['SECOND_PICT'] ?>"
                  style="background-color:#D9D9D9; background-image: url('<?= $bgImage ?>'); <?= ($showSlider ? 'display: none;' : '') ?>"></span>
            <?
        }

        if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y') {
            ?>
            <div class="product-item-label-ring <?= $discountPositionClass ?>" id="<?= $itemIds['DSC_PERC'] ?>"
				<?= ($price['PERCENT'] > 0 ? '' : 'style="display: none;"') ?>>
				<span><?= -$price['PERCENT'] ?>%</span>
			</div>
            <?
        }

        if ($item['LABEL']) {
            ?>
            <div class="product-item-label-text <?= $labelPositionClass ?>" id="<?= $itemIds['STICKER_ID'] ?>">
				<?
                if (!empty($item['LABEL_ARRAY_VALUE'])) {
                    foreach ($item['LABEL_ARRAY_VALUE'] as $code => $value) {
                        ?>
                        <div<?= (!isset($item['LABEL_PROP_MOBILE'][$code]) ? ' class="d-none d-sm-block"' : '') ?>>
							<span title="<?= $value ?>"><?= $value ?></span>
						</div>
                        <?
                    }
                }
                ?>
			</div>
            <?
        }
        ?>
		<span class="product-item-image-slider-control-container" id="<?= $itemIds['PICT_SLIDER'] ?>_indicator"
			<?= ($showSlider ? '' : 'style="display: none;"') ?>>
			<?
            if ($showSlider) {
                foreach ($morePhoto as $key => $photo) {
                    ?>
                    <span class="product-item-image-slider-control<?= ($key == 0 ? ' active' : '') ?>"
                          data-go-to="<?= $key ?>"></span>
                    <?
                }
            }
            ?>
		</span>
		<?
        if ($arParams['SLIDER_PROGRESS'] === 'Y') {
            ?>
            <span class="product-item-image-slider-progress-bar-container">
				<span class="product-item-image-slider-progress-bar" id="<?= $itemIds['PICT_SLIDER'] ?>_progress_bar"
                      style="width: 0;"></span>
			</span>
            <?
        }
        ?>
            <? if ($itemHasDetailUrl): ?>
    </a>
<? else: ?>
    </span>
<? endif; ?>
    <div class="product-item-wrapper">
    <div class="product-item-rating">
        <? for ($i=1; $i<=5; $i++){
            if ($i<=((int)$arResult['ITEM']['rating'])) {?>
                <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.9298 1.05976C17.6183 0.412131 16.96 0 16.2371 0C15.5143 0 14.8619 0.412131 14.5445 1.05976L10.7655 8.84903L2.32601 10.0972C1.62076 10.2032 1.03305 10.6977 0.815595 11.3748C0.598142 12.0519 0.774455 12.7996 1.27989 13.3L7.40384 19.3701L5.95807 27.9483C5.84053 28.6549 6.13438 29.3731 6.71622 29.7912C7.29805 30.2092 8.06795 30.2622 8.70268 29.9266L16.243 25.8936L23.7834 29.9266C24.4181 30.2622 25.188 30.2151 25.7698 29.7912C26.3517 29.3672 26.6455 28.6549 26.528 27.9483L25.0763 19.3701L31.2003 13.3C31.7057 12.7996 31.8879 12.0519 31.6646 11.3748C31.4412 10.6977 30.8594 10.2032 30.1541 10.0972L21.7087 8.84903L17.9298 1.05976Z" fill="#C6C031"/>
                </svg>
           <?} else { ?>
                <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.7206 1.27648L17.7213 1.27801L21.5003 9.06728L21.6156 9.30503L21.877 9.34366L30.3212 10.5916C30.3214 10.5917 30.3216 10.5917 30.3218 10.5917C30.8387 10.6696 31.2664 11.0321 31.4311 11.5314C31.5947 12.0273 31.4613 12.577 31.0899 12.9447L31.0897 12.9449L24.9657 19.015L24.7814 19.1977L24.8247 19.4536L26.2761 28.0304C26.2762 28.0305 26.2762 28.0305 26.2762 28.0306C26.3623 28.5486 26.1472 29.0735 25.7168 29.387C25.2931 29.6957 24.729 29.7329 24.2595 29.4851C24.2591 29.4849 24.2588 29.4847 24.2585 29.4845L16.7202 25.4527L16.4844 25.3265L16.2486 25.4527L8.71037 29.4845C8.71005 29.4847 8.70973 29.4849 8.70941 29.4851C8.24259 29.7314 7.67671 29.6921 7.24935 29.3851C6.8233 29.079 6.60625 28.5506 6.69264 28.0307C6.69265 28.0306 6.69267 28.0305 6.69268 28.0304L8.13828 19.4532L8.18137 19.1976L7.99722 19.015L1.87327 12.9449L1.87308 12.9447C1.50398 12.5793 1.37207 12.0289 1.53304 11.5277C1.69153 11.0342 2.12148 10.6701 2.64096 10.5918C2.64121 10.5917 2.64146 10.5917 2.64171 10.5916L11.0801 9.34365L11.3415 9.305L11.4568 9.06728L15.2349 1.27979C15.235 1.27956 15.2351 1.27933 15.2353 1.2791C15.4698 0.801137 15.949 0.5 16.4785 0.5C17.0107 0.5 17.493 0.803323 17.7206 1.27648Z" fill="#E2E2E2" stroke="#CACACA"/>
                </svg>
                <? }

            }
        ?>
    </div>
        <span class="product-item-rating-price-current" id="<?= $itemIds['PRICE'] ?>">
							<?
                            if (!empty($price)) {
                                if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers) {
                                    echo Loc::getMessage(
                                        'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE2',
                                        array(
                                            '#PRICE#' => $price['PRINT_RATIO_PRICE'],
                                            '#VALUE#' => $measureRatio,
                                            '#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
                                        )
                                    );
                                } else {
                                    echo $price['PRINT_RATIO_PRICE'];
                                }
                            }
                            ?>
						</span>

    </div>
    <h3 class="product-item-title">
        <? if ($itemHasDetailUrl): ?>
        <a href="<?= $item['DETAIL_PAGE_URL'] ?>" title="<?=$arResult['ITEM']['SECTION_DESCRIPTION'];?>">
            <? endif; ?>
            <?=$arResult['ITEM']['SECTION_DESCRIPTION'] ?>

            <? if ($itemHasDetailUrl): ?>
        </a>
    <? endif; ?>
    </h3>
    <h4 class="product-item-facture">
        ФАКТУРА:<?=$productTitle?>
    </h4>
    <h5 class="product-item-name">
        <?=$arResult['ITEM']['SECTION_NAME']?>
    </h5>
   
    <?
    if (!empty($arParams['PRODUCT_BLOCKS_ORDER'])) {
        foreach ($arParams['PRODUCT_BLOCKS_ORDER'] as $blockName) {
            switch ($blockName) {
                case 'price': ?>
                    <div class="product-item-info-container product-item-price-container" data-entity="price-block">
                        <?
                        if ($arParams['SHOW_OLD_PRICE'] === 'Y') {
                            ?>
                            <span class="product-item-price-old" id="<?= $itemIds['PRICE_OLD'] ?>"
								<?= ($price['RATIO_PRICE'] >= $price['RATIO_BASE_PRICE'] ? 'style="display: none;"' : '') ?>>
								<?= $price['PRINT_RATIO_BASE_PRICE'] ?>
							</span>&nbsp;
                            <?
                        }
                        ?>
<!--                        <span class="product-item-price-current" id="--><?//= $itemIds['PRICE'] ?><!--">-->
<!--							--><?//
//                            if (!empty($price)) {
//                                if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers) {
//                                    echo Loc::getMessage(
//                                        'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
//                                        array(
//                                            '#PRICE#' => $price['PRINT_RATIO_PRICE'],
//                                            '#VALUE#' => $measureRatio,
//                                            '#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
//                                        )
//                                    );
//                                } else {
//                                    echo $price['PRINT_RATIO_PRICE'];
//                                }
//                            }
//                            ?>
<!--						</span>-->
                    </div>
                    <?
                    break;

                case 'quantityLimit':
                    if ($arParams['SHOW_MAX_QUANTITY'] !== 'N') {
                        if ($haveOffers) {
                            if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y') {
                                ?>
                                <div class="product-item-info-container product-item-hidden"
                                     id="<?= $itemIds['QUANTITY_LIMIT'] ?>"
                                     style="display: none;"
                                     data-entity="quantity-limit-block">
                                    <div class="product-item-info-container-title text-muted">
                                        <?= $arParams['MESS_SHOW_MAX_QUANTITY'] ?>:
                                        <span class="product-item-quantity text-dark"
                                              data-entity="quantity-limit-value"></span>
                                    </div>
                                </div>
                                <?
                            }
                        } else {
                            if (
                                $measureRatio
                                && (float)$actualItem['CATALOG_QUANTITY'] > 0
                                && $actualItem['CATALOG_QUANTITY_TRACE'] === 'Y'
                                && $actualItem['CATALOG_CAN_BUY_ZERO'] === 'N'
                            ) {
                                ?>
                                <div class="product-item-info-container product-item-hidden"
                                     id="<?= $itemIds['QUANTITY_LIMIT'] ?>">
                                    <div class="product-item-info-container-title text-muted">
                                        <?= $arParams['MESS_SHOW_MAX_QUANTITY'] ?>:
                                        <span class="product-item-quantity text-dark"
                                              data-entity="quantity-limit-value">
												<?
                                                if ($arParams['SHOW_MAX_QUANTITY'] === 'M') {
                                                    if ((float)$actualItem['CATALOG_QUANTITY'] / $measureRatio >= $arParams['RELATIVE_QUANTITY_FACTOR']) {
                                                        echo $arParams['MESS_RELATIVE_QUANTITY_MANY'];
                                                    } else {
                                                        echo $arParams['MESS_RELATIVE_QUANTITY_FEW'];
                                                    }
                                                } else {
                                                    echo $actualItem['CATALOG_QUANTITY'] . ' ' . $actualItem['ITEM_MEASURE']['TITLE'];
                                                }
                                                ?>
											</span>
                                    </div>
                                </div>
                                <?
                            }
                        }
                    }

                    break;

                case 'quantity':
                    if (!$haveOffers) {
                        if ($actualItem['CAN_BUY'] && $arParams['USE_PRODUCT_QUANTITY']) {
                            ?>
                            <div class="product-item-info-container product-item-hidden" data-entity="quantity-block">
                                <div class="product-item-amount">
                                    <div class="product-item-amount-field-container">
                                        <span class="product-item-amount-field-btn-minus no-select"
                                              id="<?= $itemIds['QUANTITY_DOWN'] ?>"></span>
                                        <div class="product-item-amount-field-block">
                                            <input class="product-item-amount-field" id="<?= $itemIds['QUANTITY'] ?>"
                                                   type="number" name="<?= $arParams['PRODUCT_QUANTITY_VARIABLE'] ?>"
                                                   value="<?= $measureRatio ?>">
                                            <span class="product-item-amount-description-container">
												<span id="<?= $itemIds['QUANTITY_MEASURE'] ?>"><?= $actualItem['ITEM_MEASURE']['TITLE'] ?></span>
												<span id="<?= $itemIds['PRICE_TOTAL'] ?>"></span>
											</span>
                                        </div>
                                        <span class="product-item-amount-field-btn-plus no-select"
                                              id="<?= $itemIds['QUANTITY_UP'] ?>"></span>
                                    </div>
                                </div>
                            </div>
                            <?
                        }
                    } elseif ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y') {
                        if ($arParams['USE_PRODUCT_QUANTITY']) {
                            ?>
                            <div class="product-item-info-container product-item-hidden" data-entity="quantity-block">
                                <div class="product-item-amount">
                                    <div class="product-item-amount-field-container">
                                        <span class="product-item-amount-field-btn-minus no-select"
                                              id="<?= $itemIds['QUANTITY_DOWN'] ?>"></span>
                                        <div class="product-item-amount-field-block">
                                            <input class="product-item-amount-field" id="<?= $itemIds['QUANTITY'] ?>"
                                                   type="number" name="<?= $arParams['PRODUCT_QUANTITY_VARIABLE'] ?>"
                                                   value="<?= $measureRatio ?>">
                                            <span class="product-item-amount-description-container">
												<span id="<?= $itemIds['QUANTITY_MEASURE'] ?>"><?= $actualItem['ITEM_MEASURE']['TITLE'] ?></span>
												<span id="<?= $itemIds['PRICE_TOTAL'] ?>"></span>
											</span>
                                        </div>
                                        <span class="product-item-amount-field-btn-plus no-select"
                                              id="<?= $itemIds['QUANTITY_UP'] ?>"></span>
                                    </div>
                                </div>
                            </div>
                            <?
                        }
                    }

                    break;

                case 'buttons':
                    ?>
                    <div class="product-item-info-container product-item-hidden" data-entity="buttons-block">
                        <?
                        if (!$haveOffers) {
                            if ($actualItem['CAN_BUY']) {
                                ?>
                                <div class="product-item-button-container" id="<?= $itemIds['BASKET_ACTIONS'] ?>">
                                    <button class="btn btn-primary <?= $buttonSizeClass ?>"
                                            id="<?= $itemIds['BUY_LINK'] ?>"
                                            href="javascript:void(0)" rel="nofollow">
                                        <?= ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) ?>
                                    </button>
                                </div>
                                <?
                            } else {
                                ?>
                                <div class="product-item-button-container">
                                    <?
                                    if ($showSubscribe) {
                                        $APPLICATION->IncludeComponent(
                                            'bitrix:catalog.product.subscribe',
                                            '',
                                            array(
                                                'PRODUCT_ID' => $actualItem['ID'],
                                                'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
                                                'BUTTON_CLASS' => 'btn btn-primary ' . $buttonSizeClass,
                                                'DEFAULT_DISPLAY' => true,
                                                'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
                                            ),
                                            $component,
                                            array('HIDE_ICONS' => 'Y')
                                        );
                                    }
                                    ?>
                                    <button class="btn btn-link <?= $buttonSizeClass ?>"
                                            id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>" href="javascript:void(0)"
                                            rel="nofollow">
                                        <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                                    </button>
                                </div>
                                <?
                            }
                        } else {
                            if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y') {
                                ?>
                                <div class="product-item-button-container">
                                    <?
                                    if ($showSubscribe) {
                                        $APPLICATION->IncludeComponent(
                                            'bitrix:catalog.product.subscribe',
                                            '',
                                            array(
                                                'PRODUCT_ID' => $item['ID'],
                                                'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
                                                'BUTTON_CLASS' => 'btn btn-primary ' . $buttonSizeClass,
                                                'DEFAULT_DISPLAY' => !$actualItem['CAN_BUY'],
                                                'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
                                            ),
                                            $component,
                                            array('HIDE_ICONS' => 'Y')
                                        );
                                    }
                                    ?>
                                    <button class="btn btn-link <?= $buttonSizeClass ?>"
                                            id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>" href="javascript:void(0)"
                                            rel="nofollow"
                                        <?= ($actualItem['CAN_BUY'] ? 'style="display: none;"' : '') ?>>
                                        <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                                    </button>
                                    <div id="<?= $itemIds['BASKET_ACTIONS'] ?>" <?= ($actualItem['CAN_BUY'] ? '' : 'style="display: none;"') ?>>
                                        <button class="btn btn-primary <?= $buttonSizeClass ?>"
                                                id="<?= $itemIds['BUY_LINK'] ?>"
                                                href="javascript:void(0)" rel="nofollow">
                                            <?= ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) ?>
                                        </button>
                                    </div>
                                </div>
                                <?
                            } else {
                                ?>
                                <div class="product-item-button-container">
                                    <a class="btn btn-primary <?= $buttonSizeClass ?>"
                                       href="<?= $item['DETAIL_PAGE_URL'] ?>">
                                        <?= $arParams['MESS_BTN_DETAIL'] ?>
                                    </a>
                                </div>
                                <?
                            }
                        }
                        ?>
                    </div>
                    <?
                    break;

                case 'props':
                    if (!$haveOffers) {
                        if (!empty($item['DISPLAY_PROPERTIES'])) {
                            ?>
                            <div class="product-item-info-container product-item-hidden" data-entity="props-block">
                                <dl class="product-item-properties">
                                    <?
                                    foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty) {
                                        ?>
                                        <dt class="text-muted<?= (!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' d-none d-sm-block' : '') ?>">
                                            <?= $displayProperty['NAME'] ?>
                                        </dt>
                                        <dd class="text-dark<?= (!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' d-none d-sm-block' : '') ?>">
                                            <?= (is_array($displayProperty['DISPLAY_VALUE'])
                                                ? implode(' / ', $displayProperty['DISPLAY_VALUE'])
                                                : $displayProperty['DISPLAY_VALUE']) ?>
                                        </dd>
                                        <?
                                    }
                                    ?>
                                </dl>
                            </div>
                            <?
                        }

                        if ($arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y' && !empty($item['PRODUCT_PROPERTIES'])) {
                            ?>
                            <div id="<?= $itemIds['BASKET_PROP_DIV'] ?>" style="display: none;">
                                <?
                                if (!empty($item['PRODUCT_PROPERTIES_FILL'])) {
                                    foreach ($item['PRODUCT_PROPERTIES_FILL'] as $propID => $propInfo) {
                                        ?>
                                        <input type="hidden"
                                               name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propID ?>]"
                                               value="<?= htmlspecialcharsbx($propInfo['ID']) ?>">
                                        <?
                                        unset($item['PRODUCT_PROPERTIES'][$propID]);
                                    }
                                }

                                if (!empty($item['PRODUCT_PROPERTIES'])) {
                                    ?>
                                    <table>
                                        <?
                                        foreach ($item['PRODUCT_PROPERTIES'] as $propID => $propInfo) {
                                            ?>
                                            <tr>
                                                <td><?= $item['PROPERTIES'][$propID]['NAME'] ?></td>
                                                <td>
                                                    <?
                                                    if (
                                                        $item['PROPERTIES'][$propID]['PROPERTY_TYPE'] === 'L'
                                                        && $item['PROPERTIES'][$propID]['LIST_TYPE'] === 'C'
                                                    ) {
                                                        foreach ($propInfo['VALUES'] as $valueID => $value) {
                                                            ?>
                                                            <label>
                                                                <? $checked = $valueID === $propInfo['SELECTED'] ? 'checked' : ''; ?>
                                                                <input type="radio"
                                                                       name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propID ?>]"
                                                                       value="<?= $valueID ?>" <?= $checked ?>>
                                                                <?= $value ?>
                                                            </label>
                                                            <br/>
                                                            <?
                                                        }
                                                    } else {
                                                        ?>
                                                        <select name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propID ?>]">
                                                            <?
                                                            foreach ($propInfo['VALUES'] as $valueID => $value) {
                                                                $selected = $valueID === $propInfo['SELECTED'] ? 'selected' : '';
                                                                ?>
                                                                <option value="<?= $valueID ?>" <?= $selected ?>>
                                                                    <?= $value ?>
                                                                </option>
                                                                <?
                                                            }
                                                            ?>
                                                        </select>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?
                                        }
                                        ?>
                                    </table>
                                    <?
                                }
                                ?>
                            </div>
                            <?
                        }
                    } else {
                        $showProductProps = !empty($item['DISPLAY_PROPERTIES']);
                        $showOfferProps = $arParams['PRODUCT_DISPLAY_MODE'] === 'Y' && $item['OFFERS_PROPS_DISPLAY'];

                        if ($showProductProps || $showOfferProps) {
                            ?>
                            <div class="product-item-info-container product-item-hidden" data-entity="props-block">
                                <dl class="product-item-properties">
                                    <?
                                    if ($showProductProps) {
                                        foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty) {
                                            ?>
                                            <dt class="text-muted<?= (!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' d-none d-sm-block' : '') ?>">
                                                <?= $displayProperty['NAME'] ?>
                                            </dt>
                                            <dd class="text-dark<?= (!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' d-none d-sm-block' : '') ?>">
                                                <?= (is_array($displayProperty['DISPLAY_VALUE'])
                                                    ? implode(' / ', $displayProperty['DISPLAY_VALUE'])
                                                    : $displayProperty['DISPLAY_VALUE']) ?>
                                            </dd>
                                            <?
                                        }
                                    }

                                    if ($showOfferProps) {
                                        ?>
                                        <span id="<?= $itemIds['DISPLAY_PROP_DIV'] ?>" style="display: none;"></span>
                                        <?
                                    }
                                    ?>
                                </dl>
                            </div>
                            <?
                        }
                    }

                    break;

                case 'sku':
                    if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y' && $haveOffers && !empty($item['OFFERS_PROP'])) {
                        ?>
                        <div class="product-item-info-container product-item-hidden" id="<?= $itemIds['PROP_DIV'] ?>">
                            <?
                            foreach ($arParams['SKU_PROPS'] as $skuProperty) {
                                $propertyId = $skuProperty['ID'];
                                $skuProperty['NAME'] = htmlspecialcharsbx($skuProperty['NAME']);
                                if (!isset($item['SKU_TREE_VALUES'][$propertyId]))
                                    continue;
                                ?>
                                <div data-entity="sku-block">
                                    <div class="product-item-scu-container" data-entity="sku-line-block">
                                        <div class="product-item-scu-block-title text-muted"><?= $skuProperty['NAME'] ?></div>
                                        <div class="product-item-scu-block">
                                            <div class="product-item-scu-list">
                                                <ul class="product-item-scu-item-list">
                                                    <?
                                                    foreach ($skuProperty['VALUES'] as $value) {
                                                        if (!isset($item['SKU_TREE_VALUES'][$propertyId][$value['ID']]))
                                                            continue;

                                                        $value['NAME'] = htmlspecialcharsbx($value['NAME']);

                                                        if ($skuProperty['SHOW_MODE'] === 'PICT') {
                                                            ?>
                                                            <? if ($value['PICT']['SRC']) { ?>
                                                                <li class="product-item-scu-item-text-container"
                                                                    title="<?= $value['NAME'] ?>"
                                                                    data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>"
                                                                    data-onevalue="<?= $value['ID'] ?>">
                                                                    <div class="product-item-scu-item-text-block">
                                                                        <div class="product-item-scu-item-text"><?= $value['NAME'] ?></div>
                                                                    </div>
                                                                </li>
                                                            <? } else { ?>
                                                                <li class="product-item-scu-item-color-container"
                                                                    title="<?= $value['NAME'] ?>"
                                                                    data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>"
                                                                    data-onevalue="<?= $value['ID'] ?>">
                                                                    <div class="product-item-scu-item-color-block">
                                                                        <div class="product-item-scu-item-color"
                                                                             title="<?= $value['NAME'] ?>"
                                                                             style="background-image: url('<?= $value['PICT']['SRC'] ?>');"></div>
                                                                    </div>
                                                                </li>
                                                            <?
                                                            } ?>

                                                            <?
                                                        } else {
                                                            ?>
                                                            <li class="product-item-scu-item-text-container"
                                                                title="<?= $value['NAME'] ?>"
                                                                data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>"
                                                                data-onevalue="<?= $value['ID'] ?>">
                                                                <div class="product-item-scu-item-text-block">
                                                                    <div class="product-item-scu-item-text"><?= $value['NAME'] ?></div>
                                                                </div>
                                                            </li>
                                                            <?
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?
                            }
                            ?>
                        </div>
                        <?
                        foreach ($arParams['SKU_PROPS'] as $skuProperty) {
                            if (!isset($item['OFFERS_PROP'][$skuProperty['CODE']]))
                                continue;

                            $skuProps[] = array(
                                'ID' => $skuProperty['ID'],
                                'SHOW_MODE' => $skuProperty['SHOW_MODE'],
                                'VALUES' => $skuProperty['VALUES'],
                                'VALUES_COUNT' => $skuProperty['VALUES_COUNT']
                            );
                        }

                        unset($skuProperty, $value);

                        if ($item['OFFERS_PROPS_DISPLAY']) {
                            foreach ($item['JS_OFFERS'] as $keyOffer => $jsOffer) {
                                $strProps = '';

                                if (!empty($jsOffer['DISPLAY_PROPERTIES'])) {
                                    foreach ($jsOffer['DISPLAY_PROPERTIES'] as $displayProperty) {
                                        $strProps .= '<dt>' . $displayProperty['NAME'] . '</dt><dd>'
                                            . (is_array($displayProperty['VALUE'])
                                                ? implode(' / ', $displayProperty['VALUE'])
                                                : $displayProperty['VALUE'])
                                            . '</dd>';
                                    }
                                }

                                $item['JS_OFFERS'][$keyOffer]['DISPLAY_PROPERTIES'] = $strProps;
                            }
                            unset($jsOffer, $strProps);
                        }
                    }

                    break;
            }
        }
    }

    if (
        $arParams['DISPLAY_COMPARE']
        && (!$haveOffers || $arParams['PRODUCT_DISPLAY_MODE'] === 'Y')
    ) {
        ?>
        <div class="product-item-compare-container">
            <div class="product-item-compare">
                <div class="checkbox">
                    <label id="<?= $itemIds['COMPARE_LINK'] ?>">
                        <input type="checkbox" data-entity="compare-checkbox">
                        <span data-entity="compare-title"><?= $arParams['MESS_BTN_COMPARE'] ?></span>
                    </label>
                </div>
            </div>
        </div>
        <?
    }
    ?>
</div>