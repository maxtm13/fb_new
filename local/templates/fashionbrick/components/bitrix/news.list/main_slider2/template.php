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
<!--<pre>-->
<?php
//print_r($arResult["ITEMS"]);
//?>
<!--</pre>-->
<div class="main_slider" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/IMG_0586_1.jpg')">
    <div class="main_slider-wrapper">
        <div class="wrapper_content">
            <div class="wrapper_content-title">Построй свою мечту вместе с нами!</div>
            <div class="wrapper_content-text">Предприятие по производству облицовочного кирпича с уникальными фактурами
                и цветовой гаммой, надёжный и долговечный
            </div>
            <div class="wrapper-btn" id="gradient-button-transition">
                <a class="btn-link" href="#">Перейти в каталог</a>
            </div>
            <div class="wrapper_content-feachers">
                <div class="feacher-item">
                    <div class="feacher-item-img"><img src="<?= SITE_TEMPLATE_PATH ?>/img/Vector2.png" alt="like"></div>
                    <div class="feacher-item-text">Высокая прочность</div>
                </div>
                <div class="feacher-item">
                    <div class="feacher-item-img"><img src="<?= SITE_TEMPLATE_PATH ?>/img/Vector.png" alt="like"></div>
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


<!--<div class="news-list">-->
<? //if($arParams["DISPLAY_TOP_PAGER"]):?>
<!--	--><? //=$arResult["NAV_STRING"]?><!--<br />-->
<? //endif;?>
<? //foreach($arResult["ITEMS"] as $arItem):?>
<!--	--><? //
//	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
//	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
//	?>
<!--	<p class="news-item" id="--><? //=$this->GetEditAreaId($arItem['ID']);?><!--">-->
<!--		--><? //if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--			--><? //if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--				<a href="--><? //=$arItem["DETAIL_PAGE_URL"]?><!--"><img-->
<!--						class="preview_picture"-->
<!--						border="0"-->
<!--						src="--><? //=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--						width="--><? //=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--						height="--><? //=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--						alt="--><? //=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--						title="--><? //=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--						style="float:left"-->
<!--						/></a>-->
<!--			--><? //else:?>
<!--				<img-->
<!--					class="preview_picture"-->
<!--					border="0"-->
<!--					src="--><? //=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--					width="--><? //=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--					height="--><? //=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--					alt="--><? //=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--					title="--><? //=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--					style="float:left"-->
<!--					/>-->
<!--			--><? //endif;?>
<!--		--><? //endif?>
<!--		--><? //if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
<!--			<span class="news-date-time">--><? //echo $arItem["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
<!--		--><? //endif?>
<!--		--><? //if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
<!--			--><? //if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--				<a href="--><? //echo $arItem["DETAIL_PAGE_URL"]?><!--"><b>--><? //echo $arItem["NAME"]?><!--</b></a><br />-->
<!--			--><? //else:?>
<!--				<b>--><? //echo $arItem["NAME"]?><!--</b><br />-->
<!--			--><? //endif;?>
<!--		--><? //endif;?>
<!--		--><? //if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
<!--			--><? //echo $arItem["PREVIEW_TEXT"];?>
<!--		--><? //endif;?>
<!--		--><? //if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--			<div style="clear:both"></div>-->
<!--		--><? //endif?>
<!--		--><? //foreach($arItem["FIELDS"] as $code=>$value):?>
<!--			<small>-->
<!--			--><? //=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><? //=$value;?>
<!--			</small><br />-->
<!--		--><? //endforeach;?>
<!--		--><? //foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
<!--			<small>-->
<!--			--><? //=$arProperty["NAME"]?><!--:&nbsp;-->
<!--			--><? //if(is_array($arProperty["DISPLAY_VALUE"])):?>
<!--				--><? //=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
<!--			--><? //else:?>
<!--				--><? //=$arProperty["DISPLAY_VALUE"];?>
<!--			--><? //endif?>
<!--			</small><br />-->
<!--		--><? //endforeach;?>
<!--	</p>-->
<? //endforeach;?>
<? //if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<!--	<br />--><? //=$arResult["NAV_STRING"]?>
<? //endif;?>
<!--</div>-->
