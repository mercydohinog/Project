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
				<h1>Dog</h1>
			</div>
			<div class="col-lg-12">
				<h2>Pets</h2>
			</div>
			<div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/dogs/labrador.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Labrador Dog</h3>
						<h4>Price: Php 7,500</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="Labrador" name="petName">
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
                    <img src="img/dogs/pug.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Pug Dog</h3>
						<h4>Price: Php 9,000</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="pug" name="petName">
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
                    <img src="img/dogs/siberian%20husky.png" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Siberian Husky Dog</h3>
						<h4>Price: Php 11,500</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="Siberian" name="petName">
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