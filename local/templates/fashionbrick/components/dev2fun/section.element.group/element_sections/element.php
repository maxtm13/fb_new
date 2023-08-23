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
    $VALUES[$ob['NAME']][] = [$ob['CODE'] => $ob['VALUE']];
}
//    foreach ($VALUES as $prop=>$val_prop) {
//        print_r($prop);
//        foreach ($val_prop as $key => $newValue) {
//
//            $varprop[$key][] = $newValue;
//        }
//
//       print_r('</br>')
//    }
//print_r($VALUES)
foreach ($VALUES as $key=>$props){

    print_r($props);
//    foreach ($props as $item);{
//        foreach ($item as $id=>$it){
//
//           echo $key." :";
//           echo $id." :";
//
//           echo $it."";
//       }
//       echo"</br>";

//    }

    }
//    for ($i=0; $i<=count($props); $i++){
//        print_r($props[$i]);
//        print_r("</br>");
//
//    }


//print_r($arrFinal);
?>

<?php
unset($VALUES);
?>