<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from category where Id = $id");

$row=mysql_fetch_array($query)
?>

<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<div class="single">
			<div class="left_content">
				<div class="span1_of_1">
					<div class="product-view">
						<div class="product-essential">
							<div class="product-img-box">
								<div class="product-image">
									<img src="../../media/<?=$row['image']?>"></br>
							   </div>
							</div>
						</div>
					</div>
				</div>
				<div class="span1_of_1_des" style="margin-left:-190px; float:left;">
					<div class="desc1">
						<h3>Name: <?=$row['name']?></br></h3>
						<p>Description: <?=$row['description']?></p>
						<div class="available">
								<button class="button updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button>
								<button class="button deletebtn" onClick="location.href='process.php?action=delete&id=<?=$row['Id']?>'">Delete</button>
							<div class="clear"></div>
						</div>
					 </div>
				</div>
				<div class="clear"></div>
	       </div>
	   <div class="clear"></div>
	</div>
</div>
</div>	
