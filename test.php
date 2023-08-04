<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?>

<?//$APPLICATION->IncludeComponent(
//	"bitrix:news.list",
//	"slider",
//	Array(
//		"ACTIVE_DATE_FORMAT" => "d.m.Y",
//		"ADD_SECTIONS_CHAIN" => "Y",
//		"AJAX_MODE" => "N",
//		"AJAX_OPTION_ADDITIONAL" => "",
//		"AJAX_OPTION_HISTORY" => "N",
//		"AJAX_OPTION_JUMP" => "N",
//		"AJAX_OPTION_STYLE" => "Y",
//		"CACHE_FILTER" => "N",
//		"CACHE_GROUPS" => "Y",
//		"CACHE_TIME" => "36000000",
//		"CACHE_TYPE" => "A",
//		"CHECK_DATES" => "Y",
//		"COMPONENT_TEMPLATE" => "slider",
//		"DETAIL_URL" => "",
//		"DISPLAY_BOTTOM_PAGER" => "Y",
//		"DISPLAY_DATE" => "Y",
//		"DISPLAY_NAME" => "Y",
//		"DISPLAY_PICTURE" => "Y",
//		"DISPLAY_PREVIEW_TEXT" => "Y",
//		"DISPLAY_TOP_PAGER" => "N",
//		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
//		"FILTER_NAME" => "",
//		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
//		"IBLOCK_ID" => "8",
//		"IBLOCK_TYPE" => "content",
//		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
//		"INCLUDE_SUBSECTIONS" => "Y",
//		"MESSAGE_404" => "",
//		"NEWS_COUNT" => "20",
//		"PAGER_BASE_LINK_ENABLE" => "N",
//		"PAGER_DESC_NUMBERING" => "N",
//		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//		"PAGER_SHOW_ALL" => "N",
//		"PAGER_SHOW_ALWAYS" => "N",
//		"PAGER_TEMPLATE" => ".default",
//		"PAGER_TITLE" => "Новости",
//		"PARENT_SECTION" => "",
//		"PARENT_SECTION_CODE" => "",
//		"PREVIEW_TRUNCATE_LEN" => "",
//		"PROPERTY_CODE" => array(0=>"ATT_BTN_NAME",1=>"ATT_PREF",2=>"",),
//		"SET_BROWSER_TITLE" => "Y",
//		"SET_LAST_MODIFIED" => "N",
//		"SET_META_DESCRIPTION" => "Y",
//		"SET_META_KEYWORDS" => "Y",
//		"SET_STATUS_404" => "N",
//		"SET_TITLE" => "Y",
//		"SHOW_404" => "N",
//		"SORT_BY1" => "ACTIVE_FROM",
//		"SORT_BY2" => "SORT",
//		"SORT_ORDER1" => "DESC",
//		"SORT_ORDER2" => "ASC",
//		"STRICT_SECTION_CHECK" => "N"
//	)
//);?>


<?//$APPLICATION->IncludeComponent(
//	"bitrix:highloadblock.view",
//	"HL_feachers",
//	array(
//		"BLOCK_ID" => "",
//		"CHECK_PERMISSIONS" => "N",
//		"LIST_URL" => "",
//		"ROW_ID" => "1",
//		"ROW_KEY" => "b_hlbd_priimushch",
//		"COMPONENT_TEMPLATE" => "HL_feachers"
//	),
//	false
//);?>
<!--    <link rel="stylesheet" type="text/css" href="--><?//=SITE_TEMPLATE_PATH?><!-- /css/slick/slick.min.css"/>-->




