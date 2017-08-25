<div class="container-fluid post">
	<div class="col-sm-3 post-thumbnail">
	    <img src="<?php the_post_thumbnail_url() ?>" class="thumbnail">
	</div>
	<div class="col-sm-9 post-option">
	    <h3><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h3>
	    <div class="content">
	        <div class="postinfo">
	           <p>Author: <a href='mailto:<?php the_author_email()?>'><?php the_author() ?></a>
	            <span> | Posted: <?php the_weekday() ?>, <?php the_date()?>, <?php the_time() ?></span>
	            <span> | <?php the_tags() ?></span></p>
	        </div>
	    </div>
	    <div class="post-excerpt">
	        <?php the_excerpt() ?>
	    </div>    
	    <div class="navigate">
	        <?php the_posts_navigation(); ?>
	    </div>
	</div>
</div>