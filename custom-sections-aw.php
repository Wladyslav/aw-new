<?php /* Template Name: AW Custom sections */



use Timber\Timber;
include(get_template_directory().'/global.php');
$context['employees'] = Timber::get_posts( array(
    'post_type' => 'employees',
    'posts_per_page' => -1,
));

Timber::render( array( 'custom-sections-aw-' . $post->ID . '.twig', 'custom-sections-aw.twig' ), $context );
