<?php
    //include constant.php for siteurl
   //include('../config/constants.php');
    //1.destroy the session
    session_destroy();//unset $_session['user]
    define('SITEURL', 'http://localhost/food/');
    //2.redirect to login page
    header('location:'.SITEURL.'/admin/login/login-user.php');



?>