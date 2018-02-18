<?php 
    require_once 'connect.php';

    $pdo = Database::connect();
    $number = $pdo->prepare("SELECT * FROM groups");
    $number->execute();
    $number = $number->fetchAll(PDO::FETCH_ASSOC);
    $total = 0;

    foreach($number as $row){
        $total = $total + $row['quantity'];
    }
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container heads">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Petshop</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="pets.php">Pets</a>
                    </li>
                    <li>
                        <a href="products.php">Products</a>
                    </li>
                </ul>
                <ul class="pull-right" style="padding-top: 14px;">
                    <li>
                        <a href="Checkout.php"><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Checkout (<?php echo $total ?>)</a>
                    </li>
                </ul>
            </div>  
        </div>
</nav>