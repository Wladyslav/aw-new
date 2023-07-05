<?php /* Template Name: AW Custom sections */



use Timber\Timber;

$context = Timber::context();
$context['post'] = Timber::get_post();
$context['employees'] = Timber::get_posts( array(
    'post_type' => 'employees',
    'posts_per_page' => -1,
));

Timber::render( array( 'custom-sections-aw-' . $post->ID . '.twig', 'custom-sections-aw.twig' ), $context );
