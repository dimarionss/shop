<footer id="footer1">
    <div class="footertableblock">
        <article>
            <h5>Меню</h5>
            <div id="menufooter">
                <ul>
                    <? foreach ($pages as $key => $page_title) { ?>
                        <?php if ($key <> 'zayavka') { ?>
                            <li><a href="/<?= $key ?>"><?= $page_title ?></a></li>
                        <? } ?>
                    <? } ?>

                </ul>
            </div>
        </article>
        <article>
            <h6>Категории</h6>
            <div id="menufooter2">
                <ul>
                    <? foreach ($site->getCategory() as $cat) { ?>
                        <li><a href="#"><?= $cat['title'] ?></a></li>
                    <? } ?>

                </ul>
            </div>
        </article>
        <article>
            <h6>Информация</h6>
            <p><i class="fa fa-car" aria-hidden="true">c 9:00 до 21:00</i>
                <i class="fa fa-phone" aria-hidden="true">+38(093)334-44-21</i>
                <i class="fa fa-phone" aria-hidden="true">+38(093)334-44-21</i></p>
        </article>
    </div>
    <div class="wrapper">
        <ul class="wrap">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></a></i></li>
            <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></a></i></li>
            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></a></i></li>
            <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></a></i></li>
            <li><a href="https://www.instagram.com/roystrends/?hl=ru"><i class="fa fa-instagram" aria-hidden="true"></a></i></li>
        </ul>
    </div>



    <div>
        <hr>
        <h6 id="copyrig">&copy;Roys prodaction</h6>
    </div>
</footer>

<!---------------------------------------------------------------------->
<!--------------------------------script-------------------------------------->
<script type="text/javascript" src="resource/public/js/slider.js"></script>

<!--------------------------------script-------------------------------------->
</body>

</html>