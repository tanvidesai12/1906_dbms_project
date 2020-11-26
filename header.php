<!DOCTYPE html>
<html>
<head>
	<title>Pet Supplies Store</title>
	
	<!-- <link rel="stylesheet" type="text/css" href="mainpage.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
  // jQuery code

  //////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
      $('.dropdown-menu a').click(function(e){
        e.preventDefault();
          if($(this).next('.submenu').length){
            $(this).next('.submenu').toggle();
          }
          $('.dropdown').on('hide.bs.dropdown', function () {
         $(this).find('.submenu').hide();
      })
      });
  }
  
}); // jquery end
</script>
<style type="text/css">
  @media (min-width: 992px){
    .dropdown-menu .dropdown-toggle:after{
      border-top: .3em solid transparent;
        border-right: 0;
        border-bottom: .3em solid transparent;
        border-left: .3em solid;
    }

    .dropdown-menu .dropdown-menu{
      margin-left:0; margin-right: 0;
    }

    .dropdown-menu li{
      position: relative;
    }
    .nav-item .submenu{ 
      display: none;
      position: absolute;
      left:100%; top:-7px;
    }
    .nav-item .submenu-left{ 
      right:100%; left:auto;
    }

    .dropdown-menu > li:hover{ background-color: #f1f1f1 }
    .dropdown-menu > li:hover > .submenu{
      display: block;
    }
  }
</style>
	<style type="text/css">
	
	.navbar-custom{

			background-color: #25003e /*#00CED1*/;
			/*opacity: 0.5;*/
	
	}
	.nav-link{
		color: black;
		font-size: 18px;

	}
	.font-size{
		font-size: 18px;
	}
	/*.img-sz{
		height: 605px;
		width:1200px;

	}*/
/*.carousel-inner img {
  margin: auto;

}*/
.mycarousel{
margin-left: 200px;
margin-right: 200px;
width: 900px;
}
	/*.carousel-inner{
		margin-left: 200px;
margin-right: 200px;
    width:  900px;

    /*object-fit: cover;

	}*/
	/*.myimg{display:none;}*/
.carousel-caption {
position:absolute;
top:50%;
transform: translateY(-80);
left: 8%;

	}
.btn0{
	background-color: orange;
	height: 45px;
	width:150px;
	color:white;
	outline:none;
	border:none;

}
.btn0:hover{
	background-color: white;
	color:orange;
	transition: 0.4s;
}
 .sub{
	background-color: #25003e/*#BF5FFF*/;
}
</style>
</head>
<body>

<nav class="navbar navbar-custom navbar-expand-md navbar-dark ">
 <span class="navbar-brand mb-0 h1 pl-5"><i class="fas fa-paw"></i> Pet Store</span>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link pr-4" href="MyIndex.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <!-- <a class="nav-link dropdown-toggle pr-4" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Shop By Pet
        </a>
        <div class="dropdown-menu dropright" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item dropdown-toggle" aria-haspopup="true" href="#">DOG</a>
          <a class="dropdown-item" href="#">CAT</a>
         
        </div> -->
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  Shop By Pet  </a>
      <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#"> DOG &raquo </a>
          <ul class="submenu dropdown-menu">
          <li><a class="dropdown-item" href="">Toys  &raquo</a>
          <ul class="submenu dropdown-menu">
              <li><a class="dropdown-item" href="">Fetch & Tug Toys</a></li>
              <li><a class="dropdown-item" href="">Rope Toys</a></li>
           </ul>
        </li>
          <li><a class="dropdown-item" href="">Dog Food &raquo</a>
          <ul class="submenu dropdown-menu">
              <li><a class="dropdown-item" href="">Dry Food</a></li>
              <li><a class="dropdown-item" href="">Wet Food</a></li>
              <li><a class="dropdown-item" href="">Grain Free Food</a></li>
            </ul>
        </li>
          <li><a class="dropdown-item" href="">Bedding &raquo </a>
            <ul class="submenu dropdown-menu">
              <li><a class="dropdown-item" href="">Blankets</a></li>
              <li><a class="dropdown-item" href="">Mattress</a></li>
            </ul>
          </li>
          <li><a class="dropdown-item" href="">Clothing &raquo</a>
          <ul class="submenu dropdown-menu">
              <li><a class="dropdown-item" href="">T-Shirts</a></li>
              <li><a class="dropdown-item" href="">Winter Wear</a></li>
            </ul>
        </li>
          <li><a class="dropdown-item" href="">Acessories &raquo</a>
          <ul class="submenu dropdown-menu">
              <li><a class="dropdown-item" href="">Collars</a></li>
              <li><a class="dropdown-item" href="">Chain Sets</a></li>
              <li><a class="dropdown-item" href="">Bowls</a></li>
            </ul>
        </li>
       </ul>
      </li>
      <li><a class="dropdown-item" href="#"> CAT &raquo</a>
         <ul class="submenu dropdown-menu">
          <li><a class="dropdown-item" href="">Toys &raquo</a>
          <ul class="submenu dropdown-menu">
              <li><a class="dropdown-item" href="">Stick Toys</a></li>
              <li><a class="dropdown-item" href="">Plush Toys</a></li>
           </ul>
       </li>
          <li><a class="dropdown-item" href="">Grooming &raquo</a>
           <ul class="submenu dropdown-menu">
              <li><a class="dropdown-item" href="">Brushes & Combs</a></li>
              <li><a class="dropdown-item" href="">Shampoos And Soaps</a></li>
            </ul>
        </li>
          <li><a class="dropdown-item" href="">Cat Food &raquo </a>
            <ul class="submenu dropdown-menu">
              <li><a class="dropdown-item" href="">Dry Food</a></li>
             <li><a class="dropdown-item" href="">Wet Food</a></li>
              <li><a class="dropdown-item" href="">Grain Free Food</a></li>
          </ul>
          </li>
          <li><a class="dropdown-item" href="">Clothing &raquo</a>
           <ul class="submenu dropdown-menu">
              <li><a class="dropdown-item" href="">Winter Wears</a></li>
             
            </ul>
        </li>
          <li><a class="dropdown-item" href="">Bedding&raquo </a>
           <ul class="submenu dropdown-menu">
              <li><a class="dropdown-item" href="">Blankets</a></li>
              <li><a class="dropdown-item" href="">Cushions</a></li>
     
            </ul>
        </li>
       </ul>
      </li>
    
      </ul>
      </li>
    </ul>
     <form class="form-inline ml-auto">
     	<a href="login-bootstrap.php" class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size"> <i class="fas fa-user" style="color:#fff;"></i> Log in</a>
     	<a href=""  class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size" > <i class="fas fa-shopping-cart" style="color:#fff;"></i> Cart</a>
  </form>
 <!--  <ul class="navbar-nav ml-auto">
  <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user" style="color:#fff;"> Sign Up </i></a></li>

</ul> -->
  </div>
</nav>