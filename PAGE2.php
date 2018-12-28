<?php
//start session
session_start();

@$inst1=$_POST[institution1];	
@$frm1=$_POST[from1];	
@$to1=$_POST[to1];	
@$major1=$_POST[major1];
@$degree1=$_POST[degree1];
@$dateG1=$_POST[dateGranted1];		

@$inst2=$_POST[institution2];	
@$frm2=$_POST[from2];	
@$to2=$_POST[to2];	
@$major2=$_POST[major2];
@$degree2=$_POST[degree2];
@$dateG2=$_POST[dateGranted2];
	
@$inst3=$_POST[institution3];	
@$frm3=$_POST[from3];	
@$to3=$_POST[to3];	
@$major3=$_POST[major3];
@$degree3=$_POST[degree3];
@$dateG3=$_POST[dateGranted3];		

//assign the session data
$_SESSION['inst1']=$inst1;
$_SESSION['frm1']=$frm1;
$_SESSION['to1']=$to1;
$_SESSION['major1']=$major1;
$_SESSION['degree1']=$degree1;
$_SESSION['dateG1']=$dateG1;

$_SESSION['inst2']=$inst2;
$_SESSION['frm2']=$frm2;
$_SESSION['to2']=$to2;
$_SESSION['major2']=$major2;
$_SESSION['degree2']=$degree2;
$_SESSION['dateG2']=$dateG2;

$_SESSION['inst3']=$inst3;
$_SESSION['frm3']=$frm3;
$_SESSION['to3']=$to3;
$_SESSION['major3']=$major3;
$_SESSION['degree3']=$degree3;
$_SESSION['dateG3']=$dateG3;

//Works if session cookie was accepted
//pass along the session id
header("Location: PAGE3.html");
?>