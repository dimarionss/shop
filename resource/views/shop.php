<?


if(isset($_GET['more'])){
		require_once "resource/views/more.php";
	}else if(isset($_GET['good'])){
		require_once "resource/views/good.php";
	}else{

?>


<div class="blockshop_2">
	<?$i=0?>
	<?foreach ($goods->allGoods as $good) {?>

				<div class="item_man_2"><a href="/shop?good=<?echo $good['id']?>">
				<img src="resource/public/img/lego/<?echo $good['img'];?>" width="250"></a>
				<!-- <h3><a href="#">Стильная сумка первая!</a></h3> -->
						<span class=""><a href="<?=$clear_url[0]?>?buycart=1&id=<?echo $good['id']?>"><input type="button" value="Купить" class="buybutton_sh_2"></a>
						<span class="currency_price_man_2"><?echo $good['currentlyprice'];?> грн</span>
						<span class="old_price_man_2"><?echo $good['oldprice'];?> грн</span>
				</div>


				<?

	$i++;
	}

	?>
		
</div>

	<?}?>