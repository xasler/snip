<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['pass'])) { $pass=$_POST['pass']; if ($pass =='') { unset($pass);} }
if (empty($login) or empty($pass)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
echo "Ошибка! Вы не ввели данные или ваши данные неправильны";
exit ("");
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($pass);
$password = htmlspecialchars($pass);

$login = trim($login);
$pass = trim($pass);

include ("../bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$password = md5($password);//шифруем пароль
$password = strrev($password);// для надежности добавим реверс
$password = $password."b3p6f";
$result = mysql_query("SELECT * FROM admin WHERE login='$login' AND pass='$pass'",$db); //извлекаем из базы все данные о пользователе с введенным логином
	if($result == true){

print <<<HERE
<script language="javascript">
setTimeout("location.href='/admin/index.php'", 1);
</script>
HERE;
	}


$myrow = mysql_fetch_array($result);
if (empty($myrow['id']))
{

echo "3";
exit ();
}
else {

          //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
          $_SESSION['pass']=$myrow['pass']; 
		  $_SESSION['login']=$myrow['login']; 
          $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
		  
//Далее мы запоминаем данные в куки, для последующего входа.
//ВНИМАНИЕ!!! ДЕЛАЙТЕ ЭТО НА ВАШЕ УСМОТРЕНИЕ, ТАК КАК ДАННЫЕ ХРАНЯТСЯ В КУКАХ БЕЗ ШИФРОВКИ

if (isset($_POST['save'])){
//Если пользователь хочет, чтобы его данные сохранились для последующего входа, то сохраняем в куках его браузера
setcookie("login", $_POST["login"], time()+9999999);
setcookie("pass", $_POST["pass"], time()+9999999);}
}	
	  
echo "Успех";

//перенаправляем пользователя на главную страничку, там ему и сообщим об удачном входе

?>