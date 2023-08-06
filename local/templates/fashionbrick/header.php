<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>

    <?

    use Bitrix\Main\Page\Asset;

    // CSS;
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
    //<script src="https://kit.fontawesome.com/f8a5dcd61e.js" crossorigin="anonymous"></script>
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/Fonts/Roboto/stylesheet.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick/slick.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick/slick-theme.min.css');
    //    use Bitrix\Main\UI\Extension;
    //
    //    Extension::load('ui.bootstrap4');
    // JS
    CJSCore::Init(array("jquery3"));
    Asset::getInstance()->addJs('https://kit.fontawesome.com/f8a5dcd61e.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH  . '/css/slick/slick.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.min.js');
    // HEADERS
    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="apple-touch-icon" sizes="57x57" href="/local/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/local/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/local/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/local/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/local/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/local/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/local/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/local/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/local/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/local/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/local/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/local/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/local/ico/favicon-16x16.png">
    <link rel="manifest" href="/local/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/local/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<header class="header">
    <div class="container">
        <div class="header__items">
            <!-- Область контактов-->
            <div class="header__items-wrapper">
                <div class="header__items-contacts">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/contact.php"
                        )
                    ); ?>
                </div>
                <!--        Конец.Область контактов-->
                <div class="header__items-work-time">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/work_time.php"
                        )
                    ); ?>

                    <!-- Область ссылок на соц.сети-->


                </div>
                <div class="header__items-btn">

                    <a href="<? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/btn_link.php"
                        )
                    ); ?>" class="header__items-btn-link">
                        <i class="fa fa-phone"></i>
                        <p class="btn__text"><? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/btn_text.php"
                                )
                            ); ?>
                        </p>
                    </a>
                </div>
            </div>
            <div class="header__items-social">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/social-link.php"
                    )
                ); ?>

            </div>
        </div>
    </div>
</header>
<nav class="top_menu">

    <div class="top_menu-wrapper container">
        <div class="logo"><a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo21.png" alt="logo"
                                           class="logo-img"></a></div>
        <div class="menu">
            <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
            $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main_menu",
                array(
                    "ROOT_MENU_TYPE" => "main",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "3",
                    "CHILD_MENU_TYPE" => "section",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                    "COMPONENT_TEMPLATE" => "main_menu"
                ),
                false
            ); ?>
        </div>
        <div class="cart">
            <a href="/personal/cart/" class="cart-link">
                <div class="img-cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="26" viewBox="0 0 23 26" stroke="#f5f5f5"
                         fill="none">
                        <path d="M2.02421 9.01692C2.07258 8.415 2.57517 7.95117 3.17904 7.95117H19.2878C19.8917 7.95117 20.3943 8.415 20.4426 9.01692L21.4592 21.6681C21.5676 23.0167 20.5025 24.1708 19.1495 24.1708H3.31724C1.96437 24.1708 0.899225 23.0167 1.0076 21.6681L2.02421 9.01692Z"
                              stroke="#f5f5f5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.8675 11.4269V5.63419C15.8675 3.0748 13.7927 1 11.2333 1C8.67392 1 6.59912 3.0748 6.59912 5.63419V11.4269"
                              stroke="#f5f5f5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="cart_title">Корзина
                    <? // Ссылка на корзину
                    $APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"top_menu_basket", 
	array(
		"COMPONENT_TEMPLATE" => "top_menu_basket",
		"PATH_TO_BASKET" => "/personal/cart/",
		"PATH_TO_ORDER" => "personal/order_make/",
		"SHOW_NUM_PRODUCTS" => "Y",
		"SHOW_TOTAL_PRICE" => "Y",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_PERSONAL_LINK" => "N",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"SHOW_AUTHOR" => "N",
		"PATH_TO_AUTHORIZE" => "",
		"SHOW_REGISTRATION" => "N",
		"PATH_TO_REGISTER" => SITE_DIR."login/",
		"PATH_TO_PROFILE" => SITE_DIR."personal/",
		"SHOW_PRODUCTS" => "N",
		"SHOW_DELAY" => "N",
		"SHOW_NOTAVAIL" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_PRICE" => "Y",
		"SHOW_SUMMARY" => "Y",
		"POSITION_FIXED" => "N",
		"HIDE_ON_BASKET_PAGES" => "N",
		"MAX_IMAGE_SIZE" => "70"
	),
	false
);
                    ?>
                </div>
            </a>
        </div>
    </div>

</nav>

<?

if ($CurDir === '/' && (!str_starts_with($CurUri,'/test.php'))) { ?>
    <section class="slider__main">
        <p class="Slider_infoBlock">
            <? // Сладер на главной
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "slider",
                array(
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "8",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "NAME",
                        1 => "PREVIEW_TEXT",
                        2 => "DETAIL_TEXT",
                        3 => "DETAIL_PICTURE",
                        4 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "ATT_BTN_NAME",
                        1 => "ATT_PREF",
                        2 => "ATT_BTN_LINK",
                        3 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_NOTES" => "",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_STATUS_404" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "COMPONENT_TEMPLATE" => "slider",
                    "SET_LAST_MODIFIED" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => ""
                ),
                false
            ); ?>
        </p>
    </section>
    <?  } else { ?>
    <div class="margin_top"></div>
<? } ?>

<div class="container">
    <?// Навигационная цепочка - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/breadcrumb.php
    $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	".default", 
	array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
    <h1><?$APPLICATION->ShowTitle(false);?></h1>
