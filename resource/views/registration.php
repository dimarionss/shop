<div class="container buybutt_4">
    <h2 class="zagolovok" style="color: #000;">Регистрация</h2>
    <form action="/registration" id="registerform" method="post" name="registerform">
        <input type="hidden" name="registerform" value="1">
        <div class="nameform2">
            <div class="containerform">
                <p><label for="user_login">Полное имя*<br>
                        <input class="input" id="name" name="name" type="text" value=""></label></p>
                <p><label for="user_login">Фамилия<br>
                        <input class="input" id="sname" name="sname" type="text" value=""></label></p>
                <p><label for="user_login">Отчество<br>
                        <input class="input" id="otchestvo" name="otchestvo" type="text" value=""></label></p>
                <p><label for="user_login">Номер телефона*<br>
                        <input class="input" id="phone" name="phone" type="text" value=""></label></p>
                <p><label for="user_login">Страна<br>
                        <input class="input" id="country" name="country" type="text" value=""></label></p>
            </div>
            <div class="containerform">
                <p><label for="user_login">Город<br>
                        <input class="input" id="city" name="city" type="text" value=""></label></p>
                <p><label for="user_pass">E-mail*<br>
                        <input class="input" id="email" name="email" type="email" value="" required></label></p>
                <p><label for="user_pass">Имя пользователя*<br>
                        <input class="input" id="login" name="login" type="text" value=""></label></p>
                <p><label for="user_pass">Пароль*<br>
                        <input class="input" id="password" name="password" type="password" value=""></label></p>
            </div>
            <p class="submit"><input class="buybutton_sh_4" id="registerform" name="registerform" type="submit"
                                     value="Зарегистрироваться"></p>
            <p class="regtext">Уже зарегистрированы? <a href="/authoriz">Введите имя пользователя</a>!</p>
        </div>
    </form>
</div>
