<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "����������������� ���������� ��������� ������������ � ����������� ���������� ���������");
$APPLICATION->SetPageProperty("description", "��������������� ����� ���������� �������� ������������ �� ����� ���������� ����������������� ���������� ��������� ������������ � (���) ����������������� ���������� ����������� ���������� ���������");
$APPLICATION->SetPageProperty("keywords", "����������, ������, �����, ������������ ��������-�������, ���������� ������");
$APPLICATION->SetTitle("����������������� ���������� ��������");
?><div class="container mainarticle">
 <br>
	<h2 style="text-align: center;">����������������� ���������� ��������� ������������ � ����������� ���������� ���������</h2>
	<div class="article_paragrph">
 <img alt="���������� ��������� ������������" src="/local/templates/main2018_rebuild/img/img_main.jpg" class="img_main_article" title="���������� ��������� ������������ ">
		<div class="text_article">
			 ������� ����������������� ���������� � ������ ������������ ��������-������� ������������ � ����������� ���������� ��������� ���� ����������� ����������� �����������. ���������� ��������� ������������ � ����������� ���������� ��������� �������� ������������ ������ ����������������� ������������ �� ���������� �� � ������������ ������ ������������ ��������� � ����� ������������ � ���������� �������� ������������ �������������.<br>
		</div>
	</div>
	<ul>
		<li><strong>����������������� ���������� ��������� ������������ (���������� ��������-������� ������������)</strong>. ���������� �������� ������������, ������ � ������� ������� ����������� �� ������������ ���������������� �� (����������� �����������) � ������������ ������� �� ��������������. ������������� ���������� ���������� ��������� ������������ ���������� ��� ��������� ���������� �� ������������� � ����� ������� � ������������. ��������� ��.&nbsp;<a href="http://ekcpertiza.ru/services/ekspertiza-proektnoy-dokumentatsii/">http://ekcpertiza.ru/services/ekspertiza-proektnoy-dokumentatsii/</a></li>
		<li> <strong>���������� ������� ������������</strong> ��� ����������� �������� ������. ���������� ���������� ����� (������� ������������) ��������� ��������� ������������� ���������� ���������������� ������������ � ��������� ������� ������������ ��������.</li>
		<li> <strong>����������������� ���������� ����������� ���������� ���������</strong>. ���������� ���������� ��������� - ��������� ����������� ��� ���������� ��������� ������������. �������, �������� ���������� � ���������� ����������� ���������� ��������� ������������ ��������� ��������� ������� ��� ����������� ������������� ��������� � ��������. </li>
		<li><b>���������� ���������� ��������� ������������</b>&nbsp;� <b>���������� ���������� ����������� ���������� ��������� </b>����������� �������� ������ ������������� � <b>��� ����</b>.</li>
		<li><b>���������� ������ ��������� ������������</b> ����������� ������ ����������, �������������� ��������� ��.</li>
		<li>��. ����� � ������� "������"&nbsp;<a href="http://ekcpertiza.ru/services/">http://ekcpertiza.ru/services/</a></li>
	</ul>
	 <!--<section class="projects animate-block js-animate-block section-bottom-25">--> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc_ekspert",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "inc_ekspert.php"
	)
);?> <section class="projects animate-block js-animate-block">
	<div class="projects__inner">
		<h2 class="section-title section-title--index text-uppercase">
		����������� ������� </h2>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"projectsonmain2_new",
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
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "projectsonmain2_new",
		"DETAIL_URL" => "/projects/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "news",
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
		"PAGER_TITLE" => "�������",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
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
);?> <a href="/projects/" class="mt-0 btn btn-sm btn-curious-orange-variant-1 min-width-160">��� �������</a> </section>
	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc_feedback.php",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/inc_feedback.php"
	)
);?>
	<div class="container mainarticle">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<h2 class="ekcpertiza">��������������� ����������</h2>
				<ul>
					<li>����������� ��������� �� 145 �������������.</li>
					<li>��� ������ ���������� ��������� ������ ����� ��������� ������������.</li>
					<li>���� ���������� ��������������� ���������� 45-60 ������� ����. ����� ���������� �� ��������.</li>
					<li>�������� ���������.</li>
					<li>������������ ������������ - 30 ������� ����. ����������� � ����, �� ������� ���������� ������ ������ �����������.</li>
					<li>�����������, ���������� ������������� �� �������� �����, �� ������������ �� ������� � ������������ ������.</li>
					<li>������ ���� ��������������, ���� �������������� ����������.</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6">
				<h2 class="negos_ekcpertiza">����������������� ����������</h2>
				<ul>
					<li>������������������� ���������.</li>
					<li>��� ������ ���������� ��������� ������ ������ ������������.</li>
					<li>���� ���������� � �� ����� 15 ������� ����, ���������� ������ ����������� ������.</li>
					<li>������������ �� ���������� ���������.</li>
					<li>����������� ��������� � ������� 3-7 ���� ��������� �� ������������, ���� �� ��������. ����������� � ������� ��� ����.</li>
					<li>���� ����������� ������������ � ����� ������ ��������������� �� �������� � �������� ����������� �����.</li>
					<li>������ �������������� �������������� ����������.</li>
				</ul>
			</div>
		</div>
	</div>
 <section class="press animate-block js-animate-block animate-block--active" id="pressroom">
	<div class="center-block">
		<h2 class="section-title section-title--index text-uppercase">
		������� </h2>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"newsonmain1_with_img",
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
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "newsonmain1_update",
		"DETAIL_URL" => "/news/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "�������",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
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
);?>
	<div class="center-block">
		<div class="element-wrap">
 <a href="/news/" class="btn btn-sm btn-curious-orange-variant-1 min-width-160">��� �������</a>
		</div>
	</div>
 </section>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>