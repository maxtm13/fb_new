<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Где купить");
?>

<h2 class="main-sections-title">КАРТА ТОЧЕК ПРОДАЖ</h2>
<div class="map">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab96d2c8abf7383280ba73e6cb4cc34529fbdaf922aced373a534e277dac32bd6&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
</div>



<div class="contacts">
    <div class="contacts__title main-sections-title">Контакты</div>
<?$APPLICATION->IncludeComponent(
	"dev2fun:section.element.group", 
	"element_sections", 
	array(
		"COMPONENT_TEMPLATE" => "element_sections",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "9",
		"SECTION_DEPTH" => "1",
		"SECTION_COUNT" => "60",
		"SECTION_SORT_BY1" => "SORT",
		"SECTION_SORT_ORDER1" => "ASC",
		"SECTION_SORT_BY2" => "NAME",
		"SECTION_SORT_ORDER2" => "ASC",
		"SECTION_FILTER_NAME" => "",
		"SECTION_PROPERTY_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"SECTION_DETAIL_URL" => "",
		"SECTION_CHECK_EMPTY" => "N",
		"SECTION_CNT_ELEMENTS" => "Y",
		"SECTION_CHILD" => "Y",
		"DISPLAY_SECTION_PICTURE" => "Y",
		"PARENT_SECTION" => array(
		),
		"PARENT_SECTION_CODE" => array(
		),
		"SECTION_PREVIEW_TRUNCATE_LEN" => "",
		"NEWS_SHOW_SECTION" => "Y",
		"NEWS_COUNT" => "40",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"TEMP_OUTPUT_SECTIONS" => "subSection.php",
		"TEMP_OUTPUT_ELEMETS" => "element.php",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N"
	),
	false
);?>
</div>
    <script>
        $(document).ready(function () {
            let acc = document.getElementsByClassName("subSection");
            let i;
            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    /* Toggle between hiding and showing the active panel */
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        });
    </script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>