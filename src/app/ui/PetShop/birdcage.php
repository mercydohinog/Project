<html>
<?php 
	include "heads.php";
?>
<body>
	<?php 
		include "navbar.php";
	?><div class="container">
		<div class="row">
			<div class="text-center">
				<h1>Bird Cage</h1>
			</div>
			<div class="col-lg-12">
				<h2>Products</h2>
			</div>
			<div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/birds/birdcage1.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Bird Cage 1</h3>
						<h4>Price: Php 2,500</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="birdcage1" name="prodName">
							<label for="quantity" class="form-label"></label>
							<input type="number" placeholder="quantity" class="form-control" name="quantity" required="">
							<div class="text-center">
							<br>	
								<button type="submit" class="btn btn-success">Add To Cart</button>
							</div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/birds/birdcage2.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Bird Cage 2</h3>
						<h4>Price: Php 3,500</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="birdcage2" name="prodName">
							<label for="quantity" class="form-label"></label>
							<input type="number" placeholder="quantity" class="form-control" name="quantity" required=""> 
							<div class="text-center">
							<br>
								<button type="submit" class="btn btn-success">Add To Cart</button>
							</div>
                        </form>
                    </div>
                </div>
            </div>
           
		</div>
    </div>
</body>
</html>