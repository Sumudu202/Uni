<HTML>
<BODY BGCOLOR="ccffcc">
<table width="500" border="1" bgcolor="cccccc">
<TR><TH>NIC</TH> <TH> NAME</TH> </TR>
<?php
include 'library/config.php';
include 'library/opendb.php';

$sql="SELECT NIC FROM stu_program";

$res=mysql_query($sql) or die (mysql_error());
while ($row = mysql_fetch_array($res)) 
{
$NIC = $row['NIC'];
$sql1="SELECT fName,mName,lName FROM stu_personal WHERE NIC='$NIC'";
$res1=mysql_query($sql1) or die (mysql_error());
while ($row1 = mysql_fetch_array($res1))
{
$fName = $row1['fName'];
$mName = $row1['mName'];
$lName = $row1['lName'];
}
?>
  <tr> </tr>
  <tr>
    <td><?php echo $NIC;?></td>
    <td><?php echo $fName; echo"  "; echo $mName; echo"  "; echo $lName;?></td>
  </tr>
 
<?php
}
include("library/closedb.php");
?>
</table>
</BODY>
</HTML>
