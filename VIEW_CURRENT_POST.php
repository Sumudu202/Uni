<?php
include 'library/config.php';
include 'library/opendb.php';

$uName=$_COOKIE[@user];
$sql="SELECT NIC FROM login WHERE uName='$uName'";
$res=mysql_query($sql) or die (mysql_error());
while ($row = mysql_fetch_array($res)) 
$NIC = $row['NIC'];			
$sql1="SELECT * FROM post WHERE NIC='$NIC'";
$res1=mysql_query($sql1) or die (mysql_error());
$num=mysql_num_rows($res1);
if($num!=0){
while ($row = mysql_fetch_array($res1)) {
$NIC = $row['NIC'];			
$doc = $row['doc'];		
$fDes = $row['fDes'];		
$schol= $row['schol'];		
$announce= $row['announce'];	
}
}
else
{
$NIC = '';			
$doc = '';		
$fDes = '';		
$schol= '';		
$announce= '';
}
include 'library/closedb.php';
?>

<HTML>
<HEAD>
</HEAD>
<BODY BGCOLOR="ccffcc">
<p><fieldset>
<legend><H3><B>POST</B></H3></legend>
<table width="500" border="0">
  <tr> </tr>  <tr> </tr>  <tr> </tr>  <tr> </tr>
  <tr>
    <td>Following Document Required : </td>
    <td><?php echo $doc;?></td>
  </tr>
  <tr>
    <td>Final Decision : </td>
    <td><?php echo $fDes;?></td>
  </tr>
  <tr>
    <td>Scholarships : </td>
    <td><?php echo $schol;?></td>
  </tr>
  <tr>
    <td>Announcement : </td>
    <td><?php echo $announce;?></td>
  </tr>
</table>

</p>
</fieldset>&nbsp;</p>


</BODY>
</HTML>