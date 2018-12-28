<HTML>
<BODY BGCOLOR="ccffcc">
<?php
include 'library/config.php';
include 'library/opendb.php';
$uName=$_COOKIE[@user];
$sql="SELECT NIC FROM login WHERE uName='$uName'";
$res=mysql_query($sql) or die (mysql_error());
$num=mysql_num_rows($res);
if($num==0)
{
echo "Sorry! You have NOT Submitted an Application.";
header("Location: HOME_STUDENT.html");
}
else
{

while ($row = mysql_fetch_array($res)) 
$NIC = $row['NIC'];

$sql_personal = "SELECT * FROM stu_personal WHERE NIC='$NIC'";
$sql_education1 = "SELECT * FROM stu_education WHERE NIC='$NIC' AND degreeNo='1'";
$sql_education2 = "SELECT * FROM stu_education WHERE NIC='$NIC' AND degreeNo='2'";
$sql_education3 = "SELECT * FROM stu_education WHERE NIC='$NIC' AND degreeNo='3'";
$sql_employee1 = "SELECT * FROM stu_employee WHERE NIC='$NIC' AND empNo='1'";
$sql_employee2 = "SELECT * FROM stu_employee WHERE NIC='$NIC' AND empNo='2'";
$sql_employee3 = "SELECT * FROM stu_employee WHERE NIC='$NIC' AND empNo='3'";
$sql_program = "SELECT * FROM stu_program WHERE NIC='$NIC'";
$sql_refree1 = "SELECT * FROM stu_refree WHERE NIC='$NIC' AND refNo='1'";
$sql_refree2 = "SELECT * FROM stu_refree WHERE NIC='$NIC' AND refNo='2'";

$result_personal=mysql_query($sql_personal) or die (mysql_error());
$result_education1=mysql_query($sql_education1) or die (mysql_error());
$result_education2=mysql_query($sql_education2) or die (mysql_error());
$result_education3=mysql_query($sql_education3) or die (mysql_error());
$result_employee1=mysql_query($sql_employee1) or die (mysql_error());
$result_employee2=mysql_query($sql_employee2) or die (mysql_error());
$result_employee3=mysql_query($sql_employee3) or die (mysql_error());
$result_program=mysql_query($sql_program) or die (mysql_error());
$result_refree1=mysql_query($sql_refree1) or die (mysql_error());
$result_refree2=mysql_query($sql_refree2) or die (mysql_error());

while ($row = mysql_fetch_array($result_personal)) {
$lName = $row['lName'];
$fName = $row['fName'];
$mName = $row['mName'];
$app = $row['applied'];
$marry = $row['mStatus'];
$NID = $row['NIC'];
$gender = $row['gender'];
$DOB= $row['dob'];
$noStreet=$row['noStreet'];
$city=$row['city'];
$state=$row['state'];
$pCode= $row['pCode'];
$email=$row['email'];
}

while ($row = mysql_fetch_array($result_education1)) {
$inst1 = $row['institute'];
$frm1 = $row['from'];
$to1 = $row['to'];
$major1 = $row['major'];
$degree1 = $row['degree'];
$dateG1 = $row['graDate'];
}

while ($row = mysql_fetch_array($result_education2)) {
$inst2 = $row['institute'];
$frm2 = $row['from'];
$to2 = $row['to'];
$major2 = $row['major'];
$degree2 = $row['degree'];
$dateG2 = $row['graDate'];
}

while ($row = mysql_fetch_array($result_education3)) {
$inst3 = $row['institute'];
$frm3 = $row['from'];
$to3 = $row['to'];
$major3 = $row['major'];
$degree3 = $row['degree'];
$dateG3 = $row['graDate'];
}

while ($row = mysql_fetch_array($result_employee1)) {
$employer1 = $row['employer'];
$from1 = $row['from'];
$too1= $row['to'];
$des1 = $row['duties'];
}
while ($row = mysql_fetch_array($result_employee2)) {
$employer2 = $row['employer'];
$from2 = $row['from'];
$too2= $row['to'];
$des2 = $row['duties'];
}
while ($row = mysql_fetch_array($result_employee3)) {
$employer3 = $row['employer'];
$from3 = $row['from'];
$too3= $row['to'];
$des3 = $row['duties'];
}

//Data from stu_program
while ($row = mysql_fetch_array($result_program)) {
$adyear = $row['year'];
$season = $row['session'];
$fullpart= $row['attend'];
$sodegree= $row['sDegree'];
$fos = $row['field'];
$fellow = $row['assFello'];
}

//Data from stu_refree 
while ($row = mysql_fetch_array($result_refree1)) {
$certify = $row['insLetter'];
$ref1 = $row['refName'];
$add1= $row['address'];
}
while ($row = mysql_fetch_array($result_refree2)) {
$ref2= $row['refName'];
$add2 = $row['address'];
}
}
include("library/closedb.php");
?>

