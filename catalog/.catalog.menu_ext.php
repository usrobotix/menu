<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
	"IS_SEF" => "N",
	"ID" => $_REQUEST["ID"],
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "1",
	"SECTION_URL" => "",
	"DEPTH_LEVEL" => "5",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000"
	),
	false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>