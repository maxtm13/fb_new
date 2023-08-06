<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


</div>

<div class="footer">

    <div class="container">
        <div class="footer__items row">
            <div class="footer__item col-xl-5">
                <div class="footer__item-title logo">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/logo_footer.php"
                        )
                    ); ?>
                </div>
                <div class="footer__item-content adress">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/adress.php"
                        )
                    ); ?>
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
            </div>
            <div class="footer__item col-xl-4">
                <div class="footer__item-title">Каталог</div>
                <div class="footer__item-content">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "bottom_menu",
                        array(
                            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_NOTES" => "",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COMPONENT_TEMPLATE" => "bottom_menu",
                            "COUNT_ELEMENTS" => "N",
                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                            "FILTER_NAME" => "sectionsFilter",
                            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                            "IBLOCK_ID" => "4",
                            "IBLOCK_TYPE" => "catalog",
                            "SECTION_CODE" => "",
                            "SECTION_FIELDS" => array(
                                0 => "DESCRIPTION",
                                1 => "",
                            ),
                            "SECTION_ID" => "",
                            "SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
                            "SECTION_USER_FIELDS" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SHOW_PARENT_NAME" => "Y",
                            "TOP_DEPTH" => "1",
                            "VIEW_MODE" => "TEXT",
                            "HIDE_SECTION_NAME" => "N"
                        ),
                        false
                    ); ?> </section>
                </div>
            </div>
            <div class="footer__item col-xl-3">
                <div class="footer__item-title">Информация</div>
                <div class="footer__item-content">
                    <? $APPLICATION->IncludeComponent(
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
                            "ROOT_MENU_TYPE" => "bottom2",
                            "USE_EXT" => "N"
                        ),
                        false
                    ); ?>
                </div>
            </div>


        </div>
        <div class="footer__bottom">
            <div class="row">
                <div class="col-xl-5"><? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/social-link.php"
                        )
                    ); ?></div>
                <div class="col-xl-4" style="font-size: 16px;"><a href="#"></a>Политика конфиденциальности</div>
                <div class="col-xl-3" style="font-size: 16px;"> <? echo date("Y") ?>© Все права защищены</div>
            </div>
        </div>

    </div>
    <div class="footer__bottom-wrapper ">
        <div class="footer__bottom-wrapper-text container">
            Разработка и поддержка сайтов: <a href="https://top-site.info" class="footer__wrapper-link">top-site.info</a>
        </div>
    </div>

</div>

</body>
</html>