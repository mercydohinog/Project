<html>
<?php 

include "heads.php"; 
require 'connect.php';
include 'successlogin.php';
$pdo = Database::connect();
$cart = $pdo->prepare("SELECT * FROM groups WHERE groupid = ?");
$cart->execute(array($_SESSION['id']));
$cart = $cart->fetchAll(PDO::FETCH_ASSOC);

?>

<body>
	<?php 
		include 'navbar.php';
	?>
	<div class="container">
		<div class="row">
			<div class="text-center">
				<h1>Checkout Summary</h1>
			</div>
			<div class="table-responsive">
		        <table class="table table-hover table-striped" id="myTable">
					<thead>
						<tr class="alert-info">
							<th>Pet/Product</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Sub Total</th>
						</tr>
					</thead>	
					<tbody>
						<?php 
						$total = 0;
							foreach ($cart as $row) {
								$pdo = Database::connect();
								$pet = $pdo->prepare("SELECT * FROM pet WHERE petid = ?");
								$pet->execute(array($row['itemid']));
								$pet = $pet->fetch(PDO::FETCH_ASSOC);
								echo '<tr>';
									echo '<td>'.$pet['pname'].'</td>';
									echo '<td>'.$row['quantity'].'</td>';
									echo '<td>'.$pet['price'].'</td>';
									echo '<td>'.$pet['price']*$row['quantity'].'</td>';
									$total = $total + ($pet['price']*$row['quantity']);
								echo '</tr>';
							}
							echo '<tr>';
								echo '<td>'.'</td>';
								echo '<td>'.'</td>';
								echo '<td>'.'Grand Total'.'</td>';
								echo '<td>'. $total .'</td>';
							echo '</tr>';
						?>
					</tbody>		
				</table>
				<div class="text-center">
					<a href="action/checkout.php" class="btn btn-success"c>Checkout</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>