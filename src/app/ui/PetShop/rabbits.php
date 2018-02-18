<html>
<?php 
	include "heads.php";
?>
<body>
	<?php 
		include "navbar.php";
	?>
	<div class="container">
		<div class="row">
			<div class="text-center">
				<h1>Rabbits</h1>
			</div>
			<div class="col-lg-12">
				<h2>Pets</h2>
			</div>
			<div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/rabbits/deilinaar_rabbit.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Deilenaar Rabbit</h3>
						<h4>Price: Php 2,000</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="Deilenaar Rabbit" name="petName">
							<label for="quantity" class="form-label"></label>
							<input type="number" placeholder="quantity" class="form-control" name="quantity" required>
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
                    <img src="img/rabbits/european_rabbit.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>European Rabbit</h3>
						<h4>Price: Php 1,400</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="European Rabbit" name="petName">
							<label for="quantity" class="form-label"></label>
							<input type="number" placeholder="quantity" class="form-control" name="quantity" required> 
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
                    <img src="img/rabbits/mini_lop_rabbit.jpg" alt="" style="width: 100%; height: 250px;">
                    <div class="caption">
                        <h3>Mini Lop Rabbit</h3>
						<h4>Price: Php 1,500</h4>
                        <form action="action/addToCart.php">
							<input type="hidden" value="Mini Lop Rabbit" name="petName">
							<label for="quantity" class="form-label"></label>
							<input type="number" placeholder="quantity" class="form-control" name="quantity" required>
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