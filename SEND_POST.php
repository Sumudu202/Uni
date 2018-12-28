<HTML>
<HEAD>
</HEAD>
<BODY BGCOLOR="ccffcc">
<?php
include 'library/config.php';
include 'library/opendb.php';

@$NIC=$_POST[NIC];
@$doc=$_POST[doc];	
@$fDes=$_POST[fDes];	
@$schol=$_POST[schol];	
@$announce=$_POST[announce];			

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
$sql1="SELECT NIC FROM stu_personal WHERE NIC='$NIC' AND NIC IN (SELECT NIC FROM stu_program WHERE field='$subject')";	

$sqlPost1="SELECT * FROM post WHERE NIC='$NIC'";	
$sqlPost="INSERT INTO post VALUES('$NIC','$doc','$fDes','$schol','$announce')";	
$sqlPost2="UPDATE post SET doc='$doc',fDes='$fDes',schol='$schol',announce='$announce' WHERE NIC='$NIC';";	

$res1=mysql_query($sql1,$conn) or die (mysql_error());
$num1=mysql_num_rows($res1);
if($num1!=0){
$res=mysql_query($sqlPost1,$conn) or die (mysql_error());
$num=mysql_num_rows($res);
if($num!=0)
mysql_query($sqlPost2,$conn) or die (mysql_error());
else
mysql_query($sqlPost,$conn) or die (mysql_error());

echo "You Successfully Send the Post!";
}
else
echo "Sorry! You are NOT the Authorised Person or There is NO such Student!";
include 'library/closedb.php';
?>
</BODY>
</HTML>