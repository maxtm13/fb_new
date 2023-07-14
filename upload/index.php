<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "негосударственная экспертиза проектной документации и результатов инженерных изысканий");
$APPLICATION->SetPageProperty("description", "Межрегиональный Центр Экспертизы проектов аккредитован на право проведения негосударственной экспертизы проектной документации и (или) негосударственной экспертизы результатов инженерных изысканий");
$APPLICATION->SetPageProperty("keywords", "экспертиза, проект, смета, документация проектно-сметная, экспертная оценка");
$APPLICATION->SetTitle("Негосударственная экспертиза проектов");
?><div class="container mainarticle">
 <br>
	<h2 style="text-align: center;">Негосударственная экспертиза проектной документации и результатов инженерных изысканий</h2>
	<div class="article_paragrph">
 <img alt="Экспертиза проектной документации" src="/local/templates/main2018_rebuild/img/img_main.jpg" class="img_main_article" title="Экспертиза проектной документации ">
		<div class="text_article">
			 Предмет негосударственной экспертизы – оценка соответствия проектно-сметной документации и результатов инженерных изысканий всем требованиям технических регламентов. Экспертиза проектной документации и результатов инженерных изысканий является неотъемлемой частью градостроительной деятельности на территории РФ и обеспечивает защиту общественных интересов в плане безопасности и надежности объектов капитального строительства.<br>
		</div>
	</div>
	<ul>
		<li><strong>Негосударственная Экспертиза проектной документации (экспертиза проектно-сметной документации)</strong>. Экспертизе подлежит документация, данные и расчёты которой проверяются на соответствие законодательству РФ (техническим регламентам) и техническому заданию на проектирование. Положительное заключение экспертизы проектной документации необходимо при получении разрешения на строительство и сдачи объекта в эксплуатацию. Подробнее см.&nbsp;<a href="http://ekcpertiza.ru/services/ekspertiza-proektnoy-dokumentatsii/">http://ekcpertiza.ru/services/ekspertiza-proektnoy-dokumentatsii/</a></li>
		<li> <strong>Экспертиза сметной документации</strong> даёт возможность контроля затрат. Проведение экспертизы сметы (сметной документации) позволяет заказчику строительства определить добросовестность исполнителей и правильно выбрать Строительную компанию.</li>
		<li> <strong>Негосударственная экспертиза результатов инженерных изысканий</strong>. Проведение инженерных изысканий - важнейшее мероприятие для разработки проектной документации. Полнота, качество проведения и подготовка результатов инженерных изысканий обеспечивают грамотные проектные решения без последующих дорогостоящих изменений в проектах. </li>
		<li><b>Заключение экспертизы проектной документации</b>&nbsp;и <b>заключение экспертизы результатов инженерных изысканий </b>обязательно вносится нашими специалистами в <b>ГИС ЕГРЗ</b>.</li>
		<li><b>Экспертная оценка проектной документации</b> выполняется нашими экспертами, аттестованными Минстроем РФ.</li>
		<li>См. также в разделе "УСЛУГИ"&nbsp;<a href="http://ekcpertiza.ru/services/">http://ekcpertiza.ru/services/</a></li>
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
		Выполненные проекты </h2>
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
		"PAGER_TITLE" => "Проекты",
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
);?> <a href="/projects/" class="mt-0 btn btn-sm btn-curious-orange-variant-1 min-width-160">Все проекты</a> </section>
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
				<h2 class="ekcpertiza">Государственная экспертиза</h2>
				<ul>
					<li>Нормативная стоимость по 145 Постановлению.</li>
					<li>Для начала экспертизы требуется полный пакет проектной документации.</li>
					<li>Срок проведения государственной экспертизы 45-60 рабочих дней. Сроки обсуждению не подлежат.</li>
					<li>Перечень замечаний.</li>
					<li>Рассмотрение документации - 30 рабочих дней. Исправление в срок, за который невозможно успеть внести исправления.</li>
					<li>Специалисты, работающие исключительно на окладной части, не мотивированы на быструю и качественную работу.</li>
					<li>Выдача либо положительного, либо отрицательного заключения.</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6">
				<h2 class="negos_ekcpertiza">Негосударственная экспертиза</h2>
				<ul>
					<li>Конкурентоспособная стоимость.</li>
					<li>Для начала экспертизы требуется только раздел документации.</li>
					<li>Срок проведения – не более 15 рабочих дней, существует услуга «сокращение сроков».</li>
					<li>Рекомендации по устранению замечаний.</li>
					<li>Выставление замечаний в течение 3-7 дней полностью по документации, либо по разделам. Исправление в удобный вам срок.</li>
					<li>Наши специалисты мотивированы и несут прямую ответственность за скорость и качество оказываемых услуг.</li>
					<li>Выдача гарантированно положительного заключения.</li>
				</ul>
			</div>
		</div>
	</div>
 <section class="press animate-block js-animate-block animate-block--active" id="pressroom">
	<div class="center-block">
		<h2 class="section-title section-title--index text-uppercase">
		Новости </h2>
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
		"PAGER_TITLE" => "Новости",
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
 <a href="/news/" class="btn btn-sm btn-curious-orange-variant-1 min-width-160">Все новости</a>
		</div>
	</div>
 </section>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>