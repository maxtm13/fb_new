<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?><? $APPLICATION->IncludeComponent(
    "bitrix:menu",
    "bottom_menu2",
    array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "left",
        "COMPONENT_TEMPLATE" => "bottom_menu2",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => array(),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "bottom1",
        "USE_EXT" => "N"
    )
); ?><br>
    <div class="slider__test">
        <? /*$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"DETAIL_TEXT",3=>"DETAIL_PICTURE",4=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"ATT_BTN_NAME",1=>"ATT_PREF",2=>"ATT_BTN_LINK",3=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);*/ ?>
    </div>
    <br>
<? $APPLICATION->IncludeComponent(
	"dev2fun:section.element.group", 
	"element_sections", 
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
); ?>
<? // Структура разделов
$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "test_akk", array(
    "IBLOCK_TYPE" => "content",    // Тип инфоблока
    "IBLOCK_ID" => "9",    // Инфоблок
    "SECTION_ID" => "",    // ID раздела
    "SECTION_CODE" => "",    // Код раздела
    "COUNT_ELEMENTS" => "Y",    // Показывать количество элементов в разделе
    "TOP_DEPTH" => "2",    // Максимальная отображаемая глубина разделов
    "SECTION_FIELDS" => array(    // Поля разделов
        0 => "ID",
        1 => "CODE",
        2 => "XML_ID",
        3 => "NAME",
        4 => "SORT",
        5 => "DESCRIPTION",
        6 => "PICTURE",
        7 => "DETAIL_PICTURE",
        8 => "IBLOCK_TYPE_ID",
        9 => "IBLOCK_ID",
        10 => "IBLOCK_CODE",
        11 => "IBLOCK_EXTERNAL_ID",
        12 => "DATE_CREATE",
        13 => "CREATED_BY",
        14 => "TIMESTAMP_X",
        15 => "MODIFIED_BY",
        16 => "",
    ),
    "SECTION_USER_FIELDS" => array(    // Свойства разделов
        0 => "",
        1 => "",
    ),
    "SECTION_URL" => "#SITE_DIR#/#SECTION_ID#",    // URL, ведущий на страницу с содержимым раздела
    "CACHE_TYPE" => "A",    // Тип кеширования
    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
    "CACHE_NOTES" => "",
    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
    "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
    "COMPONENT_TEMPLATE" => "store_v3",
    "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",    // Показывать количество
    "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",    // Дополнительный фильтр для подсчета количества элементов в разделе
    "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",    // Скрывать разделы с нулевым количеством элементов
    "FILTER_NAME" => "sectionsFilter",    // Имя массива со значениями фильтра разделов
    "VIEW_MODE" => "LINE",
    "SHOW_PARENT_NAME" => "Y",
    "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
    "SHOW_ANGLE" => "Y",
    "OFFSET_MODE" => "N",    // Начальное смещение (скролл) блока разделов
    "OFFSET_VALUE" => "",    // Величина смещения
    "OFFSET_VARIABLE" => "",    // Имя ключа со смещением
),
    false
); ?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>