<div class="blockshop">
    <? $i = 0 ?>
    <!----------------Блоки товаров---------------->

    <? foreach ($goods->common as $good) { ?>
        <div class="item_man_1"><a href="/shop?good=<?
            echo $good['id'] ?>">
                <img src="resource/public/img/lego/<?
                echo $good['img']; ?>" width="250"></a>
            <h3><a href="#"><?
                    echo $good['name']; ?></a></h3>
            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
            <p class="price_man_1"><span class=""><a href="/?buycart=1&id=<?
                    echo $good['id'] ?>"><input type="button" value="Купить" class="buybutton_sh"></a>
						<span class="currency_price_man_1"><?
                            echo $good['currentlyprice']; ?> грн</span><br>
						<span class="old_price_man_1"><?
                            echo $good['oldprice']; ?> грн</span></p>
        </div>

        <?

        $i++;
    }

    ?>
</div>


<div class="clr"></div>

<!-------------------------slider---------------------------------->
<div class="slider">
    <ul>
        <?
        foreach ($site->getSlider() as $slide) { ?>
            <li><img src="resource/public/img/slider/<? echo $slide['img'] ?>" alt=""></li>
        <? } ?>

    </ul>
</div>
<!-------------------------slider---------------------------------->


<!--1 блок страницы (НОВИНКИ)----------------------------------->
<content>

    <div class="container">
        <div><h2 class="zagolovok">Новинки</h2></div>
        <? $i = 4 ?>

        <? foreach ($goods->newGods as $good) { ?>

            <div class="image"><a href="/shop?good=<?
                echo $good['id'] ?>">
                    <img src="resource/public/img/lego/<?
                    echo $good['img']; ?>">
                    <div class="wrapper"><p>Подробнее</p></div>
                </a>
            </div>

            <?
            $i++;
        }
        ?>
    </div>

    <div class="clr container" style="margin:0; padding:0; "></div>


    <!--2 блок страницы----------------------------------------->

    <?
    $countAllGods = count($goods->allGoods) - 1;
    $randomNumber = rand(0, $countAllGods);
    $randomGood = $goods->allGoods[$randomNumber];
    ?>


    <div class="container">
        <div><h2 class="zagolovok">Описания</h2></div>
        <div class="opistovar">
            <a href="/shop?good=<?= $randomGood['id'] ?>"><img
                            src="resource/public/img/lego/<? echo $randomGood['img']; ?>" width="400"
                            class="leftimg"></a><? echo $randomGood['description']; ?><a href="/shop?good=<?= $randomGood['id'] ?>"><input type="button"
                                                                                             value="Подробнее"
                                                                                             class="buybutton"></a></p>
        </div>
    </div>


    <!------------------------ПОЧЕМУ СТОИТ ПОКУПАТЬ У НАС?--------------->
    <div class="container" align="center">
        <div class="block">
            <div><h2 class="zagolovok">Почему стоит покупать у нас?</h2></div>
            <article>
                <i class="icon fa fa-car" aria-hidden="true"></i>
                <p class="preimush_table">dostavka Вчера во время проведения разведоперации наша группа подверглась
                    нападению неизвестного
                    противника в камуфляжной форме Алиенов. В результате эффективной обороны и стремительной
                    контратаки многочисленная группа боевиков была смята и отброшена. Среди личного состава</p>

            </article>
            <article>
                <i class="icon fa fa-thumbs-o-up" aria-hidden="true"></i>
                <p class="preimush_table">kachestvo Вчера во время проведения разведоперации наша группа подверглась
                    нападению неизвестного
                    противника в камуфляжной форме Алиенов. В результате эффективной обороны и стремительной
                    контратаки многочисленная группа боевиков была смята и отброшена. Среди личного состава </p>

            </article>
            <article>
                <i class="icon fa fa-handshake-o" aria-hidden="true"></i>
                <p class="preimush_table">vugoda Вчера во время проведения разведоперации наша группа подверглась
                    нападению неизвестного
                    противника в камуфляжной форме Алиенов. В результате эффективной обороны и стремительной
                    контратаки многочисленная группа боевиков была смята и отброшена. Среди личного состава </p>

            </article>
        </div>
    </div>
    <!---------------------------------------------------------------------->
    <!--------------------------Forma-zayavka------------------------------>
    <div class="formblock container" align="center"
         style="background-color: #85cbcb; border-radius: 5px; margin-top:10px; padding-top: 0;">

        <h2 class="zagolovok" style="color: #fff;">Форма заявки</h2>
        <form action="/zayavka" id="zayavka" method="post" name="zayavka">
            <fieldset>
                <div class="nameform">
                    <label class="nameform">Имя*</label>
                    <input type="text" name="zayavname" placeholder="Имя" required>
                </div>
                <div class="nameform">
                    <label class="nameform">Email</label>
                    <input type="email" name="zayavemail" placeholder="Email" required>
                </div>
                <div class="nameform">
                    <label class="nameform">Телефон*</label>
                    <input type="text" name="zayavphone" placeholder="+38(___)___-__-__">
                </div>
                <input id="zayavka" name="zayavka" form="zayavka" type="submit" value="Отправить"
                       class="buybutton_form">
            </fieldset>
        </form>
    </div>
    <!---------------------------------------------------------------------->
    <!--------------------------------Отзывы------------------------------->
    <div class="container" align="center">
        <div class="block">
            <div><h2 class="zagolovok">Отзывы</h2></div>
            <?
            foreach ($user->getComment() as $comment) { ?>
                <article>
                    <img src="resource/public/img/<? echo $comment['img'] ?>" width="100">
                    <p><? echo $comment['user'] ?> </p>
                    <p><? echo $comment['text'] ?> </p>
                </article>
            <? } ?>
            <div class="review">


            </div>
        </div>


    </div>
</content>

<!---------------------------------------------------------------------->
<div class="clr container" style="margin: 0; padding: 0"></div>

<!---------------------------------------------------------------------->