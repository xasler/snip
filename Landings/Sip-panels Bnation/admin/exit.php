<?php session_start();
if (empty($_SESSION['login']) or empty($_SESSION['pass'])) 
{
exit ("Доступ на эту страницу разрешен только зарегистрированным пользователям. Если вы зарегистрированы, то войдите на сайт под своим логином и паролем<br><a href='index.php'>Главная страница</a>");
}

unset($_SESSION['pass']);
unset($_SESSION['login']); 
unset($_SESSION['id']);// уничтожаем переменные в сессиях

exit("<html><head><meta http-equiv='Refresh' content='0; URL=/admin/index.php'></head></html>");
// отправляем пользователя на главную страницу.
?>