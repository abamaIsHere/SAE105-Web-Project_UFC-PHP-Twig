<?php
include('include/twig.php');
$twig = init_twig();


include('include/data.php');
echo $twig->render('base.twig', [
    'title' => 'Accueil',
    'top_stories' => $top_stories,
    'drop_down_menu_fighters' => $article_fighters_menu,
    'drop_down_menu_match' => $match_article1_menu,
    'drop_down_menu_actu' => $article_news_menu,
    'home_short_article' => $home_article_list,
    'home_slide_bar' => $home_slide_section
])
?>
