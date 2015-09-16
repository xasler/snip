<?php
if(0){  include ("bd.php");
$result = mysql_query("SELECT * FROM admin WHERE id='1'",$db);
$row = mysql_fetch_array($result); }
if((isset($_POST['tel'])&&$_POST['tel']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'xas77@list.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'ЭКОДОМ - заказ звонка с сайта'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['callname'].'</p>
                        <p>Номер: '.$_POST['tel'].'</p>    
											
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: ЭКОДОМ <info@bnation.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>