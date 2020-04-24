<div class="blockshop_3">
			<!----------------Блоки товаров---------------->
    <?foreach ($goods->allGoods as $good){?>
    <? if($_GET['good'] == $good['id']){?>
				<div class="item_man_3"><a href="#">
				<img src="resource/public/img/lego/<?=$good['img']?>" width="250"></a>
				</div>
				<div class="blockshop_descrip">
				<h3 style="text-align: center;"><a href="#"><?=$good['name']?></a></h3>
				<p class="descriptiongood"><?=$good['description']?> </p>
				</div>
				<div class="salecost" style="text-align: center;">
						<span class=""><a href="<?=$url?>&buycart=1&id=<?=$_GET['good']?>"><input type="button" value="Купить" class="buybutton_sh_3"></a>
						<span class="currency_price_man_3"><?=$good['currentlyprice']?> грн</span><br>
						<span class="old_price_man_3"><?=$good['oldprice']?> грн</span>
				
           		</div>

			
			</div>

<?}?>
<?}?>