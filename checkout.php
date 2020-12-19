<?php include 'header.php' 
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
      <form action="/action_page.php" method="post">
      
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
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input class="inp" type="text" id="cname" name="cardname" >
            <label for="ccnum">Credit card number</label>
            <input class="inp" type="text" id="ccnum" name="cardnumber" >
            <label for="expmonth">Exp Month</label>
            <input class="inp" type="text" id="expmonth" name="expmonth" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input class="inp" type="text" id="expyear" name="expyear" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input class="inp" type="text" id="cvv" name="cvv">
              </div>
            </div>
          </div>
          
        </div>
      <!--   <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label> -->
        <input type="submit" value="Continue to checkout" class="btn1">
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