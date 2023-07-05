<?php 

include(get_template_directory().'/global.php');

$posts = new Timber\PostQuery([
    'post_type' => 'slownik',
    'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page' => -1
]);

// Grupowanie postów według pierwszej litery tytułu
$grouped_posts = [];
foreach ($posts as $post) {
    $first_letter = strtoupper(mb_substr($post->title, 0, 1));
    $grouped_posts[$first_letter][] = $post;
}
$context['grouped_posts'] = $grouped_posts;

Timber::render('views/archive-slownik.twig', $context );
