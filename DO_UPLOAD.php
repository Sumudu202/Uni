<?php
if($_FILES[@proposal]!=""){
@copy($_FILES[@proposal][tmp_name],"\Program Files\Apache Group\Apache2\htdocs\Assignment\Corrected\Upload\_".$_FILES[proposal][name]) or die("Couldn't copy the file.");
}else
die ("No input file specified");
header("Location: PAGE4.html");
?>

