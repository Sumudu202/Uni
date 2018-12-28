<?php
include 'library/config.php';
include 'library/opendb.php';

$uName=$_COOKIE[@auth];
$sql="SELECT NIC FROM login WHERE uName='$uName'";
$res=mysql_query($sql) or die (mysql_error());
while ($row = mysql_fetch_array($res)) 
$NIC = $row['NIC'];			
$sql1="SELECT * FROM stu_personal WHERE NIC='$NIC'";
$res1=mysql_query($sql1) or die (mysql_error());
$num=mysql_num_rows($res1);
if($num!=0)
header("Location: APPNOW_NO.html");
else
header("Location: LEVEL_7.html");
include 'library/closedb.php';
?>