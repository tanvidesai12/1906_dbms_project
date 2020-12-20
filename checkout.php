<?php 
include 'header.php' ;
if(isset($_POST["checkout_item"]))
{
  $address =$_POST['address'];
  $city =$_POST['city'];
  $state =$_POST['state'];
  $pincode =$_POST['zip'];
  $cid =$_SESSION['id'];
  $paymentmethod = $_POST['paymentmethod'];
  
   $sql2 = "SELECT * FROM cart where cid='".$cid."'";
    $result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
      $sql3 = "SELECT * FROM products where prod_id=".$row['pid'];
      $result4 = $conn->query($sql3);
      $values = $result4->fetch_assoc();
      $pid=$row['pid'];
      $price=$values['price'];
      $quan=$row['quantity'];
    $sqldata = "INSERT INTO `orders`(`pid`, `price`, `quantity`, `cid`, `address`, `city`, `state`, `pincode`, `pay_method`) VALUES ('$pid','$price','$quan','$cid','$address','$city','$state','$pincode','$paymentmethod')";

    // $sqladd = "INSERT INTO `orders` (`address`, `city, `state`,`pincode`,`cid`) VALUES ('".$_POST["address"]."', '".$_POST["city"]."', '".$_POST["state"]."','".$_POST["zip"]."','".$_SESSION["id"]."');";
     if($conn->query($sqldata) === TRUE)
    {
      $sql8 = "DELETE FROM `cart` WHERE cid='".$cid."'";
      $result8 = $conn->query($sql8);
      $conn->query($sql8);
    
    } 
    else{
      echo 'not inserted'.$conn -> error;
      
      
    }
    }
    echo '<script>alert("Order Placed")</script>';
    echo '<script>window.location.href="orders.php"</script>';
    }  
   
}

?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body> 

<h2>Checkout Page</h2>
<div class="row">
  <div class="col-75">
    <?php
    require 'dbc.inc.php';
    $query = "SELECT * FROM loginuser WHERE id='".$_SESSION['id']."'";
    $querry_run = mysqli_query($conn,$query);
    $check_users = mysqli_num_rows($querry_run)>0;
    if($check_users){
      while($row=mysqli_fetch_assoc($querry_run)){
        ?>
    <div class="container">
      <form action="#" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input class="inp" type="text" id="fname" name="firstname" value="<?php echo $row['username'];?>" />
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input class="inp" type="text" id="email" name="email" value="<?php echo $row['email'];?>" />
            <label for="adr"><i class="fa fa-address-card-o" ></i> Address</label>
            <input class="inp" type="text" id="adr" name="address" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input class="inp" type="text" id="city" name="city" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input class="inp" type="text" id="state" name="state" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input class="inp" type="text" id="zip" name="zip" required>
              </div>
            </div>
            <h3>Payment Method</h3>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="paymentmethod" id="paymentmethod1" value="cash on delivery" checked>
            <label class="form-check-label" for="paymentmethod1">
              CASH ON DELIVERY
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="paymentmethod" id="paymentmethod2" value="credit card">
            <label class="form-check-label" for="paymentmethod2">
              CREDIT CARD
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="paymentmethod" id="paymentmethod3" value="debit card">
            <label class="form-check-label" for="paymentmethod3">
              DEBIT CARD
            </label>
          </div>
          </div>
<!-- 
          <div class="col-50">
            
          </div> -->
          
        </div>
      <!--   <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label> -->
        <input type="submit" name="checkout_item" value="Place Order" class="btn1">
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
  <!-- <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">IPHONE</a> <span class="price">$1500</span></p>
      <p><a href="#">SAMSUNG</a> <span class="price">$500</span></p>
      <p><a href="#">OPPO</a> <span class="price">$400</span></p>
      <p><a href="#">HUAWEI</a> <span class="price">$200</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$2600</b></span></p>
    </div>
  </div> -->
</div>
 
</body>

<?php 
include_once 'footer.php';
?>