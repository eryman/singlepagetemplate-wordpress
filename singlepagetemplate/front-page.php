<?php get_header(); ?>

    
    <section class="container-fluid content-section" id="services"> 
      <div class="row text-center section-head">
        <h2>Services</h2>
      </div>     
      <div class="row text-center">
        <br>
        <div class="col-lg-8 col-lg-offset-2">
	  	<?php 
		$query = new WP_Query( 'pagename=services' );
		$services_id = $query->queried_object->ID;
	
	
		/* Restore original Post Data */
		wp_reset_postdata();
	
		$args = array(
			'post_type' => 'page',
			'post_parent' => $services_id
		);
		$services_query = new WP_Query( $args );
		
		// The Loop
		if ( $services_query->have_posts() ) {
			
			while ( $services_query->have_posts() ) {
				$services_query->the_post();
				echo '<div class="col-md-4">';
				//echo '<a href="' . get_permalink() . '" title="Learn more about ' . get_the_title() . '">';
				echo '<img src="' . get_the_post_thumbnail_url() . '">';
				echo '<h3 class="services-title">' . get_the_title() . '</h3>';
				//echo '</a>';
				echo '<div class="services-lede">';
				the_content();
				echo '</div>';
				echo '</div>';
			}
		}
	
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
		<div class="col-lg-12 text-center">
			<a href="#about" class="btn btn-primary btn-default page-scroll">
                          <i class="fa fa-angle-double-down animated"></i>
                          About Us
                          <i class="fa fa-angle-double-down animated"></i>
                        </a>
		</div>
        </div>
      </div>
    </section>
    
    
        
    <section class="container-fluid content-section about" id="about">
      <div class="row text-center section-head">
        <h2>About Us</h2>
      </div>
      <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2">
          <?php
          $query = new WP_query( 'pagename=about' );
          // The Loop
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              echo '<p>';
              the_content();
              echo '</p>';
              
              wp_reset_postdata();
            }
          }
          ?>
          <br>
          <a href="#contact" class="btn btn-primary btn-default page-scroll">
            <i class="fa fa-angle-double-down animated"></i>
            Get in touch today            
            <i class="fa fa-angle-double-down animated"></i>
          </a> 
          <a href="<?php echo get_site_url() . '/blog'; ?>" class="btn btn-primary btn-default">
            Check out our blog
            <i class="fa fa-angle-double-right animated"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- section class="container-fluid content-section" id="blog">      
      <div class="row text-center section-head">
        <h2>Blog</h2>
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <?php
          $query = new WP_query( 'pagename=blog' );
          // The Loop
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
	      get_template_part( 'template-parts/content', '' );
              
              wp_reset_postdata();
            }
          }
          ?>
        </div>
      </div>
    </section -->

    

    <section class="container-fluid content-section contact" id="contact">
      <div class="row text-center section-head">
        <h2>Contact</h2>
      </div>
        <div class="row text-center">
          <div class="col-lg-8 col-lg-offset-2">

            <p>Get in touch today and well get back to you as soon as possible!</p>

            <form action="<?php echo 'https://formspree.io/' . get_bloginfo( 'admin_email' ) ?>" method="POST" id="contactForm" name="{{ email }}" novalidate>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <textarea type="text" rows="5" class="form-control" placeholder="Message" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
                
              <br>
              <div id="success"></div>
              <div class="row">
                <div class="form-group col-xs-12">
                  <input type="submit" class="btn btn-primary btn-default" value="Send">
                </div>
              </div>
            </form>   
            
            <a href="#team" class="btn btn-primary btn-default page-scroll">
              <i class="fa fa-angle-double-down animated"></i>
              Meet the Team
              <i class="fa fa-angle-double-down animated"></i>
            </a>       
            
            
            <p></p>
            
            <!-- /div -->
        </div>
      </div>
    </section>
    

    <section class="container-fluid content-section" id="team">    
      <div class="row text-center section-head">
        <h2>Meet the Team</h2>
      </div>  
      <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2">
          <?php
          $query = new WP_query( 'pagename=team' );
	  $team_id = $query->queried_object->ID;
          // The Loop
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              echo '<p>';
              the_content();
              echo '</p>';
              
              wp_reset_postdata();
            }
          }
          
          $args = array(
			'post_type' => 'page',
			'post_parent' => $team_id
		);
		$team_query = new WP_Query( $args );
		
		// The Loop
		if ( $team_query->have_posts() ) {
			while ( $team_query->have_posts() ) {
				$team_query->the_post();
				echo '<div class="col-md-4">';
				//echo '<a href="' . get_permalink() . '" title="Learn more about ' . get_the_title() . '">';
				echo '<img src="' . get_the_post_thumbnail_url() . '">';
				echo '<h3 class="services-title">' . get_the_title() . '</h3>';
				//echo '</a>';
				echo '<div class="services-lede">';
				the_content();
				echo '</div>';
				echo '</div>';
			}
		}
	
		/* Restore original Post Data */
		wp_reset_postdata();
          ?>

        </div>
      </div>
    </section>    


<?php get_footer(); ?>