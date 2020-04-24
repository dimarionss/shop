<div class="blockshop_3">
			<!----------------Блоки товаров---------------->
				<div class="item_man_3"><a href="#">
				<img src="resource/public/img/<?=$goodsnew[$_GET['more']]['img']?>" width="250"></a>
				</div>
				<div class="blockshop_descrip">
				<h3 style="text-align: center;"><a href="#"><?=$goodsnew[$_GET['more']]['title']?></a></h3>
				<p class="descriptiongood"><?=$goodsnew[$_GET['more']]['description']?> </p>
				</div>
				<div class="salecost" style="text-align: center;">
						<span class=""><a href="<?=$url?>&buycart=1&id=<?=$_GET['more']?>"><input type="button" value="Купить" class="buybutton_sh_3"></a>
						<span class="currency_price_man_3"><?=$goodsnew[$_GET['more']]['price']?> грн</span><br>
						<span class="old_price_man_3"><?=$goodsnew[$_GET['more']]['old_price']?> грн</span>
				
           		</div>

			
			</div>
