<?php 
include_once 'header.php';

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["prod_id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["prod_id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			$sqlc = "INSERT INTO `cart` (`cid`, `pid`, `quantity`) VALUES ('".$_SESSION["id"]."', '".$_GET["prod_id"]."', '".$_POST["quantity"]."');";
                           
                            
                            if ($conn->query($sqlc) === TRUE) {
                                echo '<script>window.location.href=""</script>';
                                } else {
                                echo "Error updating record: ".$conn->error;
                                }
			echo "Item Added to cart";
			$_SESSION["shopping_cart"]=array();

		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["prod_id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		$sqld = "DELETE FROM `cart` WHERE id=".$_GET["id"];
                            
                            
                            if ($conn->query($sqld) === TRUE) {
                                echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="shopping_cart.php"</script>';
                                } else {
                                echo "Error updating record: ".$conn->error;
                                }
		
	}
}
?>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container py-5 ">
	<div class="row mt-5 ml-5">
		<?php
		require 'dbc.inc.php';
		$query = "SELECT * FROM products where subcat_id=1";
		$querry_run = mysqli_query($conn,$query);
		$check_products = mysqli_num_rows($querry_run)>0;
		if($check_products){
			while($row=mysqli_fetch_assoc($querry_run)){
				?>
				<div class="col-md-4 mt-3">
					<form method="post" action="rope_toys.php?action=add&prod_id=<?=$row["prod_id"]?>">
					<div class="card"> 
						<img src="images/<?=$row['prod_img']?> " height="250px" class="card-img-top" alt="product images"> 
						<div class="card body">
						 
					<!-- 	echo "<img src = 'images/".$row['prod_img'].'" />';
	 -->
						<h3 class="card-title text-info"><?php echo $row['prod_name'];?></h3>
						<h4 class="card-title text-danger">Rs.<?php echo $row['price'];?></h4>
						<div class="quant">
							<!-- <button class="btn minus-btn disabled" onclick="minus()">-</button> -->
							<input type="text" id="quant" name="quantity"  value="1" class="form-control" />
							<!-- <button class="btn plus-btn" onclick="plus()">+</button> -->
						</div>
						<input type="hidden" name="hidden_name" value="<?php echo $row["prod_name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<!-- <p class="card text"><?php echo $row['description'];?></p> -->
						<input type="submit" name="add_to_cart" class="btn btn-success" value="Add to Cart" />
						</div>
					</div>
					</form>
				</div>
				<?php
				
			}
		}
		else{
			echo 'No Products Found';
		}
		?>
		
	</div>

		</div>
	
<?php 
include_once 'footer.php';
?>