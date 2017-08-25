<?php get_header() ?>

<section class="container-fluid" id="blog">
      <div class="row text-center section-head">
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
 
	<?php
		if ( !is_home() ) {
			the_post();
			get_template_part( 'template-parts/content', 'single' );
		}
		elseif( have_posts() ) {
			echo '<h2>Recent Articles</h2>';
			while( have_posts() ) { 
				the_post();
				get_template_part( 'template-parts/content', '' );
			}
			the_posts_pagination();
		}
		else {
			get_template_part( 'template-parts/content', 'none' );
		}
		
	?>
        </div>
      </div>
    </section>

<?php get_footer() ?>