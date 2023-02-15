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
    <title>KoSh College | Courses </title>
</head>

<body>

    <!-- == Navbar section start == -->
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
          <a href="#" class="navbar-brand"> <span>K</span>oSh College</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav text-center">
                <li class="nav-item"><a href="index.php" class="nav-link <?php if(PAGE == "index") {echo 'active';} ?> ">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link <?php if(PAGE == "about") {echo 'active';} ?>">About</a></li>
                <li class="nav-item"><a href="infrastructure.php" class="nav-link <?php if(PAGE == "infra") {echo 'active';} ?>">Infrastructure</a></li>
                <li class="nav-item"><a href="faculty.php" class="nav-link <?php if(PAGE == "faculty") {echo 'active';} ?>">Faculty</a></li>
                <li class="nav-item"><a href="" data-toggle="modal" data-target="#loginpopup" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="create_account.php" class="nav-link <?php if(PAGE == "create_account") {echo 'active';} ?>">Create Account </a></li>
                <!-- <li class="nav-item"><a href="" class="nav-link">Logout</a></li> -->
            </ul>
          </div>
    </nav>
    <!-- == Navbar section end == -->