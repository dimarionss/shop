<?


class Site
{
    public $my_email, $my_email_pass;

    function getSlider()
    {
        global $pdo;

        $slider = $pdo->prepare("SELECT * FROM sliders"); //запрашиваем строку из БД с логином, введённым пользователем
        $slider->execute();
        return $slider->fetchAll();
    }

    function getCategory()
    {
        global $pdo;

        $category = $pdo->prepare("SELECT * FROM categories"); //запрашиваем строку из БД с логином, введённым пользователем
        $category->execute();
        return $category->fetchAll();
    }

    function sendZayavka()
    {
        global $user;
        if (isset($_POST['zayavname']) or isset($_POST['zakazregistration'])) {
            if (!empty($_POST['zayavname']) && !empty($_POST['zayavphone'])) {
                $to = $this->my_email;
                $text = '<b>Имя:</b> ' . $_POST['zayavname'] . ';<br><b>Телефон:</b> ' . $_POST['zayavphone'] . ';<br><b>Email:</b> ' . $_POST['zayavemail'] . ';';
                $this->sendMail($to, $text);

            } else {
                if (!empty($_POST['name']) && !empty($_POST['phone'])) {
                    $to = $this->my_email;

                    $usercart = $user->get_goods_from_cart();
                    $cart = '';

                    if (!empty($user->usercart_goods_on_id)) {
                        foreach ($usercart as $item) {
                            $cart .= $item['name'] . " : " . $item['currentlyprice'] . " грн" . "<br>";
                        }
                    }

                    $text = '<b>Имя:</b> ' . $_POST['name'] . ';<br><b>Фамилия:</b> ' . $_POST['sname'] . ';<br><b>Отчество:</b> ' . $_POST['otchestvo'] . ';<br><b>Телефон:</b> ' . $_POST['phone'] . ';<br><b>Email:</b> ' . $_POST['email'] . ';<br><b>Страна:</b> ' . $_POST['country'] . ';<br><b>Город:</b> ' . $_POST['city'] . ';<br><b>Отделение Новой Почты :</b> ' . $_POST['nposta'] . ';';
                    $text .= $cart;
                    $text .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    $text .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    $text .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <HR> ИТОГО " . $user->price;
                    $this->sendMail($to, $text);

                } else {
                    $to = $this->my_email;

                    $usercart = $user->get_goods_from_cart();
                    $cart = '';

                    if (!empty($user->usercart_goods_on_id)) {
                        foreach ($usercart as $item) {
                            $cart .= $item['name'] . " : " . $item['currentlyprice'] . " грн" . "<br>";
                        }
                    }

                    $text = '<b>Имя:</b> ' . $user->data['name'] . ';<br><b>Фамилия:</b> ' . $_POST['sname'] . ';<br><b>Отчество:</b> ' . $_POST['otchestvo'] . ';<br><b>Телефон:</b> ' . $user->data['phone'] . ';<br><b>Email:</b> ' . $user->data['email'] . ';<br><b>Страна:</b> ' . $_POST['country'] . ';<br><b>Город:</b> ' . $_POST['city'] . ';<br><b>Отделение Новой Почты :</b> ' . $_POST['nposta'] . ';<br>';
                    $text .= $cart;
                    $text .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    $text .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    $text .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <HR> ИТОГО " . $user->price;
                    $this->sendMail($to, $text);
                }

            }
            $user->unsetCart();
            $this->refresh();
        }
    }

    function sendMail($to, $text, $subject = 'Новая заявка')
    {

        require_once ROOT . "/lib/SendMailSmtpClass.php"; // include the class name
        $mailSMTP = new SendMailSmtpClass($this->my_email, $this->my_email_pass, 'ssl://smtp.gmail.com', 'From', 465);
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: From<" . $this->my_email . ">\r\n";
        $result = $mailSMTP->send($to, $subject, $text, $headers);

        echo json_encode(array('status' => $result));


    }

    function refresh()
    {
        header('Location: .');
    }

    // types mess  message/error/save
    function alertMessage($header,$txt,$type,$close=0)
    {
           echo '<script> futu_alert("'.$header.'","'.$txt.'",'.$close.',"'.$type.'",);</script>';
    }
}
