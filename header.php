<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body>
<!-- header ここから-->
<header id="fixed">
       <div class="left-box">About Dog</div>
       <div class="right-box">
           <span>Top</span>
           <span>Latest</span>
           <span>Contact</span>
       </div>
   </header>
   <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="">
<!-- header ここまで -->