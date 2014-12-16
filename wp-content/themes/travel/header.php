<!DOCTYPE HTML>
<html>
<head>
	<title><?php bloginfo('name');?>
    <?php wp_title(); ;?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ;?>" charset="<?php bloginfo('charset');?>" />
	<meta name="generator" content="WordPress<?php bloginfo('version');?>" />
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.3.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js"></script>
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head();?>
   
   
	

</head>

<body>
 <div class="main">
        <div class="head">
            <h2>Выбери свое<br/>Путешествие!</h2>
            <a href="#"><span>C</span>hoose <span>T</span>ravel</a>
        </div>
      <div class="content-main">
            <ul class="menu">
             <?php  wp_list_pages('title li=');?>
               <!-- <li><a href="#">Главная</a></li>
                <li><a href="#">Автор</a></li>
                <li><a href="#">Контакты</a></li>-->
                <?php include(TEMPLATEPATH.'./searchform.php') ;?>
            </ul>
   <div id="wrapper-rotator">
        <div id="button-rotator"></div>
        <div id="photo"><!--Slider Code Begin-->
    	<div class="current"> 
    		<img src="<?php bloginfo('template_url'); ?>/images/slider/kolizey.jpg" alt="kolizey" class="galery" />
    	</div>
    	<div>
    		<img src="<?php bloginfo('template_url'); ?>/images/slider/nightl.jpg" alt="nightl"  class="galery" />
    	</div>
    	<div>
    		<img src="<?php bloginfo('template_url'); ?>/images/slider/pyramid.jpg" alt="pyramid"  class="galery" />
    	</div>
        </div><!--Slider Code End-->
    </div>  