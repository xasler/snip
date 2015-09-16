<?php

include ("../bd.php");
$emailadmin = $_POST['emailadmin'];
$sql = "update admin set mail='$emailadmin' where id='1'";
mysql_query( $sql);
echo "Сохранено";
?>