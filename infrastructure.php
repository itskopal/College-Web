<!-- navbar start -->
<?php
  define("PAGE", "infra");
  require_once("header_footer/header.php");
?>
<!-- navbar end -->

<!-- infra header start -->
<section>
    <div class="infra_header">
       <div class="img-parent">
            <div class="img">
               <img src="img/infra_header.jpg" alt="">
            </div>
            <div class="img-overlay"></div>
       </div>
       <div class="img-content">
            <h6>Infrastructure</h6>
       </div>
    </div>
</section>
<!-- infra header end -->

<!-- infra main start -->
<section>
    <div class="container infra_main">
        <div class="row justify-content-center">

            <div class="col-sm-4">
                <a href="hostel.php" class="btn">Hostel</a>
            </div>

            <div class="col-sm-4">
                <a href="cafeteria.php" class="btn">Cafeteria</a>
            </div>

            <div class="col-sm-4">
                <a href="building.php" class="btn">Building</a>
            </div>

            <div class="col-sm-4">
                <a href="library.php" class="btn">Library</a>
            </div>

            <div class="col-sm-4">
                <a href="sports.php" class="btn">Sports</a>
            </div>

        </div>
    </div>
</section>
<!-- infra main end -->



<?php
  require_once("header_footer/footer.php");
?>