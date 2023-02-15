<?php
  define("PAGE", "create_account");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Link Custom Css -->
    <link rel="stylesheet" href="style.css">
    <title>Login-KoSh College | Courses </title>
</head>

<body>


    <!-- custom style start -->
    <style>
        .navbar{
            background: #000;
        }
        form{
            margin-top: 200px;
        }
        .btn{
            width: 300px;
            border: 1px solid #c59203;
            color: #c59203 !important;
            border-radius: 15px;
            transition: 0.4s;
            font-weight: bold;
        }
        .btn:hover{
            background: #c59203;
            color: #fff !important;
            letter-spacing: 3px;
        }
        .active {
            background: #c59203;
            border-radius: 15px;
        }
    </style>
    <!-- custom style end -->


    
    <!-- == Navbar section start == -->
    <nav class="navbar navbar-expand-sm fixed-top">
          <a href="" class="navbar-brand"> <span>K</span>oSh College</a>
          <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="infrastructure.php" class="nav-link">Infrastructure</a></li>
                <li class="nav-item"><a href="faculty.php" class="nav-link">faculty</a></li>
                <li class="nav-item"><a href="" data-toggle="modal" data-target="#loginpopup" class="nav-link">Login</a></li>
                <li class="nav-item active"><a href="create_account.php" class="nav-link">Create Account </a></li>
                <!-- <li class="nav-item"><a href="" class="nav-link">Logout</a></li> -->
            </ul>
          </div>
    </nav>
    <!-- == Navbar section end == -->


    <!-- create account section start -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9">

                    <form action="" class="shadow-lg p-5">

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Name</label>
                            <small class="" id="create_name_mess"></small>
                            <input type="text" id="create_name" class="font-weight-bold form-control" placeholder="Enter Your Name">
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Email</label>
                            <small class="small" id="create_email_mess"></small>
                            <input type="email" id="create_email" class="font-weight-bold form-control" placeholder="Enter Your Email">
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Password</label>
                            <small class="small" id="create_pass_mess"></small>
                            <input type="password" id="create_password" class="font-weight-bold form-control" placeholder="Enter Your Password">
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Address</label>
                            <small class="small" id="create_address_mess"></small>
                            <input type="text" id="create_address" class="font-weight-bold form-control" placeholder="Enter Your Address">
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Phone Number</label>
                            <small class="small" id="create_p_number_mess"></small>
                            <input type="text" id="create_p_number" class="font-weight-bold form-control" placeholder="Enter Your Phone Number">
                        </div>

                        <button class="btn" id="create_button">Create Account</button>
                        <div class="" id="create_main_message"></div>

                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- create account section end -->




<?php
  require_once("header_footer/footer.php");
?>
