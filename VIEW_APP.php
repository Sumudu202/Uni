<HTML>
<HEAD>
<script type="text/javascript">
function disp_confirm()
{
var r=confirm("Are You Sure You Want to Submit Your Application Now?");
if (r==true)
  {
window.location="SUBMIT.php";
  }
}
</script>

</HEAD>
<BODY BGCOLOR="ccffcc">

<?php
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
?>

<p><fieldset>
<legend><H3><B>Section1: Personal Information</B></H3></legend>
<table width="500" border="0">
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
  <tr>
    <td>NIC : </td>
    <td><?php echo $NID;?></td>
  </tr>
  <tr>
    <td>First Name : </td>
    <td><?php echo $fName;?></td>
  </tr>
  <tr>
    <td>Middle Name : </td>
    <td><?php echo $mName;?></td>
  </tr>
  <tr>
    <td>Last Name : </td>
    <td><?php echo $lName;?></td>
  </tr>
  <tr>
    <td>Have you ever applied for postgraduate <br> studies at the University of Peradeniya ?</td>
    <td><?php echo $app;?></td>
  </tr>
  <tr>
    <td>Marital Status : </td>
    <td><?php echo $marry;?></td>
  </tr>
  <tr>
    <td>Gender : </td>
    <td><?php echo $gender;?></td>
  </tr>
  <tr>
    <td>Date of Birth : </td>
    <td><?php echo $DOB;?></td>
  </tr>
  <tr>
    <td>Mailing Address : </td>
    <td><?php echo $noStreet;?></td> <td><?php echo $city;?></td> <td><?php echo $state;?></td> <td><?php echo $pCode;?></td> 
  </tr>
  <tr>
    <td>E-mail : </td>
    <td><?php echo $email;?></td>
  </tr>
</table>

</p>
</fieldset>&nbsp;</p>

<p><fieldset>
<legend><H3><B>Section2: Educational and Professional Qualifications</B></H3></legend>
<p><STRONG>Undergraduate and Postgraduate</STRONG>
<table width="490" border="0">
  <tr>
    <td>Institution : </td>
    <td><?php echo $inst1;?></td>
  </tr>
  <tr>
    <td>Dates of Attendance: </td>
	<td>From  </td>
	<td>To	</td>
  </tr>
  <tr>
	<td></td><td><?php echo $frm1;?></td> <td><?php echo $to1;?></td> 
  </tr>
  <tr>
    <td>Major Field of Study : </td>
    <td><?php echo $major1;?></td>
  </tr>
  <tr>
    <td>Degree Recieved : </td>
    <td><?php echo $degree1;?></td>
  </tr>
  <tr>
    <td>Date Degree Granted :</td>
    <td><?php echo $dateG1;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
  
<?php
if($_SESSION['inst2']!=NULL){
?>  
  <tr>
    <td>Institution : </td>
    <td><?php echo $inst2;?></td>
  </tr>
  <tr>
    <td>Dates of Attendance: </td>
	<td>From  </td>
	<td>To	</td>
  </tr>
  <tr>
	<td></td><td><?php echo $frm2;?></td> <td><?php echo $to2;?></td> 
  </tr>
  <tr>
    <td>Major Field of Study : </td>
    <td><?php echo $major2;?></td>
  </tr>
  <tr>
    <td>Degree Recieved : </td>
    <td><?php echo $degree2;?></td>
  </tr>
  <tr>
    <td>Date Degree Granted :</td>
    <td><?php echo $dateG2;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>   <tr> </tr>  <tr> </tr>
<?php
}
?>   

<?php
if($_SESSION['inst3']!=NULL) {
?>  
  <tr>
    <td>Institution : </td>
    <td><?php echo $inst3;?></td>
  </tr>
  <tr>
    <td>Dates of Attendance: </td>
	<td>From  </td>
	<td>To	</td>
  </tr>
  <tr>
	<td></td><td><?php echo $frm3;?></td> <td><?php echo $to3;?></td> 
  </tr>
  <tr>
    <td>Major Field of Study : </td>
    <td><?php echo $major3;?></td>
  </tr>
  <tr>
    <td>Degree Recieved : </td>
    <td><?php echo $degree3;?></td>
  </tr>
  <tr>
    <td>Date Degree Granted :</td>
    <td><?php echo $dateG3;?></td>
  </tr>
  <tr> </tr>  <tr> </tr> 
 <?php
}
?>  
</table>
</p>

<p><STRONG>Employment Experience</STRONG>
<table width="370" border="0">
  <tr>
    <td>Employer : </td>
    <td><?php echo $employer1;?></td>
  </tr>
  <tr>
    <td>From : </td>	
	<td><?php echo $from1;?></td>
  </tr>
  <tr>
	<td>To : </td>
    <td><?php echo $too1;?></td> 
  </tr>
  <tr>
    <td>Brief Description of Duties : </td>
    <td><?php echo $des1;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
  
<?php
if($_SESSION['employer2']!=NULL) {
?>  
  <tr>
    <td>Employer : </td>
    <td><?php echo $employer2;?></td>
  </tr>
  <tr>
	<td>From : </td>	
	<td><?php echo $from2;?></td>
  </tr>
  <tr>
	<td>To : </td>	
	<td><?php echo $too2;?></td> 
  </tr>
  <tr>
    <td>Brief Description of Duties : </td>
    <td><?php echo $des2;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
<?php
}
?> 
  
<?php
if($_SESSION['employer3']!=NULL) {
?>  
  <tr>
    <td>Employer : </td>
    <td><?php echo $employer3;?></td>
  </tr>
  <tr>
	<td>From : </td>	
	<td><?php echo $from3;?></td>
  </tr>
  <tr>
	<td>To : </td>	
	<td><?php echo $too3;?></td> 
  </tr>
  <tr>
    <td>Brief Description of Duties : </td>
    <td><?php echo $des3;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>
<?php
}
?> 
</table>
</p>
</fieldset>&nbsp;</p>

<p><fieldset>
<legend><H3><B>Section3: Details of Intended Program</B></H3></legend>
<table width="440" border="0">
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
  <tr>
    <td>Admission Requested for : </td>
    <td><?php echo $adyear;?></td>
  </tr>
  <tr>
    <td>Season : </td>
    <td><?php echo $season;?></td>
  </tr>
  <tr>
    <td>Plan to Attend : </td>
    <td><?php echo $fullpart;?></td>
  </tr>
  <tr>
    <td>Degree Sought : </td>
    <td><?php echo $sodegree;?></td>
  </tr>
  <tr>
    <td>Field of Study : </td>
    <td><?php echo $fos;?></td>
  </tr>
  <tr>
    <td>Are you appling for a Graduate Assistantship or Fellowship? </td>
    <td><?php echo $fellow;?></td>
  </tr>
    <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
</table>
	
<p><STRONG>Academic Employee References</STRONG>
<table width="420" border="0">
  <tr>
   <tr> </tr> 
	<td> I hereby waive my right to inspect letters of recommendation: </td>
	<td><?php echo $certify;?></td>
  </tr>
   <tr> </tr>  <tr> </tr> 
  <tr>
    <td>Name : </td> 
    <td><?php echo $ref1;?></td>
  </tr>
  <tr>
    <td>Address : </td> 
    <td><?php echo $add1;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
  <tr>
    <td>Name : </td> 
    <td><?php echo $ref2;?></td>
  </tr>
  <tr>
    <td>Address : </td> 
    <td><?php echo $add2;?></td>
  </tr>
</table>
</p>
</fieldset>&nbsp;</p>

<input type="button" onclick="disp_confirm()" value="Submit Your Application"/>
</BODY>
</HTML>
