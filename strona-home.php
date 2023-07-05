<?php /* Template Name: Home1 */

include(get_template_directory().'/global.php');

$context['page']    = new Timber\Post();

$context['posts'] = Timber::get_posts( array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => array(
            'date' => 'DESC'
        ))
);

$context['posts_home'] = Timber::get_posts( array(
    'post_type' => 'post',
    'posts_per_page' => 8,
    'category_name' => 'Home',
    'orderby' => array(
        'date' => 'DESC'
    ))
);


$context['consultations'] = Timber::get_posts( array(
        'post_type' => 'konsultacje',
        'posts_per_page' => 6,
        'orderby' => array(
            'date' => 'ASC'
        ))
);

$context['opinions'] = Timber::get_posts( array(
        'post_type' => 'opinie',
        'posts_per_page' => 10,
        'orderby' => array(
            'date' => 'ASC'
        ))
);

Timber::render('views/strona-home.twig', $context );

//get_footer();
