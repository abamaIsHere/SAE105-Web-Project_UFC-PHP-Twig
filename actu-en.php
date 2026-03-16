<?php
include('include/twig.php');
$twig = init_twig();

include('include/actu-en.php');

echo $twig->render('actu.twig', [
    'title' => 'News',
    'lang' => 'en',
    'newses' => $category_matchs
])
?>
