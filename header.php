<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<!-- Nav -->
<nav class="navbar navbar-default">
  <div class="container1">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">BLOG</a></li>
        <li><a href="#">ARCHIVES</a></li>
      </ul> -->
      <?php
        if (has_nav_menu("main-menu")) {
            wp_nav_menu(array(
                'theme_location' => 'main-menu'
            ));
        } else {
            echo "Please select a main menu.";
        }
      ?>
    </div>
  </div>
</nav>
    <header>
    <div class="jumbotron text-center">
        <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo("name"); ?></a></h1>
            <!-- <p>The History of Domestic Animals</p>  -->
                </div>

 <div class="container">
    <div class="row">
        <div class="col-lg-6 logo-container">
                </div>
                <div class="col-lg-6 logo-navigation">
            </div>
        </div>
    </div>
</header>       
</body>
</html>

