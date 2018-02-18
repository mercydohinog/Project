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
				<h1>Mouse</h1>
			</div>
			<div class="col-lg-12">
				<h2>Pets</h2>
			</div>
			<div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/mouse/cinnamon_mouse.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Cinnamon Mouse</h3>
						<h4>Price: Php 500</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="Cinnamon Mouse" name="petName">
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
                    <img src="img/mouse/dutch%20marked%20mouse.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Dutch Marked Mouse</h3>
						<h4>Price: Php 700</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="Dutch Marked Mouse" name="petName">
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
                    <img src="img/mouse/self_fawn_mouse.JPG" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Self Fawn Mouse</h3>
						<h4>Price: Php 600</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="Self Fawn Mouse  " name="petName">
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