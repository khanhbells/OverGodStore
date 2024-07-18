<?php
include('../../config/config.php');

$thongtingioithieu = $_POST['thongtingioithieu'];
$id = $_GET['id'];

if(isset($_POST['submitgioithieu'])){
	//sua
	$sql_update = "UPDATE tbl_gioithieu SET thongtingioithieu='".$thongtingioithieu."' WHERE id='$id' ";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=gioithieuweb&query=updategt');
}

?>