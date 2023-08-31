<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();
foreach ($arResult['ITEMS'] as $k => $item){
    $idsitem[]=$item['ID'];
    $res = CIBlockElement::GetProperty(4,$item['ID'],Array("sort"=>"asc"), Array('rating'));
    while($ar_props = $res->Fetch()){
        $znach[$item['ID']][$ar_props['CODE']] =$ar_props['VALUE'];
        $arResult['ITEMS'][$k]['myrating']= $ar_props['VALUE'];

    }

};
//$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM");
//$res = CIBlockElement::GetList(
//        Array(),
//        Array(
//            1418,
//            1410
//        ),
//        false,
//        Array("nPageSize"=>50),
//        array());
//while($ob = $res->GetNextElement())
//{
//    $arFields[] = $ob->GetFields();
//}

?>


<pre style="text-align: left">111

<?//print_r($arResult['ITEMS'][0]);;?>
<?//print_r($arResult['ITEMS']);;?>
</pre>

<?//выборка ID элементов
// for($i=0; $i<count($arResult['ITEMS']);$i++)
//    $arflt[]=($arResult['ITEMS'][$i]['ID']);
//$GLOBALS['arrFilter'] = array('ID' => $arflt);
//print_r($arflt);
//?>

<? //var_dump($arResult['ITEMS'][0])?>

<?php
//$APPLICATION->IncludeComponent(
//    'bitrix:iblock.vote',
//    'bootstrap_v4',
//    array(
//        'CUSTOM_SITE_ID' => $arParams['CUSTOM_SITE_ID'] ?? null,
//        'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
//        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
//        'ELEMENT_ID' => $arResult['ID'],
//        'ELEMENT_CODE' => '',
//        'MAX_VOTE' => '5',
//        'VOTE_NAMES' => array('1', '2', '3', '4', '5'),
//        'SET_STATUS_404' => 'N',
//        'DISPLAY_AS_RATING' => $arParams['VOTE_DISPLAY_AS_RATING'],
//        'CACHE_TYPE' => $arParams['CACHE_TYPE'],
//        'CACHE_TIME' => $arParams['CACHE_TIME']
//    ),
//    $component,
//    array('HIDE_ICONS' => 'Y')
//);
?>