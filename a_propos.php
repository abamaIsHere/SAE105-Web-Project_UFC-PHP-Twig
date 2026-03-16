<?php
include('include/twig.php');
$twig = init_twig();

include('include/fighters.php');
include('include/data.php');


echo $twig->render('a_propos.twig', [
    'title' => 'a propos',
    'fighter_profile' => $article_fighters1,
    'extra_player' => 'LOPES_DIEGO',
    'drop_down_menu_fighters' => $article_fighters_menu,
    'drop_down_menu_match' => $match_article1_menu,
    'drop_down_menu_actu' => $article_news_menu
])
?>