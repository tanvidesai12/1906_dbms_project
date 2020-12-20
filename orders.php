<?php
	include 'header.php'
?>
<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="col-25">
  
    <div class="container">
      <h4>Order Details</h4>
      <?php
          $total=0;
          $sql2 = "SELECT * FROM orders where cid='".$_SESSION["id"]."'";
    $result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
      $sql3 = "SELECT * FROM products where prod_id=".$row['pid'];
      $result4 = $conn->query($sql3);
      $values = $result4->fetch_assoc();

?>
      
      <p><?php echo $values["prod_name"]; ?><span class="price"><?php echo $values["price"]; ?></span> <span class="quant"><?php echo $row["quantity"]; ?>(quantity)</span></p>
      <!-- <p><a href="#">p2</a> <span class="price">$500</span></p>
      <p><a href="#">p3</a> <span class="price">$400</span></p>
      <p><a href="#">p4</a> <span class="price">$200</span></p> -->
      <hr>
      <?php

              $total = $total + ($row["quantity"] * $values["price"]);
            }
          
          ?>
      <p>Total <span class="price" style="color:black"><b><?php echo $total; ?></b></span></p>
<!--       <p>Address:<?php echo $row['address']; ?></p> -->
       <?php

}
?>
    </div>
  </div> 
 
<?php
	include 'footer.php'
?>