<?php
include('include/twig.php');
$twig = init_twig();

include('include/matchs-en.php');

echo $twig->render('match.twig', [
    'title' => 'Matches',
    'matchs_article' => $category_matchs,
    'match_side_bar_items' => $side_bar_for_matches,
    'section_title' => 'Last matches',
    'lang' => 'en'
])
?>
