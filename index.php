<?php 
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reallife Wedding Studio</title>
    <link rel="stylesheet" href="view/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="view/assets/fonts/material-icons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="view/assets/css/Fixed-navbar-starting-with-transparency1.css">
    <link rel="stylesheet" href="view/assets/css/Fixed-navbar-starting-with-transparency.css">
    <link rel="stylesheet" href="view/assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="view/assets/css/divider-text-middle.css">
    <link rel="stylesheet" href="view/assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="view/assets/css/ebs-contact-form1.css">
    <link rel="stylesheet" href="view/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="view/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="view/assets/css/Navigation-e-commerce.css">
    <link rel="stylesheet" href="view/assets/css/Navigation-Menu.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
   
    <link rel="stylesheet" href="view/assets/css/styles.css">
   
    
</head>

<body>
   


<?php
function exist_param($page) {
    return array_key_exists($page,$_REQUEST);

  }
if (exist_param("dangxuat")) {
    session_unset();
}
  require 'view/header.php';
  if (exist_param("about")) {
      $view_page = "view/about.php";
  }
  elseif (exist_param("home")) {
    $view_page = "view/main.php";
}
elseif (exist_param("blog")) {
    $view_page = "view/blog.php";
}
elseif (exist_param("dvdetail")) {
    $view_page = "view/servicedeatail.php";
}
elseif (exist_param("album")) {
    $view_page = "view/album.php";
}
elseif (exist_param("dichvu")) {
    $view_page = "view/service.php";
}
elseif (exist_param("login")) {
    $view_page = "view/login.php";
}
elseif (exist_param("contact")) {
    $view_page = "view/contact.php";
}
elseif (exist_param("albumdetail")) {
    $view_page = "view/albumdetail.php";
}

  else {
    $view_page = "view/main.php";
    
  }
  require $view_page;
  
  require "view/footer.php";
?>
                        
                        <script src="view/assets/js/jquery.min.js"></script>
                        <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
                        <script src="view/assets/js/aos.min.js"></script>
                        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
                        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
                        <script src="view/assets/js/main.js"></script>

                        <script src="view/assets/bootstrap/js/bootstrap.min.js"></script>
                        <script src="view/assets/js/Animated-Pretty-Product-List-v12.js"></script>
                        <script src="view/assets/js/bs-animation.js"></script>
                        <script src="view/assets/js/Fixed-navbar-starting-with-transparency.js"></script>
                        <script src="view/assets/js/waypoints.min.js"></script>
                        <script src="view/assets/js/jquery.counterup.min.js"></script>
                        
                    </body>

                    </html>