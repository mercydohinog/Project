<!DOCTYPE html>
<html>
<?php 
    include "heads.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="control-group">
                <h1 class="text-center">Pet Shop</h1>
            </div>
            <div class=" col-md-offset-3 col-md-6" style="margin-top: 10%">
                <h3 class="text-center">Sign In</h3>
                <form action="action/check_login.php" method="post">
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
                        <a href="signup.php">Signup</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>