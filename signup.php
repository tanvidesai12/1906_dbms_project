<?php 
include_once 'header.php';
$message="";
if(isset($_POST["signup"])){
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["pwd"];
$phonenumber=$_POST["phone"];

$s="select * from loginuser where email='$email'";
$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);
if($num==1){
   $message="Email Already Taken";
}
else{
    $reg= "insert into loginuser(username,email,password,phone_num) values('$name','$email','$password','$phonenumber')";
    mysqli_query($conn,$reg);
    $message="Registration Sucessful";
}
}

?>

<head>
    <title>Sign Up Form</title>
  
    <link rel="stylesheet" href="signup-boot.css">
</head>
<body> 
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <form class="myForm text-center"  action="signup.php" method="post">
                            <header>Create new account</header>
                             <?php if(!empty($message)){
                                echo $message;
                            }?>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="myInput" type="text" placeholder="Your Name" id="username" name="name" required> 
                            </div>

                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" placeholder="Email" type="email" id="email" name="email" required> 
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" name="pwd" id="password" placeholder="Password" required> 
                            </div>
                            <div class="form-group">
                                <i class="fas fa-phone"></i>
                                <input class="myInput" type="tel" name="phone" placeholder="Phone Number" id="example-tel-input" pattern="[0-9]{5}-[0-9]{5}" required>
                            </div>
<!-- 
                            <div class="form-group">
                                <label>
                                    <input id="check_1" name="check_1"  type="checkbox" required><small> I read and agree to Terms & Conditions</small></input> 
                                    <div class="invalid-feedback">You must check the box.</div>
                                </label>
                            </div> -->
                            <!-- <div class="form-group form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label myLabel" for="inlineRadio1 ">MALE</label>
                            </div>
                            <div class="form-group form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label myLabel" for="inlineRadio2">FEMALE</label>
                            </div> -->
                            <!-- Group of material radios - option 2 -->
                            <!-- <div class="form-check">
                              <input type="radio" class="form-check-input" id="materialGroupExample2" name="groupOfMaterialRadios" checked>
                              <label class="form-check-label" for="materialGroupExample2">option 2</label>
                            </div> -->
                            <!-- <label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"> -->
                            
                            <input type="submit" name="signup" class="butt" value="CREATE ACCOUNT">
                            <!-- <input type="submit" class="butt" value="LOG IN"> -->
                            <p id=loginid>Already have an account?<a href="login.php">LOG IN</a></p>
                        </form>
                    </div>
                </div> 
                <div class="col-md-6 d-none d-md-block">
                    <div class="myRightCtn">
                         <!-- <img src="images/dog-ball3.jpg" width="300px">  -->
                           <!--  <div class="box">
                            <header>Hello World!</header>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna 
                                aliqua. Ut enim ad minim veniam.</p>
                                <input type="button" class="butt_out" value="Learn More"/>
                            </div> 
                                 -->
                    </div>
                </div>
            </div>
        </div>
</div>
<!--    <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
</script> -->   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>

