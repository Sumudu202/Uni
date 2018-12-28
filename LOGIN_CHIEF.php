<?php
include 'library/config.php';
include 'library/opendb.php';
@$uName=$_POST[uName];
@$pwd=$_POST[pwd];

//cookie
setcookie("user", $uName,"0");

//check for request fields
	if((!$uName) || (!$pwd)) {
	header( "Location: LOGIN_SUBOFFICER.html");
	exit;
	}
//build and issue the query
$sql="SELECT * FROM login WHERE uName='".$uName."' AND pwd='".$pwd."'";
$sqllevel="SELECT level FROM login WHERE uName='".$uName."' AND pwd='".$pwd."'";
$result=mysql_query($sql) or die (mysql_error());
$level=mysql_query($sqllevel) or die (mysql_error());
$level=mysql_result($level,'level');
//get the number of rows in the result set
$num=mysql_num_rows($result);
//go to the appropriate page,based on user level
if($num!=0)
{
$cookie_name="auth";
$cookie_value=$uName;
$cookie_expire="";
$cookie_domain="localhost";
setcookie($cookie_name, $uName,"0","/");
$cookie_name="level";
$cookie_value=$level;
$cookie_expire="";
$cookie_domain="localhost";
setcookie($cookie_name, $level,"0","/");

	if ($level==1)
	header("Location: HOME_CHIEF.html");
}
else{
header("Location: LOGIN_CHIEF.html");
exit;
}
include("library/closedb.php");
?>