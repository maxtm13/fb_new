<?php
global $arParams, $resItems;
$arResult = $GLOBALS['resItems'];
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
?>

<?

$res = CIBlockElement::GetProperty($arParams['IBLOCK_ID'], $arResult['ID'], array("sort" => "asc"), array());  //"CODE"=> "ATT_adress"
//    $VALUES= array();
while ($ob = $res->GetNext()) {
    $VALUES[$ob['CODE']][] = $ob['NAME'];
    $VALUES[$ob['CODE']][] = $ob['VALUE'];
}
?>


<?php
//    foreach ($VALUES as $prop=>$val_prop) {
//        print_r($prop['ATT_Phone'] );
//        foreach ($val_prop as $key => $newValue) {
//
//            $varprop[$key][] = $newValue;
//        }
//
//       print_r('</br>')
//    }
//print_r($VALUES["ATT_site"]);
//echo '***********<br>';
//foreach ($VALUES as $ind => $val):
////    print_r($ind);
//    for ($i = 0; $i < count($val);$i++) {
////        print_r($VALUES[$ind][$i]);
//        }
//endforeach;
//print_r($arResult)
    ?>
<div class="news-item" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
<?php if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["PREVIEW_PICTURE"])): ?>
    <?php if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arResult["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
        <a href="<?= $arResult["DETAIL_PAGE_URL"] ?>"><img
                    class="preview_picture"
                    border="0"
                    src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>"
                    width="<?= $arResult["PREVIEW_PICTURE"]["WIDTH"] ?>"
                    height="<?= $arResult["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                    alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>"
                    title="<?= $arResult["PREVIEW_PICTURE"]["TITLE"] ?>"
                    style="float:left"
            /></a>
    <?php else: ?>
        <img
                class="preview_picture"
                border="0"
                src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>"
                width="<?= $arResult["PREVIEW_PICTURE"]["WIDTH"] ?>"
                height="<?= $arResult["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>"
                title="<?= $arResult["PREVIEW_PICTURE"]["TITLE"] ?>"
                style="float:left"
        />
    <?php endif; ?>
<?php endif ?>
<?php if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
    <span class="news-date-time"><?php echo $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
<?php endif ?>
<?php if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
    <?php if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arResult["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
        <p><b><?php echo $arResult["NAME"] ?></b></p><br/>
    <?php else: ?>
        <b><?php echo $arResult["NAME"] ?></b><br/>
    <?php endif; ?>
<?php endif; ?>
<?php if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arResult["PREVIEW_TEXT"]): ?>
    <?php echo $arResult["PREVIEW_TEXT"]; ?>
<?php endif; ?>
<?php if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["PREVIEW_PICTURE"])): ?>
    <div style="clear:both"></div>
<?php endif ?>
<?php foreach ($arResult["FIELDS"] as $code => $value): ?>
    <small>
        111 <?=$code?> <?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
    </small><br/>
<?php endforeach; ?>
<?php foreach ($VALUES as $ind => $val):?>
    <? switch ($ind){
        case 'ATT_Phone': ?>
            <div class="<?=$ind;?>"><?=($VALUES[$ind][0].': ');
                for ($i = 1; $i <= count($val);$i+=2)
                {?>
                   <a href="tel:<?=preg_replace('/[^0-9]/', '', ($VALUES[$ind][$i]));?>" class="tel-ink"> <?=($VALUES[$ind][$i]);?></a>
                    <?if (count($val)>2) echo('; ');
                };
                    ?>
                    </div><?
                break;
        case 'ATT_site':?>
                <?if (!$VALUES[$ind][1]==''){?>
                <div class="<?=$ind;?>">
                <?=($VALUES[$ind][0].': ');
                for ($i = 1; $i <= count($val);$i+=2)
                {?>
                   <a href="<?=($VALUES[$ind][$i]);?>" class="site-link"> <?=($VALUES[$ind][$i]);?></a>
                    <?if (count($val)>2) echo('; ');
                };
                    ?>
                    </div><?}
                break;
        case 'ATT_email':?>
            <?if (!$VALUES[$ind][1]==''){?>
                <div class="<?=$ind;?>"><?=($VALUES[$ind][0].': ');
                    for ($i = 1; $i <= count($val);$i+=2)
                    {?>
                       <a href="mailto:<?=($VALUES[$ind][$i]);?>" class="email-ink"> <?=($VALUES[$ind][$i]);?></a>
                        <?if (count($val)>2) echo('; ');
                    };?>
                </div><?}
            break;
        default:?>
                <div class="<?=$ind;?>">
                <?=($VALUES[$ind][0].': ');
                for ($i = 1; $i <= count($val);$i+=2) {
                    echo($VALUES[$ind][$i]);
                    if (count($val)>2) echo('; ');
                }?>
                </div>



   <? }?>

<?php
endforeach;?>
<?php //foreach ($arResult["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
<!--    <small>-->
<!--        --><?//= $arProperty["NAME"] ?><!--:&nbsp;-->
<!--        --><?php //if (is_array($arProperty["DISPLAY_VALUE"])): ?>
<!--            --><?//= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
<!--        --><?php //else: ?>
<!--            --><?//= $arProperty["DISPLAY_VALUE"]; ?>
<!--        --><?php //endif ?>
<!--    </small><br/>-->
<?php //endforeach; ?>
    </div>
        <?php
        unset($VALUES);
        ?>