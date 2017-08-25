<?php
	if ( is_front_page() ) {
		get_template_part( 'template-parts/content', 'header-front' );
	}
	else {
		get_template_part( 'template-parts/content', 'header-blog' );
	}
?>