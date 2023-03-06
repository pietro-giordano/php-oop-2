<?php

require_once __DIR__ . '/models/Categories.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Kennels.php';
require_once __DIR__ . '/models/Games.php';

$cats = new Category('Gatti');
$dogs = new Category('Cani');

$products = [
      new Food('./images/Crocchette.png', 'Crocchette', 20.99, 1, [$cats, $dogs]),
      new Kennel('./images/Cuccia-Rettangolare.jpg', 'Ciuccia Rettangolare', 70.99, 1, [$dogs]),
      new Kennel('./images/Cuccia-Rotonda.jpg', 'Ciuccia Rotonda', 20.99, 1, [$cats, $dogs]),
      new Kennel('./images/Lettiera-Vegetale.jpg', 'Lettiera Vegetale', 20.99, 1, [$cats])
];
