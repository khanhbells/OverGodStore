<p>Quản lý thông tin giới thiệu</p>
<?php
	$sql_gt = "SELECT * FROM tbl_gioithieu WHERE id=1";
	$query_gt = mysqli_query($mysqli,$sql_gt);
?>
<table border="1" width="100%" style="border-collapse: collapse;">
	<?php
	 	while($dong = mysqli_fetch_array($query_gt)) {
	 	?>
 <form method="POST" action="modules/gioithieuweb/xuly.php?id=<?php echo $dong['id'] ?>" enctype="multipart/form-data">
	  
	   <tr>
	  	<td>Thông tin giới thiệu</td>
	  	<td><textarea rows="10"  name="thongtingioithieu" style="resize: none"><?php echo $dong['thongtingioithieu'] ?></textarea></td>
	  </tr>
	  
	   <tr>
	    <td colspan="2"><input type="submit" name="submitgioithieu" value="Cập nhật"></td>
	  </tr>
	  <?php 
		}
	  ?>
 </form>
</table>