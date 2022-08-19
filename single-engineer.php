<?php
get_header();

if ( have_posts() ) {
    
    while ( have_posts() ) {
        
        the_post();
       
		echo '<h1>' . get_the_title() . '</h1>';
		
        the_content();

        $dob = get_field( 'date_of_birth' );
        $bdate = explode( '/' , $dob );
        $bday = new DateTime( $bdate[2].$bdate[1].$bdate[0] );
        $age = $bday -> diff(new DateTime);
        echo '<h4>Age: ' . $age -> y . ' years old</h4><br>';
        
        $software = get_field( 'software' );
        foreach( $software as $soft ) {
            echo '<h5>' . get_the_title($soft) . '</h5>';
        }
    }
}

get_footer();