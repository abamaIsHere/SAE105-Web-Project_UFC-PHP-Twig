<?php
include('include/twig.php');
$twig = init_twig();
include('include/data-en.php');
echo $twig->render('contact.twig', [
    'title' => 'Contact',
    'lang' => 'en',
    'drop_down_menu_fighters' => $article_fighters_menu,
    'drop_down_menu_match' => $match_article1_menu,
    'drop_down_menu_actu' => $article_news_menu
])
?>