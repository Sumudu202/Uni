<HTML>
<BODY BGCOLOR="ccffcc">

<?php
//start session
session_start();
//assign the session data
$lName=$_SESSION['lName'];
$fName=$_SESSION['fName'];
$mName=$_SESSION['mName'];
$app=$_SESSION['app'];
$marry=$_SESSION['marry'];
$NID=$_SESSION['NID'];
$gender= $_SESSION['gender'];
$DOB=$_SESSION['DOB'];
$noStreet=$_SESSION['noStreet'];
$city=$_SESSION['city'];
$state=$_SESSION['state'];
$pCode= $_SESSION['pCode'];
$email=$_SESSION['email'];

$inst1=$_SESSION['inst1'];
$frm1=$_SESSION['frm1'];
$to1=$_SESSION['to1'];
$major1=$_SESSION['major1'];
$degree1=$_SESSION['degree1'];
$dateG1=$_SESSION['dateG1'];
if($_SESSION['inst2']!=NULL)
{
$inst2=$_SESSION['inst2'];
$frm2=$_SESSION['frm2'];
$to2=$_SESSION['to2'];
$major2=$_SESSION['major2'];
$degree2=$_SESSION['degree2'];
$dateG2=$_SESSION['dateG2'];
}
if($_SESSION['inst3']!=NULL)
{
$inst3=$_SESSION['inst3'];
$frm3=$_SESSION['frm3'];
$to3=$_SESSION['to3'];
$major3=$_SESSION['major3'];
$degree3=$_SESSION['degree3'];
$dateG3=$_SESSION['dateG3'];
}

$employer1=$_SESSION['employer1'];
$from1=$_SESSION['from1'];
$too1=$_SESSION['too1'];
$des1=$_SESSION['des1'];
if($_SESSION['employer2']!=NULL)
{
$employer2=$_SESSION['employer2'];
$from2=$_SESSION['from2'];
$too2=$_SESSION['too2'];
$des2=$_SESSION['des2'];
}
if($_SESSION['employer3']!=NULL)
{
$employer3=$_SESSION['employer3'];
$from3=$_SESSION['from3'];
$too3=$_SESSION['too3'];
$des3=$_SESSION['des3'];
}

$adyear=$_SESSION['adyear'];
$season=$_SESSION['season'];
$fullpart=$_SESSION['fullpart'];
$sodegree=$_SESSION['sodegree'];
$fos=$_SESSION['fos'];
$fellow=$_SESSION['fellow'];
$certify=$_SESSION['certify'];
$ref1=$_SESSION['ref1'];
$add1=$_SESSION['add1'];
// $line12=$_SESSION['line12'];
// $line13=$_SESSION['line13'];
$ref2=$_SESSION['ref2'];
$add2=$_SESSION['add2'];
// $line22=$_SESSION['line22'];
// $line23=$_SESSION['line23'];

include 'library/config.php';
include 'library/opendb.php';
//echo $_SESSION['lName'];
$sqlPersonal="INSERT INTO stu_personal VALUES('$lName','$fName','$mName','$app','$marry','$NID','$gender','$DOB','$noStreet','$city','$state','$pCode','$email')";	
$sqlEducation1="INSERT INTO stu_education VALUES('$NID','1','$inst1','$frm1','$to1','$major1','$degree1','$dateG1')";	
if($_SESSION['inst2']!=NULL)
$sqlEducation2="INSERT INTO stu_education VALUES('$NID','2','$inst2','$frm2','$to2','$major2','$degree2','$dateG2')";	
if($_SESSION['inst3']!=NULL)
$sqlEducation3="INSERT INTO stu_education VALUES('$NID','3','$inst3','$frm3','$to3','$major3','$degree3','$dateG3')";	
$sqlEmployee1="INSERT INTO stu_employee VALUES('$NID','1','$employer1','$from1','$too1','$des1')";	
if($_SESSION['employer2']!=NULL)
$sqlEmployee2="INSERT INTO stu_employee VALUES('$NID','2','$employer2','$from2','$too2','$des2')";	
if($_SESSION['employer3']!=NULL)
$sqlEmployee3="INSERT INTO stu_employee VALUES('$NID','3','$employer3','$from3','$too3','$des3')";	
$sqlProgram="INSERT INTO stu_program VALUES('$NID','$adyear','$season','$fullpart','$sodegree','$fos','$fellow')";	
$sqlRef1="INSERT INTO stu_refree VALUES('$NID','$ref1','$add1','$certify','1')";
$sqlRef2="INSERT INTO stu_refree VALUES('$NID','$ref2','$add2','$certify','2')";

mysql_query($sqlPersonal,$conn) or die (mysql_error());
mysql_query($sqlEducation1,$conn) or die (mysql_error());
if($_SESSION['inst2']!=NULL)
mysql_query($sqlEducation2,$conn) or die (mysql_error());
if($_SESSION['inst3']!=NULL)
mysql_query($sqlEducation3,$conn) or die (mysql_error());
mysql_query($sqlEmployee1,$conn) or die (mysql_error());
if($_SESSION['employer2']!=NULL)
mysql_query($sqlEmployee2,$conn) or die (mysql_error());
if($_SESSION['employer3']!=NULL)
mysql_query($sqlEmployee3,$conn) or die (mysql_error());
mysql_query($sqlProgram,$conn) or die (mysql_error());
mysql_query($sqlRef1,$conn) or die (mysql_error());
mysql_query($sqlRef2,$conn) or die (mysql_error());

echo $lName;
echo ", You Successfully Submitted the Application!";
include 'library/closedb.php';
?>

</BODY>
</HTML>