<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();
foreach ($arResult['ITEMS'] as $k => $item){
    $idsitem[]=$item['ID'];
    $res = CIBlockElement::GetProperty(4,$item['ID'],Array("sort"=>"asc"), Array());
    while($ar_props = $res->Fetch()){


        $znach[$item['ID']][$ar_props['CODE']] =$ar_props['VALUE'];
        if (($ar_props['CODE']=='vote_count') || ($ar_props['CODE']=='rating'))
        $arResult['ITEMS'][$k][$ar_props['CODE']]= $ar_props['VALUE'];


    }

};


?>