<?php
// Структура разделов
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	".default",                // [.default, tree]
	array(
		// region Основные параметры
		"IBLOCK_TYPE"          =>  "",                          // Тип инфоблока : array ( 'catalog' => '[catalog] Каталоги', 'news' => '[news] Новости', 'offers' => '[offers] Торговые предложения', 'services' => '[services] Сервисы', 'references' => '[references] Справочники', )
		"IBLOCK_ID"            =>  "",                          // Инфоблок : array ( 1 => '[1] Новости', 2 => '[2] Одежда', 3 => '[3] Одежда (предложения)', )
		"SECTION_ID"           =>  "",  // ID раздела
		"SECTION_CODE"         =>  "",                          // Код раздела
		// endregion
		// region Источник данных
		"COUNT_ELEMENTS"       =>  "Y",                         // Показывать количество элементов в разделе
		"TOP_DEPTH"            =>  "2",                         // Максимальная отображаемая глубина разделов
		"SECTION_FIELDS"       =>  array(''),                   // Поля разделов : array ( 'ID' => 'ID', 'CODE' => 'Символьный код', 'XML_ID' => 'Внешний код', 'NAME' => 'Название', 'SORT' => 'Сортировка', 'DESCRIPTION' => 'Описание', 'PICTURE' => 'Изображение', 'DETAIL_PICTURE' => 'Детальная картинка', 'IBLOCK_TYPE_ID' => 'Тип информационного блока', 'IBLOCK_ID' => 'ID информационного блока', 'IBLOCK_CODE' => 'Символьный код информационного блока', 'IBLOCK_EXTERNAL_ID' => 'Внешний код информационного блока', 'DATE_CREATE' => 'Дата создания', 'CREATED_BY' => 'Кем создан (ID)', 'TIMESTAMP_X' => 'Дата изменения', 'MODIFIED_BY' => 'Кем изменен (ID)', )
		"SECTION_USER_FIELDS"  =>  array(''),                   // Свойства разделов
		// endregion
		// region Шаблоны ссылок
		"SECTION_URL"          =>  "",                          // URL, ведущий на страницу с содержимым раздела
		// endregion
		// region Настройки кеширования
		"CACHE_TYPE"           =>  "A",                         // Тип кеширования : array ( 'A' => 'Авто + Управляемое', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
		"CACHE_TIME"           =>  "36000000",                  // Время кеширования (сек.)
		"CACHE_NOTES"          =>  "",                          //
		"CACHE_GROUPS"         =>  "Y",                         // Учитывать права доступа
		// endregion
		// region Дополнительные настройки
		"ADD_SECTIONS_CHAIN"   =>  "Y",                         // Включать раздел в цепочку навигации
		// endregion
	)
);?>
<?php // Элементы раздела
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	".default",                            // [.default, board, links, list]
	array(        
		// region Основные параметры         
		"IBLOCK_TYPE"                      =>  "",                          // Тип инфоблока : array ( 'catalog' => '[catalog] Каталоги', 'news' => '[news] Новости', 'offers' => '[offers] Торговые предложения', 'services' => '[services] Сервисы', 'references' => '[references] Справочники', )         
		"IBLOCK_ID"                        =>  "",                          // Инфоблок : array ( 1 => '[1] Новости', 2 => '[2] Одежда', 3 => '[3] Одежда (предложения)', )         
		"SECTION_ID"                       =>  "",  // ID раздела
		"SECTION_CODE"                     =>  "",                          // Код раздела          
		// endregion         
		// region Источник данных         
		"SECTION_USER_FIELDS"              =>  array(''),                   // Свойства раздела          
		"ELEMENT_SORT_FIELD"               =>  "sort",                      // По какому полю сортируем элементы : array ( 'shows' => 'количество просмотров в среднем', 'sort' => 'индекс сортировки', 'timestamp_x' => 'дата изменения', 'name' => 'название', 'id' => 'ID', 'active_from' => 'дата активности (с)', 'active_to' => 'дата активности (по)', 'CATALOG_AVAILABLE' => 'доступность на складах', )         
		"ELEMENT_SORT_ORDER"               =>  "asc",                       // Порядок сортировки элементов : array ( 'asc' => 'по возрастанию', 'desc' => 'по убыванию', )         
		"ELEMENT_SORT_FIELD2"              =>  "id",                        // Поле для второй сортировки элементов : array ( 'shows' => 'количество просмотров в среднем', 'sort' => 'индекс сортировки', 'timestamp_x' => 'дата изменения', 'name' => 'название', 'id' => 'ID', 'active_from' => 'дата активности (с)', 'active_to' => 'дата активности (по)', 'CATALOG_AVAILABLE' => 'доступность на складах', )         
		"ELEMENT_SORT_ORDER2"              =>  "desc",                      // Порядок второй сортировки элементов : array ( 'asc' => 'по возрастанию', 'desc' => 'по убыванию', )         
		"FILTER_NAME"                      =>  "arrFilter",                 // Имя массива со значениями фильтра для фильтрации элементов          
		"INCLUDE_SUBSECTIONS"              =>  "Y",                         // Показывать элементы подразделов раздела : array ( 'Y' => 'всех подразделов', 'A' => 'активных подразделов', 'N' => 'не показывать', )         
		"SHOW_ALL_WO_SECTION"              =>  "N",                         // Показывать все элементы, если не указан раздел          
		"HIDE_NOT_AVAILABLE"               =>  "N",                         // Не отображать товары, которых нет на складах          
		// endregion         
		// region Внешний вид         
		"PAGE_ELEMENT_COUNT"               =>  "30",                        // Количество элементов на странице          
		"LINE_ELEMENT_COUNT"               =>  "3",                         // Количество элементов выводимых в одной строке таблицы          
		"PROPERTY_CODE"                    =>  array(''),                   // Свойства          
		"OFFERS_LIMIT"                     =>  "5",                         // Максимальное количество предложений для показа (0 - все)          
		// endregion         
		// region Шаблоны ссылок         
		"SECTION_URL"                      =>  "",                          // URL, ведущий на страницу с содержимым раздела          
		"DETAIL_URL"                       =>  "",                          // URL, ведущий на страницу с содержимым элемента раздела          
		"SECTION_ID_VARIABLE"              =>  "SECTION_ID",                // Название переменной, в которой передается код группы          
		// endregion         
		// region Управление режимом AJAX         
		"AJAX_MODE"                        =>  "N",                         // Включить режим AJAX          
		"AJAX_OPTION_JUMP"                 =>  "N",                         // Включить прокрутку к началу компонента          
		"AJAX_OPTION_STYLE"                =>  "Y",                         // Включить подгрузку стилей          
		"AJAX_OPTION_HISTORY"              =>  "N",                         // Включить эмуляцию навигации браузера          
		"AJAX_OPTION_ADDITIONAL"           =>  "",                          // Дополнительный идентификатор          
		// endregion         
		// region Настройки кеширования         
		"CACHE_TYPE"                       =>  "A",                         // Тип кеширования : array ( 'A' => 'Авто + Управляемое', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )         
		"CACHE_TIME"                       =>  "36000000",                  // Время кеширования (сек.)          
		"CACHE_NOTES"                      =>  "",                          //           
		"CACHE_GROUPS"                     =>  "Y",                         // Учитывать права доступа          
		// endregion         
		// region Дополнительные настройки         
		"SET_TITLE"                        =>  "Y",                         // Устанавливать заголовок страницы          
		"SET_BROWSER_TITLE"                =>  "Y",                         // Устанавливать заголовок окна браузера          
		"BROWSER_TITLE"                    =>  "-",                         // Установить заголовок окна браузера из свойства : array ( '-' => ' ', 'NAME' => 'Название', )         
		"SET_META_KEYWORDS"                =>  "Y",                         // Устанавливать ключевые слова страницы          
		"META_KEYWORDS"                    =>  "-",                         // Установить ключевые слова страницы из свойства : array ( '-' => ' ', )         
		"SET_META_DESCRIPTION"             =>  "Y",                         // Устанавливать описание страницы          
		"META_DESCRIPTION"                 =>  "-",                         // Установить описание страницы из свойства : array ( '-' => ' ', )         
		"ADD_SECTIONS_CHAIN"               =>  "N",                         // Включать раздел в цепочку навигации          
		"SET_STATUS_404"                   =>  "N",                         // Устанавливать статус 404, если не найдены элемент или раздел          
		"CACHE_FILTER"                     =>  "N",                         // Кешировать при установленном фильтре          
		// endregion         
		// region Настройки действий         
		"ACTION_VARIABLE"                  =>  "action",                    // Название переменной, в которой передается действие          
		"PRODUCT_ID_VARIABLE"              =>  "id",                        // Название переменной, в которой передается код товара для покупки          
		// endregion         
		// region Цены         
		"PRICE_CODE"                       =>  array(''),                   // Тип цены : array ( 'BASE' => '[BASE] Розничная цена', )         
		"USE_PRICE_COUNT"                  =>  "N",                         // Использовать вывод цен с диапазонами          
		"SHOW_PRICE_COUNT"                 =>  "1",                         // Выводить цены для количества          
		"PRICE_VAT_INCLUDE"                =>  "Y",                         // Включать НДС в цену          
		"CONVERT_CURRENCY"                 =>  "N",                         // Показывать цены в одной валюте          
		// endregion         
		// region Добавление в корзину         
		"BASKET_URL"                       =>  "/personal/basket.php",      // URL, ведущий на страницу с корзиной покупателя          
		"USE_PRODUCT_QUANTITY"             =>  "N",                         // Разрешить указание количества товара          
		"PRODUCT_QUANTITY_VARIABLE"        =>  "quantity",                  // Название переменной, в которой передается количество товара          
		"ADD_PROPERTIES_TO_BASKET"         =>  "Y",                         // Добавлять в корзину свойства товаров и предложений          
		"PRODUCT_PROPS_VARIABLE"           =>  "prop",                      // Название переменной, в которой передаются характеристики товара          
		"PARTIAL_PRODUCT_PROPERTIES"       =>  "N",                         // Разрешить добавлять в корзину товары, у которых заполнены не все характеристики          
		"PRODUCT_PROPERTIES"               =>  array(''),                   // Характеристики товара          
		// endregion         
		// region Сравнение товаров         
		"DISPLAY_COMPARE"                  =>  "N",                         // Разрешить сравнение товаров          
		// endregion         
		// region Настройки постраничной навигации         
		"PAGER_TEMPLATE"                   =>  ".default",                  // Шаблон постраничной навигации : array ( '.default' => '.default (Встроенный шаблон)', 'arrows_adm' => 'arrows_adm (Встроенный шаблон)', 'modern' => 'modern (Встроенный шаблон)', 'orange' => 'orange (Встроенный шаблон)', 'visual' => 'visual (Встроенный шаблон)', 'blog' => 'blog (Общий шаблон)', 'forum' => 'forum (Общий шаблон)', 'arrows' => 'arrows (Новый адаптивный шаблон интернет-магазина)', )         
		"DISPLAY_TOP_PAGER"                =>  "N",                         // Выводить над списком          
		"DISPLAY_BOTTOM_PAGER"             =>  "Y",                         // Выводить под списком          
		"PAGER_TITLE"                      =>  "Товары",                    // Название категорий          
		"PAGER_SHOW_ALWAYS"                =>  "N",                         // Выводить всегда          
		"PAGER_DESC_NUMBERING"             =>  "N",                         // Использовать обратную навигацию          
		"PAGER_DESC_NUMBERING_CACHE_TIME"  =>  "36000",                     // Время кеширования страниц для обратной навигации          
		"PAGER_SHOW_ALL"                   =>  "N",                         // Показывать ссылку 'Все'          
		// endregion 
	)
);?>

    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>