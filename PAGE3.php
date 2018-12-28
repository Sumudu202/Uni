<?php
//start session
session_start();

@$employer1=$_POST[employer1];	
@$from1=$_POST[from1];	
@$too1=$_POST[too1];	
@$des1=$_POST[description1];			

@$employer2=$_POST[employer2];	
@$from2=$_POST[from2];	
@$too2=$_POST[too2];	
@$des2=$_POST[description2];	

@$employer3=$_POST[employer3];	
@$from3=$_POST[from3];	
@$too3=$_POST[too3];	
@$des3=$_POST[description3];	

//assign the session data
$_SESSION['employer1']=$employer1;
$_SESSION['from1']=$from1;
$_SESSION['too1']=$too1;
$_SESSION['des1']=$des1;

$_SESSION['employer2']=$employer2;
$_SESSION['from2']=$from2;
$_SESSION['too2']=$too2;
$_SESSION['des2']=$des2;

$_SESSION['employer3']=$employer3;
$_SESSION['from3']=$from3;
$_SESSION['too3']=$too3;
$_SESSION['des3']=$des3;
//Works if session cookie was accepted
//pass along the session id
header("Location: PAGE4.html");
?>