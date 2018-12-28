<?php
//start session
session_start();

@$adyear=$_POST[year];	
@$season=$_POST[season];	
@$fullpart=$_POST[fullpart];	
@$sodegree=$_POST[sodegree];			
@$fos=$_POST['fos'];	
@$fellow=$_POST[fellow];	
@$certify=$_POST[certify];	
@$ref1=$_POST[ref1];
@$add1=$_POST[add1];	
// @$line11=$_POST[line11];	
// @$line12=$_POST[line12];	
// @$line13=$_POST[line13];
@$ref2=$_POST[ref2];
@$add2=$_POST[add2];	
// @$line21=$_POST[line21];	
// @$line22=$_POST[line22];	
// @$line23=$_POST[line23];	

//assign the session data
$_SESSION['adyear']=$adyear;
$_SESSION['season']=$season;
$_SESSION['fullpart']=$fullpart;
$_SESSION['sodegree']=$sodegree;
$_SESSION['fos']=$fos;
$_SESSION['fellow']=$fellow;
$_SESSION['certify']=$certify;
$_SESSION['ref1']=$ref1;
$_SESSION['add1']=$add1;
// $_SESSION['line12']=$line12;
// $_SESSION['line13']=$line13;
$_SESSION['ref2']=$ref2;
$_SESSION['add2']=$add2;
// $_SESSION['line22']=$line22;
// $_SESSION['line23']=$line23;

//Works if session cookie was accepted
//pass along the session id
header("Location: VIEW_APP.php");
?>