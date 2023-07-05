<?php
include(get_template_directory().'/global.php');


$context['menu_footer_1']     = new Timber\Menu('Menu Footer 1');
$context['menu_footer_2']     = new Timber\Menu('Menu Footer 2');

$context['menu_new_footer_1']   = new Timber\Menu('Menu New Footer 1');
$context['menu_new_footer_2']   = new Timber\Menu('Menu New Footer 2');
$context['menu_new_footer_3']   = new Timber\Menu('Menu New Footer 3');
$context['menu_new_footer_4']   = new Timber\Menu('Menu New Footer 4');
$context['menu_new_footer_5']   = new Timber\Menu('Menu New Footer 5');
if(is_front_page()) {
    Timber::render('views/footer-home.twig', $context );
} else {
    Timber::render('views/footer-home.twig', $context );
}

?>
