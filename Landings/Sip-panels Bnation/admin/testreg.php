<?php
session_start();// ��� ��������� �������� �� �������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
if (isset($_POST['pass'])) { $pass=$_POST['pass']; if ($pass =='') { unset($pass);} }
if (empty($login) or empty($pass)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
{
echo "������! �� �� ����� ������ ��� ���� ������ �����������";
exit ("");
}
//���� ����� � ������ �������,�� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($pass);
$password = htmlspecialchars($pass);

$login = trim($login);
$pass = trim($pass);

include ("../bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ���� 
$password = md5($password);//������� ������
$password = strrev($password);// ��� ���������� ������� ������
$password = $password."b3p6f";
$result = mysql_query("SELECT * FROM admin WHERE login='$login' AND pass='$pass'",$db); //��������� �� ���� ��� ������ � ������������ � ��������� �������
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

          //���� ������ ���������, �� ��������� ������������ ������! ������ ��� ����������, �� �����!
          $_SESSION['pass']=$myrow['pass']; 
		  $_SESSION['login']=$myrow['login']; 
          $_SESSION['id']=$myrow['id'];//��� ������ ����� ����� ������������, ��� �� � ����� "������ � �����" �������� ������������
		  
//����� �� ���������� ������ � ����, ��� ������������ �����.
//��������!!! ������� ��� �� ���� ����������, ��� ��� ������ �������� � ����� ��� ��������

if (isset($_POST['save'])){
//���� ������������ �����, ����� ��� ������ ����������� ��� ������������ �����, �� ��������� � ����� ��� ��������
setcookie("login", $_POST["login"], time()+9999999);
setcookie("pass", $_POST["pass"], time()+9999999);}
}	
	  
echo "�����";

//�������������� ������������ �� ������� ���������, ��� ��� � ������� �� ������� �����

?>