<?php
include('include/twig.php');
$twig = init_twig();

include('include/fighters-en.php');

echo $twig->render('fighters.twig', [
    'title' => 'fighters',
    'profile_article' => $fighters_profile,
    'lang' => 'en'
])
?>
