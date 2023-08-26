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



<div class="sale-item" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">

  <div class="sale-name" ><?=($arResult["FIELDS"]['NAME'])?></div>
<?php foreach ($arResult["FIELDS"] as $code => $value): ?>
<? if ($code!='NAME'):?>
    <div class="<?=$code?>"> <?= $value; ?></div>
<?php endif ?>
<?php endforeach; ?>
<?php foreach ($VALUES as $ind => $val):?>
    <? switch ($ind){
        case 'ATT_Phone': ?>
            <div class="<?=$ind;?>"> <?if ($VALUES[$ind][1]!="") echo('<i class="fa fa-phone"></i>')?>
            <?//=($VALUES[$ind][0].': ');
                for ($i = 1; $i <= count($val);$i+=2)
                { ?>

                   <a href="tel:<?=preg_replace('/[^0-9]/', '', ($VALUES[$ind][$i]));?>" class="tel-ink"> <?=($VALUES[$ind][$i]);?></a>
                    <?
                };
                    ?>
                    </div><?
                break;
        case 'ATT_site':?>
                <?if (!$VALUES[$ind][1]==''){?>
                <div class="<?=$ind;?>">
                <i class="fa fa-laptop"></i>
<!--                --><?//=($VALUES[$ind][0].': ');
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
                <div class="<?=$ind;?>"> <i class="fa fa-envelope-o"></i>
                <?//=($VALUES[$ind][0].': ');
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