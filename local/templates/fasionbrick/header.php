<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">-->

    <?

    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
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
<?$APPLICATION->ShowPanel();?>
<header class="header">
    <div class="container">
        <div class="header__items">
            <div class="header__items-contacts">
                <div class="contact__phone">
                    <a href="tel:+7800800800" class="contact__phone-link"><i class="fa fa-phone"></i> +7800800800</a>
                </div>
                <div class="contact__mail">
                    <a href="mailto:mail@mail.ru" class="contact__mail-link"><i class="fa-regular fa-envelope"></i> mail@mail.ru</a>
                </div>
            </div>
            <div class="header__items-social">
                <a href="#" class="social-link"><i class="fa fa-"></i>1</a>
                <a href="#" class="social-link"><i class="fa fa-"></i>2</a>
                <a href="#" class="social-link"><i class="fa fa-"></i>3</a>

            </div>

        </div>
    </div>
</header>


<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "section",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "main_menu"
	),
	false
);?>