<p><fieldset>
<legend><H3><B>Section1: Personal Information</B></H3></legend>
<table width="500" border="0">
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
  <tr>
    <td>NIC : </td>
    <td><?php echo @$NID;?></td>
  </tr>
  <tr>
    <td>First Name : </td>
    <td><?php echo @$fName;?></td>
  </tr>
  <tr>
    <td>Middle Name : </td>
    <td><?php echo @$mName;?></td>
  </tr>
  <tr>
    <td>Last Name : </td>
    <td><?php echo @$lName;?></td>
  </tr>
  <tr>
    <td>Have you ever applied for postgraduate <br> studies at the University of Peradeniya ?</td>
    <td><?php echo @$app;?></td>
  </tr>
  <tr>
    <td>Marital Status : </td>
    <td><?php echo @$marry;?></td>
  </tr>
  <tr>
    <td>Gender : </td>
    <td><?php echo @$gender;?></td>
  </tr>
  <tr>
    <td>Date of Birth : </td>
    <td><?php echo @$DOB;?></td>
  </tr>
  <tr>
    <td>Mailing Address : </td>
    <td><?php echo @$noStreet;?></td> <td><?php echo @$city;?></td> <td><?php echo @$state;?></td> <td><?php echo @$pCode;?></td> 
  </tr>
  <tr>
    <td>E-mail : </td>
    <td><?php echo @$email;?></td>
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
    <td><?php echo @$inst1;?></td>
  </tr>
  <tr>
    <td>Dates of Attendance: </td>
	<td>From  </td>
	<td>To	</td>
  </tr>
  <tr>
	<td></td><td><?php echo @$frm1;?></td> <td><?php echo @$to1;?></td> 
  </tr>
  <tr>
    <td>Major Field of Study : </td>
    <td><?php echo @$major1;?></td>
  </tr>
  <tr>
    <td>Degree Recieved : </td>
    <td><?php echo @$degree1;?></td>
  </tr>
  <tr>
    <td>Date Degree Granted :</td>
    <td><?php echo @$dateG1;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
  
<?php
if(@$inst2!=NULL){
?>  
  <tr>
    <td>Institution : </td>
    <td><?php echo @$inst2;?></td>
  </tr>
  <tr>
    <td>Dates of Attendance: </td>
	<td>From  </td>
	<td>To	</td>
  </tr>
  <tr>
	<td></td><td><?php echo @$frm2;?></td> <td><?php echo @$to2;?></td> 
  </tr>
  <tr>
    <td>Major Field of Study : </td>
    <td><?php echo @$major2;?></td>
  </tr>
  <tr>
    <td>Degree Recieved : </td>
    <td><?php echo @$degree2;?></td>
  </tr>
  <tr>
    <td>Date Degree Granted :</td>
    <td><?php echo @$dateG2;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>   <tr> </tr>  <tr> </tr>
<?php
}
?>   

<?php
if(@$inst3!=NULL) {
?>  
  <tr>
    <td>Institution : </td>
    <td><?php echo @$inst3;?></td>
  </tr>
  <tr>
    <td>Dates of Attendance: </td>
	<td>From  </td>
	<td>To	</td>
  </tr>
  <tr>
	<td></td><td><?php echo @$frm3;?></td> <td><?php echo @$to3;?></td> 
  </tr>
  <tr>
    <td>Major Field of Study : </td>
    <td><?php echo @$major3;?></td>
  </tr>
  <tr>
    <td>Degree Recieved : </td>
    <td><?php echo @$degree3;?></td>
  </tr>
  <tr>
    <td>Date Degree Granted :</td>
    <td><?php echo @$dateG3;?></td>
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
    <td><?php echo @$employer1;?></td>
  </tr>
  <tr>
    <td>From : </td>	
	<td><?php echo @$from1;?></td>
  </tr>
  <tr>
	<td>To : </td>
    <td><?php echo @$too1;?></td> 
  </tr>
  <tr>
    <td>Brief Description of Duties : </td>
    <td><?php echo @$des1;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
  
<?php
if(@$employer2!=NULL) {
?>  
  <tr>
    <td>Employer : </td>
    <td><?php echo @$employer2;?></td>
  </tr>
  <tr>
	<td>From : </td>	
	<td><?php echo @$from2;?></td>
  </tr>
  <tr>
	<td>To : </td>	
	<td><?php echo @$too2;?></td> 
  </tr>
  <tr>
    <td>Brief Description of Duties : </td>
    <td><?php echo @$des2;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
<?php
}
?> 
  
<?php
if(@$employer3!=NULL) {
?>  
  <tr>
    <td>Employer : </td>
    <td><?php echo @$employer3;?></td>
  </tr>
  <tr>
	<td>From : </td>	
	<td><?php echo @$from3;?></td>
  </tr>
  <tr>
	<td>To : </td>	
	<td><?php echo @$too3;?></td> 
  </tr>
  <tr>
    <td>Brief Description of Duties : </td>
    <td><?php echo @$des3;?></td>
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
    <td><?php echo @$adyear;?></td>
  </tr>
  <tr>
    <td>Season : </td>
    <td><?php echo @$season;?></td>
  </tr>
  <tr>
    <td>Plan to Attend : </td>
    <td><?php echo @$fullpart;?></td>
  </tr>
  <tr>
    <td>Degree Sought : </td>
    <td><?php echo @$sodegree;?></td>
  </tr>
  <tr>
    <td>Field of Study : </td>
    <td><?php echo @$fos;?></td>
  </tr>
  <tr>
    <td>Are you appling for a Graduate Assistantship or Fellowship? </td>
    <td><?php echo @$fellow;?></td>
  </tr>
    <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
</table>
	
<p><STRONG>Academic Employee References</STRONG>
<table width="420" border="0">
  <tr>
   <tr> </tr> 
	<td> I hereby waive my right to inspect letters of recommendation: </td>
	<td><?php echo @$certify;?></td>
  </tr>
   <tr> </tr>  <tr> </tr> 
  <tr>
    <td>Name : </td> 
    <td><?php echo @$ref1;?></td>
  </tr>
  <tr>
    <td>Address : </td> 
    <td><?php echo @$add1;?></td>
  </tr>
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
  <tr>
    <td>Name : </td> 
    <td><?php echo @$ref2;?></td>
  </tr>
  <tr>
    <td>Address : </td> 
    <td><?php echo @$add2;?></td>
  </tr>
</table>
</p>
</fieldset>&nbsp;</p>

</BODY>
</HTML>