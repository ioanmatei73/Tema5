<?php
get_header();

if ( have_posts() ) {
    
    while ( have_posts() ) {
        
        the_post();
       
		echo '<h1>' . get_the_title() . '</h1>';
		
        the_content();

		echo '<h6>License validity: ' . get_field( 'license_validity' ) . ' days.</h6>';

        echo '<h6>Price: ' . get_field( 'price' ) . ' EUR</h6>';
    }
}

get_footer();