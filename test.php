<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
//?><div class="items">
	<div class="item">
		<div class="inner">
		</div>
	</div>
	<div class="item">
		<div class="inner">
		</div>
	</div>
	<div class="item">
		<div class="inner">
		</div>
	</div>
	<div class="item">
		<div class="inner">
		</div>
	</div>
	<div class="item">
		<div class="inner">
		</div>
	</div>
	<div class="item">
		<div class="inner">
		</div>
	</div>
	<div class="item">
		<div class="inner">
		</div>
	</div>
	<div class="item">
		<div class="inner">
		</div>
	</div>
	<div class="item">
		<div class="inner">
		</div>
	</div>
	<div class="item">
		<div class="inner">
		</div>
	</div>
	<div class="item">
		<div class="inner">
		</div>
	</div>
</div>
<div class="popular_products">
	<div class="container">
		<h2 class="popular_products-title">Популярные товары</h2>
		<div class="popular_products-subtitle">
			 Мы предлагаем различные виды кирпича для строительства домов, заборов, колонн, высотных домов
		</div>
		 <?$APPLICATION->IncludeComponent(
	"maxtm1:catalog.section",
	"catalog_items_w-rate",
	Array(
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
		"DISPLAY_BOTTOM_PAGER" => "Y",
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
		"LABEL_PROP" => "",
		"LAZY_LOAD" => "Y",
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
		"OFFERS_FIELD_CODE" => array(0=>"NAME",1=>"",),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFER_ADD_PICT_PROP" => "MORE_FOTO",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "4",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(0=>"BASE",),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "#SECTION_CODE#",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
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
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
	</div>
</div>
--&gt;
<?/* $APPLICATION->IncludeComponent(
	"dev2fun:section.element.group",
	"element_sections2",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "element_sections",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_SECTION_PICTURE" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "20",
		"NEWS_SHOW_SECTION" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => array(
		),
		"PARENT_SECTION_CODE" => array(
		),
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "ATT_email",
			1 => "ATT_adress",
			2 => "",
		),
		"SECTION_CHECK_EMPTY" => "N",
		"SECTION_CHILD" => "Y",
		"SECTION_CNT_ELEMENTS" => "Y",
		"SECTION_COUNT" => "",
		"SECTION_DEPTH" => "1",
		"SECTION_DETAIL_URL" => "",
		"SECTION_FILTER_NAME" => "arFilter",
		"SECTION_PREVIEW_TRUNCATE_LEN" => "",
		"SECTION_PROPERTY_CODE" => array(
			0 => "SORT",
			1 => "NAME",
			2 => "",
		),
		"SECTION_SORT_BY1" => "ID",
		"SECTION_SORT_BY2" => "SORT",
		"SECTION_SORT_ORDER1" => "DESC",
		"SECTION_SORT_ORDER2" => "ASC",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"TEMP_OUTPUT_ELEMETS" => "element.php",
		"TEMP_OUTPUT_SECTIONS" => "subSection.php"
	),
	false
); */?>
<?//$APPLICATION->IncludeComponent(
//	"bitrix:catalog.section.list",
//	"test_akk",
//	Array(
//		"COUNT_ELEMENTS" => "Y",
//		"IBLOCK_ID" => "9",
//		"SECTION_CODE" => "",
//		"SECTION_FIELDS" => array(0=>"ID",2=>"XML_ID",4=>"SORT",6=>"PICTURE",8=>"IBLOCK_TYPE_ID",10=>"IBLOCK_CODE",12=>"DATE_CREATE",14=>"TIMESTAMP_X",16=>"","SECTION_USER_FIELDS"=>array(0=>"",),"CACHE_TYPE"=>"A","CACHE_TIME"=>"36000000","CACHE_NOTES"=>"","ADD_SECTIONS_CHAIN"=>"Y","COMPONENT_TEMPLATE"=>"store_v3","ADDITIONAL_COUNT_ELEMENTS_FILTER"=>"additionalCountFilter","HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS"=>"N","FILTER_NAME"=>"sectionsFilter","VIEW_MODE"=>"LINE","CACHE_FILTER"=>"N","SHOW_ANGLE"=>"Y","OFFSET_VALUE"=>"","OFFSET_VARIABLE"=>"",),
//		"SECTION_ID" => "",
//		"TOP_DEPTH" => "2"
//	)
//);?><!---->

<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.vote", 
	"bootstrap_v4", 
	array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "1410",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "catalog",
		"MAX_VOTE" => "5",
		"MESSAGE_404" => "",
		"SET_STATUS_404" => "N",
		"VOTE_NAMES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "4",
			4 => "5",
			5 => "",
		),
		"COMPONENT_TEMPLATE" => "bootstrap_v4",
		"DISPLAY_AS_RATING" => "rating",
		"SHOW_RATING" => "Y"
	),
	false
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>