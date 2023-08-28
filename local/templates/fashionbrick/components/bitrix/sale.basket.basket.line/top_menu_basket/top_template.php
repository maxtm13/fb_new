<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>
<div class="bx-hdr-profile">
    <? if (!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y'): ?>
        <div class="bx-basket-block">
            <i class="fa fa-user"></i>
            <? if ($USER->IsAuthorized()):
                $name = trim($USER->GetFullName());
                if (!$name)
                    $name = trim($USER->GetLogin());
                if (mb_strlen($name) > 15)
                    $name = mb_substr($name, 0, 12) . '...';
                ?>
                <a href="<?= $arParams['PATH_TO_PROFILE'] ?>"><?= htmlspecialcharsbx($name) ?></a>
                &nbsp;
                <a href="?logout=yes&<?= bitrix_sessid_get() ?>"><?= GetMessage('TSB1_LOGOUT') ?></a>
            <? else:
            $arParamsToDelete = array(
                "login",
                "login_form",
                "logout",
                "register",
                "forgot_password",
                "change_password",
                "confirm_registration",
                "confirm_code",
                "confirm_user_id",
                "logout_butt",
                "auth_service_id",
                "clear_cache",
                "backurl",
            );

            $currentUrl = urlencode($APPLICATION->GetCurPageParam("", $arParamsToDelete));
            if ($arParams['AJAX'] == 'N')
            {
            ?>
                <script type="text/javascript"><?=$cartId?>.currentUrl = '<?=$currentUrl?>';</script><?
            }
            else {
                $currentUrl = '#CURRENT_URL#';
            }

            $pathToAuthorize = $arParams['PATH_TO_AUTHORIZE'];
            $pathToAuthorize .= (mb_stripos($pathToAuthorize, '?') === false ? '?' : '&');
            $pathToAuthorize .= 'login=yes&backurl=' . $currentUrl;
            ?>
                <a href="<?= $pathToAuthorize ?>">
                    <?= GetMessage('TSB1_LOGIN') ?>
                </a>
            <?
            if ($arParams['SHOW_REGISTRATION'] === 'Y')
            {
            $pathToRegister = $arParams['PATH_TO_REGISTER'];
            $pathToRegister .= (mb_stripos($pathToRegister, '?') === false ? '?' : '&');
            $pathToRegister .= 'register=yes&backurl=' . $currentUrl;
            ?>
                <a href="<?= $pathToRegister ?>">
                    <?= GetMessage('TSB1_REGISTER') ?>
                </a>
                <?
            }
                ?>
            <? endif ?>
        </div>
    <? endif ?>
    <!--    <a class="cart__link" href="--><? //= $arParams['PATH_TO_BASKET'] ?><!--">111-->
    <a href="<?= $arParams['PATH_TO_BASKET'] ?>">
        <div class="bx-basket-block">
            <?
            if (!$arResult["DISABLE_USE_BASKET"]) {
            ?><i class="img-cart">
                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.02421 10.0169C4.07258 9.415 4.57517 8.95117 5.17904 8.95117H21.2878C21.8917 8.95117 22.3943 9.415 22.4426 10.0169L23.4592 22.6681C23.5676 24.0167 22.5025 25.1708 21.1495 25.1708H5.31724C3.96437 25.1708 2.89922 24.0167 3.0076 22.6681L4.02421 10.0169Z"
                          stroke="#F5F5F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.8677 12.4269V6.63419C17.8677 4.0748 15.7928 2 13.2335 2C10.6741 2 8.5993 4.0748 8.5993 6.63419V12.4269"
                          stroke="#F5F5F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </i>
            <div class="basket_name"><?= GetMessage('TSB1_CART') ?><?
                }

                if (!$compositeStub) {
                    if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y')) {
                        echo(' (' . $arResult['NUM_PRODUCTS'] . ')'); ?>

                        <?
                        if ($arParams['SHOW_TOTAL_PRICE'] == 'Y') {
                            ?>
                            <br <? if ($arParams['POSITION_FIXED'] == 'Y'): ?>class="hidden-xs"<? endif; ?>/>
                            <span>
						<?= GetMessage('TSB1_TOTAL_PRICE') ?> <strong><?= $arResult['TOTAL_PRICE'] ?></strong>
					</span>
                            <?
                        }
                    }
                }

                if ($arParams['SHOW_PERSONAL_LINK'] == 'Y'):?>
                    <div style="padding-top: 4px;">
                        <span class="icon_info"></span>
                        <a href="<?= $arParams['PATH_TO_PERSONAL'] ?>"><?= GetMessage('TSB1_PERSONAL') ?></a>
                    </div>
                <? endif ?>

            </div>

            <!--    </a>-->
        </div>
    </a>