<?php get_header(); ?>


  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 style="text-decoration-color: #545454; font-size: 45px" class="page-section-heading text-center text-uppercase mb-0">Featured Tours</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <p style="text-align: center;text-decoration-color: #9B9B9B;">Explore the world with Intense! We offer you a vast variety of tours of all types featuring both exotic and already well-known destinations, some of which are listed below.</p>
      </div>

		
		
		
		
		
		
		<?php if( have_rows('feature_tours') ): ?>

<div class="row">
	<?php while( have_rows('feature_tours') ): the_row(); 
	
    $title = get_sub_field('title');
	$detail = get_sub_field('details');
	$image = get_sub_field('image');	
		?>
	
<div class="col-md-6 col-lg-3">
          <div class="portfolio-item mx-auto">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
    
            </div>
            <img style="width: 100%;" class="img-fluid" src="<?php echo $image['url']; ?>" alt="">
          </div>
			<div style="text-align: center">
			<h5><?php echo $title; ?></h5>
			<p><?php echo $detail; ?></p>
				<button style="background: #FF6B6B;border-radius: 80px; width: 60%;" class="text-white  btn btn-sm "><center><span class="fa fa-paper-plane"></span> READ MORE</center></button>
			</div>
			<br>
        </div>
		
	<?php endwhile; ?>
</div>


<?php endif; ?>
		
		
		
		
		
		
		
		
		
		
      <!-- Portfolio Grid Items -->
      

        <!-- Portfolio Item 1 -->
        

        <!-- Portfolio Item 2 -->
          

        <!-- Portfolio Item 3 -->
          

        <!-- Portfolio Item 4 -->
          

        <!-- Portfolio Item 5 -->
        

        <!-- Portfolio Item 6 -->
        

      
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  <section  class="page-section text-white ">
   <div class="carousel-item active">
      <img style=" width: 100%;
    height: 100%;" src="<?php bloginfo('template_directory'); ?>/img/portfolio/bg.png" alt="New York">
      <div class="carousel-caption">
         <h3 style="font-size: 18px" >We Provide Only the Best Tours</h3>
		  <p style="font-size: 10px">With more than 230 trips to worldwide destinations, including Europe, North & Central, South America, Asia, 
Australia & New Zealand, we continue to offer new ways and the best tours for traveling every year.</p>
        <button style="border-radius: 80px; width: auto;" data-toggle="modal" data-target="#exampleModalCenter" class=" btn btn-sm btn-outline-light"><center><span class="fa fa-paper-plane"></span> GET IN TOUCH</center></button>
      </div>  
		
    </div>
  </section>
  
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center mb-0">Why Us?</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        
      </div>

      <!-- Contact Section Form -->
      <div class="container text-center">
  <div  class=" row">
     <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="mb-4"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio/Group 34@2x.png" alt=""></h4>
		 <p class="lead mb-1">The Best Service</p>
          <p class="">Our aim is to provide you with the tour service of the top quality, and we'll do our best to find the suitable tour for you.</p>
        </div> <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="mb-4"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio/1 (2).png" alt=""></h4>
		 <p class="lead mb-1">Everything is included</p>
          <p class="">There are dozens of aspects to pay attention to, while organizing a trip, and we’ll make sure your tour includes everything you need.</p>
        </div> <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="mb-4"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio/3 (2).png" alt=""></h4>
		 <p class="lead mb-1">Great Prices</p>
          <p class="">All our tours and excursions are available at really affordable prices so you can always pick a great destination.</p>
        </div>
  </div>
</div>

    </div>
  </section>
	
<section style="background: #F5F5F5" class="page-section">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center mb-0">Our Partners</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        
      </div>

      <!-- Contact Section Form -->
      <div class="container text-center">
  <div  class=" row">
     <div class="col-lg mb-5 mb-lg-0">
          <h4 class="mb-4"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio/client-01-144x63@2x.png" alt=""></h4>
		 
        </div> 
	  <div class="col-lg mb-5 mb-lg-0">
          <h4 class="mb-4"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio/client-02-144x63@2x.png" alt=""></h4>
		 
        </div> 
	  <div class="col-lg mb-5 mb-lg-0">
          <h4 class="mb-4"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio/client-03-144x63@2x.png" alt=""></h4>
		 
        </div>
	  <div class="col-lg mb-5 mb-lg-0">
          <h4 class="mb-4"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio/client-04-144x63@2x.png" alt=""></h4>
		 
        </div>
	   <div class="col-lg mb-5 mb-lg-0">
          <h4 class="mb-4"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio/client-05-144x63@2x.png" alt=""></h4>
		 
        </div>
	   <div class="col-lg mb-5 mb-lg-0">
          <h4 class="mb-4"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio/client-06-144x63@2x.png" alt=""></h4>
		 
        </div>
	  
  </div>
</div>

    </div>
  </section>
	
<section class="page-section">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center mb-0">What Our Clients Say</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        
      </div>

      <!-- Contact Section Form -->
      <div class="container text-center">
  <div>
     <div>
          <h4 class="mb-4"><img width="100%" src="<?php bloginfo('template_directory'); ?>/img/portfolio/111.png
			  " alt=""></h4>
		 
        </div>  
  </div>
</div>

    </div>
  </section>

<?php get_footer(); ?>