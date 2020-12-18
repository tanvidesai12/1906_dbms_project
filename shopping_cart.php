<?php
	include 'header.php'
?>

<div style="clear:both"></div>
			<br />
			<h3>Cart Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>

					<?php
					$total=0;
					$sql2 = "SELECT * FROM cart where cid='".$_SESSION['id']."'";
    $result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
    	$sql3 = "SELECT * FROM products where prod_id=".$row['pid'];
    	$result4 = $conn->query($sql3);
    	$values = $result4->fetch_assoc();

?>
<tr>
						<td><?php echo $values["prod_name"]; ?></td>
						<td><?php echo $row["quantity"]; ?></td>
						<td>$ <?php echo $values["price"]; ?></td>
						<td>$ <?php echo number_format($row["quantity"] * $values["price"], 2);?></td>
						<td><a href="product.php?action=delete&id=<?php echo $row["id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php

							$total = $total + ($row["quantity"] * $values["price"]);
						}
					
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>

					<?php
        }
    
					?>
						
				</table>
			</div>
<a href="checkout.php" role="button" class="btn btn-success ml-5">Proceed to Checkout</a>

<?php 
include_once 'footer.php';
?>