<?//pre($arResult['ITEM']['IBLOCK_SECTION_ID']);



if(CModule::IncludeModule("iblock") && ($arIBlockSection = GetIBlockSection($arResult['ITEM']['IBLOCK_SECTION_ID'])))
{
    $arResult['ITEM']['SECTION_NAME']= $arIBlockSection['NAME'];
    $arResult['ITEM']['SECTION_DESCRIPTION']= $arIBlockSection['DESCRIPTION'];
}
else
    echo ShowError("Раздел не найден");