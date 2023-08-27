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
<div class="galery-items">
    <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
        <?= $arResult["NAV_STRING"] ?><br/>
    <? endif; ?>

    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="galery-foto-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <a href="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" class="link_img_detail">
                <img
                        class="preview_picture"
                        border="0"
                        src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                        width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                        title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                        style="float:left"
                />

            </a>
            <div class="img-after">
                <svg width="168" height="168" viewBox="0 0 168 168" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="look" d="M124.443 71.211C124.443 82.9532 120.63 93.8 114.208 102.6L146.601 135.013C149.8 138.211 149.8 143.404 146.601 146.602C143.403 149.799 138.209 149.799 135.01 146.602L102.617 114.189C93.8148 120.636 82.9659 124.422 71.2213 124.422C41.8217 124.422 18 100.605 18 71.211C18 41.817 41.8217 18 71.2213 18C100.621 18 124.443 41.817 124.443 71.211ZM71.2213 108.049C76.06 108.049 80.8512 107.096 85.3215 105.245C89.7918 103.394 93.8537 100.68 97.2751 97.2596C100.697 93.8388 103.411 89.7778 105.262 85.3084C107.114 80.8389 108.067 76.0486 108.067 71.211C108.067 66.3733 107.114 61.583 105.262 57.1135C103.411 52.6441 100.697 48.5831 97.2751 45.1623C93.8537 41.7415 89.7918 39.0281 85.3215 37.1768C80.8512 35.3255 76.06 34.3726 71.2213 34.3726C66.3827 34.3726 61.5915 35.3255 57.1212 37.1768C52.6509 39.0281 48.589 41.7415 45.1676 45.1623C41.7462 48.5831 39.0322 52.6441 37.1805 57.1135C35.3288 61.583 34.3758 66.3733 34.3758 71.211C34.3758 76.0486 35.3288 80.8389 37.1805 85.3084C39.0322 89.7778 41.7462 93.8388 45.1676 97.2596C48.589 100.68 52.6509 103.394 57.1212 105.245C61.5915 107.096 66.3827 108.049 71.2213 108.049Z"
                          fill="#59AB6E" fill-opacity="0.77"/>
                </svg>
            </div>
        </div>
    <? endforeach; ?>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <br/><?= $arResult["NAV_STRING"] ?>
    <? endif; ?>
</div>
