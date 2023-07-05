<?php /* Template Name: Home */

include(get_template_directory().'/global.php');

$context['page'] = new Timber\Post();

$context['posts'] = Timber::get_posts( array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => array(
            'date' => 'DESC'
        ))
);

Timber::render('views/page-home.twig', $context );

get_footer();
