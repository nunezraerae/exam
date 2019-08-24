<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>demoEXAM</title>

  <!-- Custom fonts for this theme -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  
	
	<?php wp_head(); ?>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav style="background: #212121" class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt=""></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"><span class="fa fa-phone-alt"></span> +1234567</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 text-lowercase px-0 px-lg-3 rounded js-scroll-trigger" ><span class="fa fa-envelope"></span> mail@exam.com</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a style="background: #FF6B6B;border-radius: 80px" class="nav-link py-3 "><center><span class="fa fa-paper-plane"></span> BOOK NOW</center></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class=" bg-primary text-white text-center">
    <div class=" d-flex align-items-center flex-column">

     <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
		 <?php $imgcaption = get_field('image_caption');  ?>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style=" width: 100%;
    height: 100%;" src="https://images.wallpaperscraft.com/image/forest_fog_trees_140541_1366x768.jpg" alt="Los Angeles">
      <div style="left:50px; top:40%; text-align: left" class="carousel-caption">
        <h3><?php echo $imgcaption;?> <br>Best Trip Ever</h3>
        <p>We are committed to offering travel services of the highest quality, combining our energy <br>and enthusiasm, with our years of experience.</p>
		  <button style="background: #FF6B6B;border-radius: 80px; width: 30%;" class="text-white  btn btn-sm "><center><span class="fa fa-paper-plane"></span> BOOK A TOUR</center></button>
      </div>   
    </div>
    <div class="carousel-item">
      <img style=" width: 100%;
    height: 100%;" src="https://images.wallpaperscraft.com/image/forest_fog_path_128824_1366x768.jpg" alt="Chicago">
      <div style="left:50px; top:40%; text-align: left" class="carousel-caption">
        <h3>Let's Make Your <br>Best Trip Ever</h3>
        <p>We are committed to offering travel services of the highest quality, combining our energy<br> and enthusiasm, with our years of experience.</p>
		  <button style="background: #FF6B6B;border-radius: 80px; width: 30%;" class="text-white  btn btn-sm "><center><span class="fa fa-paper-plane"></span> BOOK A TOUR</center></button>
      </div>   
    </div>
    <div class="carousel-item">
      <img style=" width: 100%;
    height: 100%;" src="https://images.wallpaperscraft.com/image/forest_grass_path_135972_1366x768.jpg" alt="New York">
      <div style="left:50px; top:40%; text-align: left" class="carousel-caption">
         <h3 >Let's Make Your <br>Best Trip Ever</h3>
        <p>We are committed to offering travel services of the highest quality, combining our energy<br> and enthusiasm, with our years of experience.</p>
		  <button style="background: #FF6B6B;border-radius: 80px; width: 30%;" class="text-white  btn btn-sm "><center><span class="fa fa-paper-plane"></span> BOOK A TOUR</center></button>
      </div>  
		
    </div>
  </div>
 
</div>

    </div>
  </header>