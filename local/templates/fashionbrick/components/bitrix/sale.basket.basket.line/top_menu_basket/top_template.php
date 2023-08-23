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
<!--    <a class="cart__link" href="--><?//= $arParams['PATH_TO_BASKET'] ?><!--">111-->
    <a href="<?= $arParams['PATH_TO_BASKET'] ?>">
    <div class="bx-basket-block">
        <?
        if (!$arResult["DISABLE_USE_BASKET"]) {
            ?><i class="img-cart">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="26" viewBox="0 0 23 26" stroke="#f5f5f5"
                     fill="none">
                    <path d="M2.02421 9.01692C2.07258 8.415 2.57517 7.95117 3.17904 7.95117H19.2878C19.8917 7.95117 20.3943 8.415 20.4426 9.01692L21.4592 21.6681C21.5676 23.0167 20.5025 24.1708 19.1495 24.1708H3.31724C1.96437 24.1708 0.899225 23.0167 1.0076 21.6681L2.02421 9.01692Z"
                          stroke="#f5f5f5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.8675 11.4269V5.63419C15.8675 3.0748 13.7927 1 11.2333 1C8.67392 1 6.59912 3.0748 6.59912 5.63419V11.4269"
                          stroke="#f5f5f5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </i>
            <div class="basket_name"><?= GetMessage('TSB1_CART') ?><?
        }

        if (!$compositeStub) {
            if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y')) {
                echo (' ('.$arResult['NUM_PRODUCTS'].')');?>

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