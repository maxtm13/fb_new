<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>



    <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
        <?= $arResult["NAV_STRING"] ?>
    <? endif; ?>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="slider" style="background-image: url('<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>')">
            <div class="slider-wrapper">
                <div class="wrapper_content">
                    <div class="wrapper_content-item">
                        <div class="wrapper_content-title"><?= $arItem["NAME"] ?></div>
                        <div class="wrapper_content-text"><?= $arItem["PREVIEW_TEXT"] ?>
                        </div>
                    </div>
                    <div class="wrapper-btn">
                        <a class="btn-link"
                           href="<?= $arItem["PROPERTIES"]["ATT_BTN_LINK"]["VALUE"] ?>"><?= $arItem["PROPERTIES"]["ATT_BTN_NAME"]["VALUE"] ?></a>
                    </div>
                    <div class="wrapper_content-feachers">
                        <div class="feacher-item">
                            <div class="feacher-item-img"><img src="<?= SITE_TEMPLATE_PATH ?>/img/Vector2.png"
                                                               alt="like"></div>
                            <div class="feacher-item-text">Высокая прочность</div>
                        </div>
                        <div class="feacher-item">
                            <div class="feacher-item-img"><img src="<?= SITE_TEMPLATE_PATH ?>/img/Vector.png"
                                                               alt="like"></div>
                            <div class="feacher-item-text">Экологичность</div>
                        </div>
                        <div class="feacher-item">
                            <div class="feacher-item-img"><img src="<?= SITE_TEMPLATE_PATH ?>/img/icon _Money Bag_.png"
                                                               alt="like"></div>
                            <div class="feacher-item-text">Доступная стоимость</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <? endforeach; ?>
</div>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <?= $arResult["NAV_STRING"] ?>
<? endif; ?>
