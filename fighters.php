<?php
include('include/twig.php');
$twig = init_twig();

include('include/fighters.php');

echo $twig->render('fighters.twig', [
    'title' => 'Combattants',
    'profile_article' => $fighters_profile,
    // 'lang'=>'en'
])
?>