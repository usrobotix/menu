<? if ( !defined( 'B_PROLOG_INCLUDED' ) || B_PROLOG_INCLUDED !== true ) die(); ?>
<? if ( !empty( $arResult[ "MENU" ] ) ): ?>
	<ul class="catalog-menu-list">
		<? foreach ( $arResult[ "MENU" ][ 0 ] as $key => $arItem ):
			$ID = $arItem["PARAMS"]["SECTION"]["ID"];
			?>
			<li rel="<?=$ID?>">
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<? if (is_array($arResult[ "MENU" ][ $ID ])): ?>
					<div class="catalog-menu-second">
						<ul class="catalog-menu-second__list">
							<?foreach ( $arResult[ "MENU" ][ $ID ] as  $arItemLvl2 ):?>
								<li><a href="<?=$arItemLvl2["LINK"]?>"><?=$arItemLvl2["TEXT"]?></a></li>
							<? endforeach ?>
						</ul>

						<?if ($arItem["PARAMS"]["SECTION"]["PICTURE"]["src"]):?>
							<? if ($arItem[ "PARAMS" ][ "SECTION" ][ "UF_BANNER_LINK" ]): ?>
								<a href="<?=$arItem[ "PARAMS" ][ "SECTION" ][ "UF_BANNER_LINK" ]?>" class="catalog-menu-second__banner" target="_blank">
									<img src="<?=$arItem[ "PARAMS" ][ "SECTION" ][ "PICTURE" ][ "src" ]?>" alt="">
								</a>
							<?else:?>
								<div class="catalog-menu-second__banner">
									<img src="<?=$arItem[ "PARAMS" ][ "SECTION" ][ "PICTURE" ][ "src" ]?>" alt="">
								</div>
							<? endif ?>
						<? endif ?>
					</div>
				<? endif ?>
			</li>
		<? endforeach ?>
		<li class="catalog-menu-list__more">
			<a href="#"><?=GetMessage("CAD_CC_TPL_MENU_MORE_LINK")?></a>
			<ul class="catalog-more"></ul>
		</li>
	</ul>
<? endif ?>