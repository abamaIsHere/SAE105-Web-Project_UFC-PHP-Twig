<?php
include('include/twig.php');
$twig = init_twig();

include('include/data-en.php');
include('include/fighters-en.php');
echo $twig->render('a_propos.twig', [
    'title' => 'about',
    'fighter_profile' => $article_fighters1,
    'extra_player' => 'LOPES_DIEGO',
    'lang' => 'en',
    'drop_down_menu_fighters' => $article_fighters_menu,
    'drop_down_menu_match' => $match_article1_menu,
    'drop_down_menu_actu' => $article_news_menu
]);
?>