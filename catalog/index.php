<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "белье, комплект, постельный, иваново, купить");
$APPLICATION->SetPageProperty("title", "Купить комплект постельного белья Иваново оптом");
$APPLICATION->SetPageProperty("keywords", "белье, комплект, постельный, иваново, купить");
$APPLICATION->SetPageProperty("description", "Только качественный постельный комплект белье. На 100% качественные изделия. Бесплатный звонок сотруднику. Мы - ваш лучший Партнер! Иваново, ул. Ермака, д.49 ТК \"Текстильщик\", офис.192А +7930 358 7883.  Количество товара ограничено");
$APPLICATION->SetTitle("Комплекты постельного белья");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"RESTART" => "N",
		"NO_WORD_LOGIC" => "N",
		"CHECK_DATES" => "N",
		"USE_TITLE_RANK" => "N",
		"DEFAULT_SORT" => "rank",
		"FILTER_NAME" => "",
		"arrFILTER" => array(),
		"SHOW_WHERE" => "Y",
		"arrWHERE" => array(),
		"SHOW_WHEN" => "N",
		"PAGE_RESULT_COUNT" => "50",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Комплекты постельного белья",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => ""
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"catalog",
	Array(
		"AJAX_MODE" => "N",
		"SEF_MODE" => "Y",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "1",
		"USE_FILTER" => "N",
		"USE_COMPARE" => "N",
		"SHOW_TOP_ELEMENTS" => "N",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"PAGE_ELEMENT_COUNT" => "9999",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"LIST_PROPERTY_CODE" => array("price","colors"),
		"INCLUDE_SUBSECTIONS" => "N",
		"LIST_META_KEYWORDS" => "UF_KEYWORDS",
		"LIST_META_DESCRIPTION" => "UF_DESCRIPTION",
		"LIST_BROWSER_TITLE" => "UF_TITLE",
		"DETAIL_PROPERTY_CODE" => array(),
		"DETAIL_META_KEYWORDS" => "keywords",
		"DETAIL_META_DESCRIPTION" => "description",
		"DETAIL_BROWSER_TITLE" => "title",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"PRICE_CODE" => array(),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SEF_FOLDER" => "/catalog/",
		"SEF_URL_TEMPLATES" => Array("sections"=>"","section"=>"#SECTION_CODE#/","element"=>"#SECTION_CODE#/#ELEMENT_CODE#/","compare"=>"compare.php?action=#ACTION_CODE#"),
		"VARIABLE_ALIASES" => Array(),
		"VARIABLE_ALIASES" => Array(
		)
	)
);?>
<?
CModule::IncludeModule("iblock");
$res = CIBlockSection::GetByID($_REQUEST["SECTION_ID"]);
if($arSection = $res->GetNext())
{
  $arFilter =   array (
    'SECTION_ID'=> $_REQUEST["SECTION_ID"]
  );
  echo $arSection["DESCRIPTION"];
}
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>