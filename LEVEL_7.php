<?php
//start session
session_start();

@$lName=$_POST[lName];	
@$fName=$_POST[fName];	
@$mName=$_POST[mName];	
@$app=$_POST[app];
@$marry=$_POST[marry];
@$NID=$_POST[NID];			
@$gender=$_POST[gender];
@$DOB=$_POST[DOB];	
@$noStreet=$_POST[noStreet];	
@$city=$_POST[city];	
@$state=$_POST[state];	
@$pCode=$_POST[pCode];	
@$email=$_POST[email];		

//assign the session data
$_SESSION['lName']=$lName;
$_SESSION['fName']=$fName;
$_SESSION['mName']=$mName;
$_SESSION['app']=$app;
$_SESSION['marry']=$marry;
$_SESSION['NID']=$NID;
$_SESSION['gender']=$gender;
$_SESSION['DOB']=$DOB;
$_SESSION['noStreet']=$noStreet;
$_SESSION['city']=$city;
$_SESSION['state']=$state;
$_SESSION['pCode']=$pCode;
$_SESSION['email']=$email;

header("Location: PAGE2.html");
?>