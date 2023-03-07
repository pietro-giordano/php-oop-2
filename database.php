<?php

require_once __DIR__ . '/models/Categories.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Kennels.php';
require_once __DIR__ . '/models/Games.php';

$cats = new Category('Gatti', '&#128049;');
$dogs = new Category('Cani', '&#128054;');

$products = [
      new Food('Crocchette', './images/Crocchette.png', 20.99, 1, [$cats, $dogs]),
      new Kennel('Ciuccia Rettangolare', './images/Cuccia-Rettangolare.jpg', 70.99, 1, [$dogs]),
      new Kennel('Ciuccia Rotonda', './images/Cuccia-Rotonda.jpg', 69.99, 1, [$cats, $dogs]),
      new Kennel('Lettiera Vegetale', './images/Lettiera-Vegetale.jpg', 40.99, 1, [$cats]),
      new Game('Corda per cani', './images/corda-cane.jpg', 10.99, 1, [$dogs])
];
