<?php 
include_once 'header.php';

?>
<!-- carousel with caption -->
<div class="mycarousel">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/dog_toy.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
        	<div class="row justify-content-start text-left">
        		<div class="col-lg-8 ">
        			<h1>Dog Toys</h1>
        			<h2>Get Upto 30% off</h2>
        			<h2>New Arrivals</h2>
        			<a href="product.php" class="button btn0 mt-3 ml-2" role="button">SHOP NOW</a>
        		</div>
        	</div>

        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cat_sweater.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
        	<div class="row justify-content-start text-left">
        		<div class="col-lg-8 ">
        			<h1>Cat Sweaters</h1>
        			<h2>Get Upto 30% off</h2>
        			<h2>New Arrivals</h2>
              <a href="product.php" class="button btn0 mt-3 ml-2" role="button">SHOP NOW</a>
        		</div>
        	</div>

        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/dog_food2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
        	<div class="row justify-content-start text-left">
        		<div class="col-lg-8 ">
        			<h1>Pet Food</h1>
        			<h2>Get Upto 30% off</h2>
        			<h2>New Arrivals</h2>
              <a href="product.php" class="button btn0 mt-3 ml-2" role="button">SHOP NOW</a>
        		</div>
        	</div>

        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- end of carousel -->
<section class="sub py-4 ">
	
</section>
<section class="collection">
	<div class="container py-5">
		<h4 class="text-left">DOG PRODUCTS</h4>
		<div class="row py-5">
			<div class="col-lg-3">
				<div class="card">
					<img src="images/toy_category.jpg" class="img-fluid mb-2" alt="">
					<a href="toys.php" class="text-center">TOYS</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="images/d_food.jpg" class="img-fluid mb-2" alt="">
					<a href="" class="text-center">DOG FOOD</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="images/dogg-cushion.jpg" class="img-fluid mb-2" alt="">
					<a href="" class="text-center">BEDDING</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="images/dog-collar.jpg" class="img-fluid mb-2" alt="">
					<a href="" class="text-center">ACCESSORIES</a>
				</div>
			</div>
		</div>
	</div>
	



</section>

<!-- corousal -->
<!-- <div class="mycarousel">
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000">
      <img src="2.jpg" class="myimg d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="1.jpg" class="myimg d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="4.jpg" class="myimg d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div> -->
<!-- <script >
	var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("myimg");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 -->
<?php 
include_once 'footer.php';
?>