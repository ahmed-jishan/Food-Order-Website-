<?php

    //include('../user/config/constants.php');
    //session_destroy();//unset $_session['user]
    define('SITEURL', 'http://localhost/food/');
    //2.redirect to login page
    header('location:'.SITEURL.'/clogin/login-user.php');
?>
