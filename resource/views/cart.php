<?

if (($user->price == 0)) {
    echo '<div class="container"><h1>Корзина пустая</h1></div>';
} else {


    if (isset($_GET['del_good'])) {
        $user->delGoodFromCart($_GET['del_good']);
    }


    ?>

<?if(!empty($user->usercart_goods_on_id)){?>
    <div class="blockshop_4">
        <? foreach ($user->usercart_goods_on_id as $id) { ?>
            <? foreach ($goods->allGoods as $good) { ?>
                <? if ($id == $good['id']) { ?>
                    <div class="item_man_4"><a href="/shop?good=<? echo $good['id'] ?>">
                            <img src="resource/public/img/lego/<? echo $good['img']; ?>" width="250"></a>
                        <h3><a href="#"><? echo $good['name']; ?></a></h3>
                        <span class="currency_price_man_4"><? echo $good['currentlyprice']; ?> грн</span>
                        <span class=""><a href="/cart?del_good=<? echo $good['id'] ?>"><input type="button" value="X"
                                                                                              class="delete_4"></a>
  						<input type="number" step="1" min="1" max="10" id="num_count" name="quantity" value="1"
                               title="Qty">
                    </div>

                <? } ?>
            <? } ?>
        <? } ?>


    </div>
<? } ?>
<? } ?>


<?
global $user;
if ($user->loged) {
    ?>
    <div class="container buybutt_4">
        <h2 class="zagolovok" style="color: #000;">Оформление заказа</h2>
        <form action="/zayavka" id="zakazregistration" method="post" name="zakazregistration">
            <input type="hidden" name="registerform" value="1">
            <div class="nameform2">
                <div class="containerform">
                    <p><label for="user_login">Фамилия<br>
                            <input class="input" id="sname" name="sname" type="text" value=""></label></p>
                    <p><label for="user_login">Отчество<br>
                            <input class="input" id="otchestvo" name="otchestvo" type="text" value=""></label></p>
                    <p><label for="user_login">Страна<br>
                            <input class="input" id="country" name="country" type="text" value=""></label></p>
                    <p><label for="user_login">Город<br>
                            <input class="input" id="city" name="city" type="text" value=""></label></p>
                    <p><label for="user_login">Отделение Новой Почты<br>
                            <input class="input" id="nposta" name="nposta" type="text" value=""></label></p>
                </div>
                <p class="submit"><input class="buybutton_sh_4" id="zakazregistration" name="zakazregistration"
                                         type="submit" value="Оформить заказ"></p>
            </div>
        </form>
    </div>
<? } else if (($user->price == 0) && empty($user->loged)) {
    echo '<div class="container"><h1>Выберите интересующий для Вас товар в разделе "Магазин"</h1></div>';
}else{?>
    <div class="container buybutt_4">
        <h2 class="zagolovok" style="color: #000;">Оформление заказа / Регистрация</h2>
        <form action="/zayavka" id="zakazregistration" method="post" name="zakazregistration">
            <input type="hidden" name="registerform" value="1">
            <div class="nameform2">
                <div class="containerform">
                    <p><label for="user_login">Полное имя*<br>
                            <input class="input" id="name" name="name"  required type="text" value=""></label></p>
                    <p><label for="user_login">Фамилия<br>
                            <input class="input" id="sname" name="sname" type="text" value=""></label></p>
                    <p><label for="user_login">Отчество<br>
                            <input class="input" id="otchestvo" name="otchestvo" type="text" value=""></label></p>
                    <p><label for="user_login">Номер телефона*<br>
                            <input class="input" id="phone" name="phone" required type="text" value=""></label></p>
                    <p><label for="user_login">Страна<br>
                            <input class="input" id="country" name="country" type="text" value=""></label></p>
                </div>
                <div class="containerform">
                    <p><label for="user_login">Город<br>
                            <input class="input" id="city" name="city" type="text" value=""></label></p>
                    <p><label for="user_pass">E-mail<br>
                            <input class="input" id="email" name="email" type="email" value=""></label></p>
                    <p><label for="user_login">Отделение Новой Почты<br>
                            <input class="input" id="nposta" name="nposta" type="text" value=""></label></p>
                    <p><label for="user_pass">Имя пользователя*<br>
                            <input class="input" id="login" name="login" type="text" value=""></label></p>
                    <p><label for="user_pass">Пароль*<br>
                            <input class="input" id="password" name="password" type="password" value=""></label></p>
                </div>
                <p class="submit"><input class="buybutton_sh_4" id="zakazregistration" name="zakazregistration"
                                         type="submit" value="Оформить заказ"></p>
                <p class="regtext">Уже зарегистрированы? <a href="/authoriz">Введите имя пользователя</a>!</p>
            </div>
        </form>
    </div>
<? } ?>