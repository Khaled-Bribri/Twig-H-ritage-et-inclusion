<?php
require_once __DIR__ . '/../config/twig.php';
$name = 'Wilder';
echo $twig->render('layout.html.twig', ['name' => $name]);