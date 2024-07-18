<?php
	$sql_gt = "SELECT * FROM tbl_gioithieu WHERE id=1";
	$query_gt = mysqli_query($mysqli,$sql_gt);
?>

	<?php
	 	while($dong = mysqli_fetch_array($query_gt)) {
	 	?>
 			<p><?php echo $dong['thongtingioithieu'] ?></p>
	  	
	  <?php 
		}
	  ?>