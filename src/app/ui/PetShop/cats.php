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
				<h1>Cats</h1>
			</div>
			<div class="col-lg-12">
				<h2>Pets</h2>
			</div>
			<div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/cats/american_short_hair_cat.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>American Short Hair Cat</h3>
						<h4>Price: Php 2,500</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="American Short Hair Cat" name="petName">
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
                    <img src="img/cats/persian_cat.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Persian Cat</h3>
						<h4>Price: Php 2,000</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="Persian Cat" name="petName">
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
                    <img src="img/cats/ragdollcats.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Rag Doll Cat</h3>
						<h4>Price: Php 3,500</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="Rag Doll Cat" name="petName">
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