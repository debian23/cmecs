<?php
$query = mysql_query("select * from product");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>


<div class="main_bg">
<div class="wrap">	
<div class="main">	
<?php
	while($row=mysql_fetch_array($query)){
?>
<!--diri-->
<!-- start grids_of_3 -->

	<div class="grids_of_3">
		<div class="grid1_of_3">
			<img src="../../media/<?=$row['image']?>" alt=""/>
				<div class="descname"><?=$row['name']?></div>
				<div class="price">
					<button class="viewbtn" onClick="location.href='?view=detail&id=<?=$row['Id']?>'">view</button>
				</div>
			</div>
	</div>
	<!--asta d-->
<?php
	}
?>
<div class="clear"></div>
</div>
</div>
</div>

<?php
require_once 'tempCart.php';
?>