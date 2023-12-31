<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
    <section class="main_content ">
        <div class="catalog_main-sections">
            <div class="container">
                <div class="main-sections-inner">
                    <h2 class="main-sections-title">Категории товаров</h2>
                    <div class="main-sections-subtitle">Мы предлагаем различные виды кирпича для строительства домов,
                        заборов,
                        колонн, высотных домов
                    </div>
                </div>
                <!--        Вывод рзделов Каталога-->
                <div class="main-sections-items">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "main_page_sections",
                        array(
                            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_NOTES" => "",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COMPONENT_TEMPLATE" => "main_page_sections",
                            "COUNT_ELEMENTS" => "N",
                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                            "FILTER_NAME" => "sectionsFilter",
                            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                            "HIDE_SECTION_NAME" => "N",
                            "IBLOCK_ID" => "4",
                            "IBLOCK_TYPE" => "catalog",
                            "SECTION_CODE" => "",
                            "SECTION_FIELDS" => array(0 => "DESCRIPTION", 1 => "",),
                            "SECTION_ID" => "",
                            "SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
                            "SECTION_USER_FIELDS" => array(0 => "", 1 => "",),
                            "SHOW_PARENT_NAME" => "Y",
                            "TOP_DEPTH" => "3",
                            "VIEW_MODE" => "LINE"
                        )
                    ); ?>
                </div>
            </div>
        </div>

        <div class="popular_products" >
            <div class="container">
                <h2 class="popular_products-title">Популярные товары</h2>
                <div class="popular_products-subtitle">Мы предлагаем различные виды кирпича для строительства домов, заборов, колонн, высотных домов
                </div>
                <div class="popular_products-items">
                    <? $APPLICATION->IncludeComponent(
                    "maxtm1:catalog.section",
                    "catalog_items_w-rate",
                    array(
                        "ACTION_VARIABLE" => "action",
                        "ADD_PICT_PROP" => "MORE_PHOTO",
                        "ADD_PROPERTIES_TO_BASKET" => "Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "ADD_TO_BASKET_ACTION" => "ADD",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BACKGROUND_IMAGE" => "-",
                        "BASKET_URL" => "/personal/cart/",
                        "BROWSER_TITLE" => "-",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COMPATIBLE_MODE" => "N",
                        "COMPONENT_TEMPLATE" => "catalog_items",
                        "CONVERT_CURRENCY" => "N",
                        "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                        "DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_COMPARE" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "ELEMENT_SORT_FIELD" => "shows",
                        "ELEMENT_SORT_FIELD2" => "id",
                        "ELEMENT_SORT_ORDER" => "asc",
                        "ELEMENT_SORT_ORDER2" => "desc",
                        "ENLARGE_PRODUCT" => "STRICT",
                        "FILTER_NAME" => "arrFilter",
                        "HIDE_NOT_AVAILABLE" => "N",
                        "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                        "IBLOCK_ID" => "4",
                        "IBLOCK_TYPE" => "catalog",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "LABEL_PROP" => array(
                        ),
                        "LAZY_LOAD" => "N",
                        "LINE_ELEMENT_COUNT" => "3",
                        "LOAD_ON_SCROLL" => "N",
                        "MESSAGE_404" => "",
                        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                        "MESS_BTN_BUY" => "Купить",
                        "MESS_BTN_DETAIL" => "Подробнее",
                        "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                        "MESS_BTN_SUBSCRIBE" => "Подписаться",
                        "MESS_NOT_AVAILABLE" => "Нет в наличии",
                        "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
                        "META_DESCRIPTION" => "-",
                        "META_KEYWORDS" => "-",
                        "OFFERS_FIELD_CODE" => array(
                            0 => "SHOW_COUNTER",
                            1 => "",
                        ),
                        "OFFERS_SORT_FIELD" => "sort",
                        "OFFERS_SORT_FIELD2" => "id",
                        "OFFERS_SORT_ORDER" => "asc",
                        "OFFERS_SORT_ORDER2" => "desc",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Товары",
                        "PAGE_ELEMENT_COUNT" => "3",
                        "PARTIAL_PRODUCT_PROPERTIES" => "N",
                        "PRICE_CODE" => array(
                            0 => "BASE",
                        ),
                        "PRICE_VAT_INCLUDE" => "Y",
                        "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                        "PRODUCT_DISPLAY_MODE" => "N",
                        "PRODUCT_ID_VARIABLE" => "id",
                        "PRODUCT_PROPS_VARIABLE" => "prop",
                        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                        "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false}]",
                        "PRODUCT_SUBSCRIPTION" => "Y",
                        "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                        "RCM_TYPE" => "personal",
                        "SECTION_CODE" => "",
                        "SECTION_ID" => "",
                        "SECTION_ID_VARIABLE" => "SECTION_ID",
                        "SECTION_URL" => "#SECTION_CODE#",
                        "SECTION_USER_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SEF_MODE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SHOW_ALL_WO_SECTION" => "Y",
                        "SHOW_CLOSE_POPUP" => "N",
                        "SHOW_DISCOUNT_PERCENT" => "N",
                        "SHOW_FROM_SECTION" => "N",
                        "SHOW_MAX_QUANTITY" => "N",
                        "SHOW_OLD_PRICE" => "N",
                        "SHOW_PRICE_COUNT" => "1",
                        "SHOW_SLIDER" => "Y",
                        "SLIDER_INTERVAL" => "3000",
                        "SLIDER_PROGRESS" => "N",
                        "TEMPLATE_THEME" => "blue",
                        "USE_ENHANCED_ECOMMERCE" => "N",
                        "USE_MAIN_ELEMENT_SECTION" => "N",
                        "USE_PRICE_COUNT" => "N",
                        "USE_PRODUCT_QUANTITY" => "N",
                        "OFFER_ADD_PICT_PROP" => "MORE_FOTO"
                    ),
                    false
                ); ?>
                </div>
            </div>
        </div>
    </section> <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>