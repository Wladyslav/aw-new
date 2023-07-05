<?php 

include(get_template_directory().'/global.php');

$context['page'] = new Timber\Post();

$context['kariera'] = Timber::get_posts( array(
        'post_type' => 'kariera',
        'posts_per_page' => -1,
        'orderby' => array(
            'date' => 'DESC'
        ))
);


Timber::render('views/archive-career.twig', $context );
