<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Администратор</title>
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="../font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="script.js"></script>
<?php 
include ("../bd.php");
if (!empty($_SESSION['login']) and !empty($_SESSION['pass']))
{
$login = $_SESSION['login'];
$myid = $_SESSION['id'];
$password = $_SESSION['pass'];
$result = mysql_query("SELECT * FROM admin WHERE id='1'",$db); 
$row = mysql_fetch_array($result);



?>
</head>
<body>

		<div id="wrapper">
<?php		if(0){	?>			<div class="header">	<div class="header_wrap">
Админ-панель

<a href="exit.php">Выход</a>	<div class="clear">	</div>
</div></div><?php		}	?>	
		<div class="caller">		<div class="mailicon"><div class="mailinside" id="elsesender"><div class="operation"><i class="fa fa-envelope-o"></i><i class="fa fa-check-circle"></i> <i class="fa fa-exclamation"></i></div></div></div>	<div class="insiderhere">
		<form method="POST" id="megaform">
		<div class="formname"><span class="fade">Изменить E-mail</span><span class="fadein">Ваш E-mail изменен</span></div>
<div class="formtext">Внимание! Указанный Вами E-mail перенастроит все формы на Вашем сайте. Все данные отправленные через форму обратной связи на вашем сайте будут отправляться на этот E-mail.</div>
<div class="clear"></div>
	<div class="formitem lastinrow">	<input type="text" class="lastinrow" id="email" placeholder="E-mail" name="emailadmin" value="<?php echo $row['mail'];  ?>"></div>
		<div class="clear"></div>	<div class="youaresend"></div>			<div class="clear"></div><div class="sender_wrap">	<div id="letsend" class="newsender"><i class="fa fa-floppy-o"></i>Сохранить</div><div class="clear"></div></div>
	
		<div class="doing">Сохранено</div>		</form>
		</div>	</div>
		
				<div class="container"></div>
				
				<div class="clear">	</div>
		
			</div>

<?php		
	}
else {
?>	


	<form class="caller" id="loginform">		<div class="mailicon"><div class="mailinside" id="elsesender"><div class="operation"><img src="/377.GIF"><i class="fa fa-user"></i></div></div></div>	
		<div class="insiderhere">	<div class="formname"><span class="fade">Вход в админ-панель</span><span class="fadein">Ваш E-mail изменен</span></div>
<div class="formtext">Введите ваш пароль и логин выданный разработчиками и введите в соответсвующие поля. В случае если вы не можете попасть в административную панель по каким-либо причинам, обратитесь в поддержку компании "Бизнес-Нация". </div>
			<div class="formitem lastinrow"><input type="text" class="" id="login" placeholder="login" name="login" value=""></div>
			<div class="formitem"><input type="password" name="pass" class="" id="pass" placeholder="password" value=""></div>
		<div class="clear"></div><div class="sender_wrap">		<div id="loginsend" class="newsender"><i class="fa fa-sign-in"></i>
Войти</div></div>
		</form>


<?php		}	?>	
</body>
</html>