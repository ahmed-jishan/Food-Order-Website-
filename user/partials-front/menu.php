<?php include('config/constants.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Food Village</title>

    <!-- Link our CSS file -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li><button class="btn"><i class="fa fa-home" style="font-size: 19px;"></i></button><a href="<?php echo SITEURL; ?>">Home</a></li>
                    <li><button class="btn3"><i class="fa fa-dashboard"></i></button> <a href="<?php echo SITEURL; ?>categories.php">Categories</a></li>
                    <li><button class="btn2"><i class="fas fa-hamburger"></i></button> <a href="<?php echo SITEURL; ?>foods.php">Foods</a></li>
                    <li><button class="btn2"><i class='fas fa-power-off'></i></button> <a href="<?php echo SITEURL; ?>logout.php">Logout</a></li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->