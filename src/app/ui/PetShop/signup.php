<!DOCTYPE html>
<html>
<?php 
	include "heads.php";
?>
<body>
	<div class="container">
		<div class="row">
			<div class=" col-md-offset-3 col-md-6">
	            <h3>Sign Up</h3>
	            <form action="action/signup.php" method="post">
	                <div class="form-group">
	                    <label for="email">E-Mail</label>
	                    <input class="form-control" type="text" name="email" id="email" placeholder="E-mail" required>
	                </div>
	                <div class="form-group">
	                    <label for="first_name">First Name</label>
	                    <input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="last_name">Last Name</label>
	                    <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="username">Username</label>
	                    <input class="form-control" type="text" name="username" id="username" placeholder="Username" required>
	                </div>
	                <div class="form-group">
	                    <label for="password">Password</label>
	                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
	                </div>
	                <div class="text-center">
	                	<button type="submit" class="btn btn-success">Submit</button>
	                	<a href="index.php">Back</a>
	                </div>
	            </form>
        	</div>
		</div>
	</div>
</body>
</html>