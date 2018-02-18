<!DOCTYPE html>
<html lang="en">
<?php 
    include "heads.php";
    require "connect.php";
?>
<body>

    <?php 
        include "navbar.php";
    ?>
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="rabbits.php">
                        <img class="first-slide" src="img/rabbits/european_rabbit.jpg" alt="First slide" style="width: 100%; height: 6.5in;">
                    </a>
                </div>
                <div class="item">
                    <a href="birds.php">
                        <img class="second-slide" src="img/birds/lovebirds.jpg" alt="Second slide" style="width: 100%; height: 6.5in;">
                    </a>
                </div>
                <div class="item">
                    <a href="cats.php">
                        <img class="third-slide" src="img/cats/american_short_hair_cat.jpg" alt="Third slide" style="width: 100%; height: 6.5in;">
                    </a>
                </div>
                <div class="item">
                    <a href="dogs.php">
                        <img class="fourth-slide" src="img/dogs/labrador.jpg" alt="Fourth slide" style="width: 100%; height: 6.5in;">      
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img class="fifth-slide" src="img/fish/koifish.jpg" alt="Fifth slide" style="width: 100%; height: 6.5in;">
                    </a>
                </div>
                <div class="item">
                    <a href="mouse.php">
                        <img class="sixth-slide" src="img/mouse/cinnamon_mouse.jpg" alt="Sixth slide" style="width: 100%; height: 6.5in;">  
                    </a>
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div><!-- /.carousel -->
        </header>
    </div>

        <hr>
    </div>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
