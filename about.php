<!-- navbar start -->
<?php
  define("PAGE", "about");
  require_once("header_footer/header.php");
?>
<!-- navbar end -->

<!-- About Header Section Start -->
<section>
    <div class="about_header">
        <div class="img-parent">
            <div class="img">
                <img src="./img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="img-overlay"></div>
        </div>
        <div class="img-content">
            <h6>About us</h6>
        </div>
    </div>
</section>
<!-- About Header Section end -->

<!-- About main Section Start -->
<section>
    <div class="about_main container">
        <div class="row">
            <div class="col-sm-5">
                <h6>About <span>College</span></h6>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Id voluptate, quam distinctio assumenda esse soluta minus
                quibusdam corporis mollitia culpa odio adipisci nisi officiis
                odit facere quisquam aliquid totam qui. Lorem ipsum dolor sit
                amet consectetur adipisicing elit. <br> <br>
                Id voluptate, quam distinctio assumenda esse soluta minus
                quibusdam corporis mollitia culpa odio adipisci nisi officiis
                odit facere quisquam aliquid totam qui.Id voluptate,
                quam distinctio assumenda esse soluta minus
                quibusdam corporis mollitia culpa odio adipisci nisi officiis
                odit facere quisquam aliquid totam qui.
                </p>
                <button class="btn">View More</button>
            </div>
            <div class="offset-sm-2 col-sm-5">
                <img src="img/about.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- About main Section end -->

<?php
  require_once("header_footer/footer.php");
?>