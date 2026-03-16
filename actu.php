<?php
include('include/twig.php');
$twig = init_twig();

include('include/actu.php');

echo $twig->render('actu.twig', [
    'title' => 'Actualités',
    'newses' => $category_matchs
])
?>
