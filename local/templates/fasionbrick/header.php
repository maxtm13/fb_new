<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
    <!doctype html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
    <head>
        <!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
        <!--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
        <!--    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">-->

        <?

        use Bitrix\Main\Page\Asset;

        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/bootstrap.min.css');
        //<script src="https://kit.fontawesome.com/f8a5dcd61e.js" crossorigin="anonymous"></script>
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/Fonts/Roboto/stylesheet.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.css');
        // CSS;
        //    use Bitrix\Main\UI\Extension;
        //
        //    Extension::load('ui.bootstrap4');
        CJSCore::Init(array("jquery3"));
        Asset::getInstance()->addJs('https://kit.fontawesome.com/f8a5dcd61e.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.min.js');
        // JS
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


                <!-- Область ссылок на соц.сети-->
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
                    <?// Ссылка на корзину
                    $APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "top_menu_basket", Array(
                        "COMPONENT_TEMPLATE" => "top_menu_basket",
                            "PATH_TO_BASKET" => "personal/cart/",	// Страница корзины
                            "PATH_TO_ORDER" => "personal/order/make/",	// Страница оформления заказа
                            "SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
                            "SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
                            "SHOW_EMPTY_VALUES" => "Y",	// Выводить нулевые значения в пустой корзине
                            "SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
                            "PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
                            "SHOW_AUTHOR" => "N",	// Добавить возможность авторизации
                            "PATH_TO_AUTHORIZE" => "",	// Страница авторизации
                            "SHOW_REGISTRATION" => "N",	// Добавить возможность регистрации
                            "PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
                            "PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
                            "SHOW_PRODUCTS" => "Y",	// Показывать список товаров
                            "SHOW_DELAY" => "N",	// Показывать отложенные товары
                            "SHOW_NOTAVAIL" => "N",	// Показывать товары, недоступные для покупки
                            "SHOW_IMAGE" => "Y",	// Выводить картинку товара
                            "SHOW_PRICE" => "Y",	// Выводить цену товара
                            "SHOW_SUMMARY" => "Y",	// Выводить подытог по строке
                            "POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
                            "HIDE_ON_BASKET_PAGES" => "N",	// Не показывать на страницах корзины и оформления заказа
                            "MAX_IMAGE_SIZE" => "70",	// Максимальный размер картинки товара
                        ),
                        false
                    );
                    ?>


                </div>
            </div>
        </div>

    </nav>

