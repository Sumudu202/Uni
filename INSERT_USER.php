<HTML>
<HEAD>
<BODY BGCOLOR="ccffcc">
<?php
include 'library/config.php';
include 'library/opendb.php';
@$NIC=$_POST['NIC'];
@$uName=$_POST[uName];
@$pwd=$_POST[pwd];
//check for required fields
	if((!$NIC) || (!$uName) || (!$pwd)) {
	header( "Location: INSERT_USER.html");
	exit;
	}
	
//check for column existance
	$sqlusercheck="SELECT * FROM login WHERE uName='".$uName."'";
	$resultusercheck=mysql_query($sqlusercheck);
		if(!$resultusercheck){
							echo "Could not Successfully run query ($sql) from db:" .mysql_error();
							echo "Please contact DB Administrator";
							exit;
							}
		if(mysql_num_rows($resultusercheck)==0){
				//$sqluserinsert="INSERT INTO login (NIC,uName,pwd,level) VALUES ('$NIC','$uName',password('$pwd'),'7')";
				$sqluserinsert="INSERT INTO login (NIC,uName,pwd,level) VALUES ('$NIC','$uName','$pwd','7')";
				mysql_query($sqluserinsert,$conn) or die ("Query failed");
				//echo "User $uName created successfully!";
				}
		else{
				echo "User Name is already exists. Please try another User Name";
				exit;
			}
include	("library/closedb.php");
header("Location: LEVEL_7.html");
?>
</BODY>
<HTML>
<HEAD>