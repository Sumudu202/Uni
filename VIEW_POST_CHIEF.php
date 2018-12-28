<HTML>
<HEAD>
<TITLE> Student Registration </TITLE>
</HEAD>
<BODY BGCOLOR="ccffcc">
<?php
include 'library/config.php';
include 'library/opendb.php';

@$NIC=$_POST[NIC];

$sqlPost1="SELECT * FROM post WHERE NIC='$NIC'";	
$res=mysql_query($sqlPost1,$conn) or die (mysql_error());
$num=mysql_num_rows($res);
if($num!=0){
while ($row = mysql_fetch_array($res)) {
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

<FORM NAME="application" OnSubmit="isReady(this);" METHOD="post" ACTION="SEND_POST_CHIEF.php">
	<TABLE>
			<TR> </TR>
			<TR>
			<TD> <FONT COLOR="0000ff" SIZE="4"><B>Enter Student's NID &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </B></FONT> </TD><TD><INPUT TYPE="text" NAME="NIC" SIZE="12" VALUE="<?php echo $NIC;?>"></TD>
			</TR>
			<TR> </TR><TR> </TR>
			<TR>
			<TD> <FONT COLOR="0000ff" SIZE="4"><B>Following Document Required </B></FONT></TD><TD><INPUT TYPE="text" NAME="doc" SIZE="75" VALUE="<?php echo $doc;?>"></TD> 
			</TR>
			<TR> </TR><TR> </TR>
			<TR>
			<TD> <FONT COLOR="0000ff" SIZE="4"><B> Final Decision </B></FONT></TD><TD> <INPUT TYPE="text" NAME="fDes" SIZE="75" VALUE="<?php echo $fDes;?>"></TD>
			</TR>
			<TR> </TR> 	<TR> </TR>
			<TR>
			<TD> <FONT COLOR="0000ff" SIZE="4"><B>Scholarships </B></FONT></TD><TD> <INPUT TYPE="text" NAME="schol" SIZE="75" VALUE="<?php echo $schol;?>"></TD>
			</TR>
			<TR> </TR> 	<TR> </TR>
			<TR>
			<TD> <FONT COLOR="0000ff" SIZE="4"><B>Announcement </B></FONT></TD><TD> <INPUT TYPE="text" NAME="announce" SIZE="75" VALUE="<?php echo $announce;?>"></TD>
			</TR>
			<TR> </TR>	<TR> </TR>
			<TR>
			<TD></TD><TD align="right"><INPUT NAME="button1" TYPE="submit" VALUE="SEND POST" onclick="" ></TD>
			</TR>
			<TR> </TR>
	</TABLE>
</FORM>	
</BODY>		
</HTML>