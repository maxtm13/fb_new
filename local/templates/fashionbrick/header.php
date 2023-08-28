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

    //    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    //<link
    //  rel="stylesheet"
    //  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    ///>
    //    Extension::load('ui.bootstrap4');
    // JS
    CJSCore::Init(array("jquery3"));
    Asset::getInstance()->addJs('https://kit.fontawesome.com/f8a5dcd61e.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/css/slick/slick.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.min.js');
    //Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="personal_inner">
            <div class="user_profile">
                <a class="user_profile-lnk" title="Личный кабинет" href="/personal/">
                    <i class="img-user">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.1318 10.9743C16.1831 11.9553 14.9036 12.5 13.5769 12.5C12.2502 12.5 10.9708 11.9553 10.0221 10.9743C9.07225 9.99207 8.53297 8.653 8.53297 7.25C8.53297 5.847 9.07225 4.50793 10.0221 3.52574C10.9708 2.54469 12.2502 2 13.5769 2C14.9036 2 16.1831 2.54469 17.1318 3.52574C18.0816 4.50793 18.6209 5.847 18.6209 7.25C18.6209 8.653 18.0816 9.99207 17.1318 10.9743ZM4 24.5498C4 20.2607 7.35165 16.8438 11.419 16.8438H15.7348C19.8022 16.8438 23.1538 20.2607 23.1538 24.5498C23.1538 24.8302 22.9422 25 22.7515 25H4.40239C4.21162 25 4 24.8302 4 24.5498Z"
                                  stroke="#F5F5F5" stroke-width="2"/>
                        </svg>
                    </i>
                    <span class="text">ЛК</span>
                </a>
            </div>
            <div class="cart">

                <div class="cart_title cart-link">
                    <? // Ссылка на корзину
                    $APPLICATION->IncludeComponent(
                        "bitrix:sale.basket.basket.line",
                        "top_menu_basket",
                        array(
                            "COMPONENT_TEMPLATE" => "top_menu_basket",
                            "PATH_TO_BASKET" => "/personal/cart/",
                            "PATH_TO_ORDER" => "personal/order_make/",
                            "SHOW_NUM_PRODUCTS" => "Y",
                            "SHOW_TOTAL_PRICE" => "N",
                            "SHOW_EMPTY_VALUES" => "Y",
                            "SHOW_PERSONAL_LINK" => "N",
                            "PATH_TO_PERSONAL" => SITE_DIR . "personal/",
                            "SHOW_AUTHOR" => "N",
                            "PATH_TO_AUTHORIZE" => "",
                            "SHOW_REGISTRATION" => "N",
                            "PATH_TO_REGISTER" => SITE_DIR . "login/",
                            "PATH_TO_PROFILE" => SITE_DIR . "personal/",
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
                    ); ?>
                </div> <!-- cart_title cart-link-->
            </div>
        </div>
    </div>


    <div class="top_menu-wrapper--mobile ">
        <div class="container">
            <div class="top_menu-wrapper--mobile-wrapper">
                <div class="logo">
                    <a href="/">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo21.png" alt="logo" class="logo-img">
                    </a>
                </div>
                <div class="burger-menu">
                    <div class="burger-menu-icon"></div>
                </div>
            </div>
        </div>
    </div>

</nav>

<?

if ($CurDir === '/') { ?>
    <section class="slider__main">
        <div class="slider__main-inner">
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
        </div>
    </section>
<? } else { ?>
<div class="margin_top"></div>
<div class="container">
    <? // Навигационная цепочка - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/breadcrumb.php
    $APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "universal",
        array(
            "START_FROM" => "0",
            "PATH" => "",
            "SITE_ID" => "s1",
            "COMPONENT_TEMPLATE" => "universal"
        ),
        false
    ); ?>
    <h1 class="main-sections-title"><? $APPLICATION->ShowTitle(false); ?></h1>
    <? } ?>


