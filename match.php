<?php
include('include/twig.php');
$twig = init_twig();

include('include/matchs.php');



echo $twig->render('match.twig', [
    'title' => 'les matchs',
    'matchs_article' => $category_matchs,
    'match_side_bar_items' => $side_bar_for_matches,
    'section_title' => 'past matches',
])
?>
