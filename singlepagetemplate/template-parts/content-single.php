<div class="blog-post">
<h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
<div class="postinfo">
<p>Author: <a href='mailto:<?php the_author_email()?>'><?php the_author() ?></a>
<span>   Posted: <?php the_weekday() ?>, <?php the_date()?>, <?php the_time() ?></span></p>
<p><?php the_tags() ?></p>
</div>
<div class="content">
	<?php the_content() ?>
</div>
<div class="navigation">
	<?php the_post_navigation() ?>
</div>
<div class="comments">
	<?php comments_template() ?>
</div>
</div>