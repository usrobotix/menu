<?
$arResultNew = array ( "ITEMS" => $arResult, );
$parent      = 0;
foreach ( $arResult as $item )
{
	$level = $item[ "DEPTH_LEVEL" ];

	if ( $level == 1 )
		$parent = 0;

	$arResultNew[ "MENU" ][ $parent ][] = $item;

	if ( $item[ "IS_PARENT" ] == 1 )
		$parent = $item[ "PARAMS" ][ "SECTION" ][ "ID" ];
}

$arResult = $arResultNew;
