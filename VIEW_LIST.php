<HTML>
<BODY BGCOLOR="ccffcc">
<table width="500" border="1" bgcolor="cccccc">
<TR><TH>NIC</TH> <TH> NAME</TH> </TR>
<?php
include 'library/config.php';
include 'library/opendb.php';
$level=$_COOKIE[@level];
	if ($level==2)
	$subject="Physics";
		else if ($level==3)
		$subject="Chemistry";
			else if ($level==4)
			$subject="Statistics";
				else if ($level==5)
				$subject="Mathematics";
					else if ($level==6)
					$subject="Computer Science";


$sql="SELECT NIC FROM stu_program WHERE field='$subject'";

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

