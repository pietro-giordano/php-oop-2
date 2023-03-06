<?php

require_once __DIR__ . '/models/Products.php';
require_once __DIR__ . '/models/Categories.php';

$cats = new Category('Gatti');
$dogs = new Category('Cani');

$products = [
      new Product('./images/Crocchette.png', 'Crocchette', 20.99, 1, ['Gatti', 'Cani'], 'Cibo'),
      new Product('./images/Cuccia-Rettangolare.jpg', 'Ciuccia Rettangolare', 70.99, 1, ['Cani'], 'Cucce'),
      new Product('./images/Cuccia-Rotonda.jpg', 'Ciuccia Rotonda', 20.99, 1, ['Gatti', 'Cani'], 'Cucce'),
      new Product('./images/Lettiera-Vegetale.jpg', 'Lettiera Vegetale', 20.99, 1, ['Gatti'], 'Lettiere')
];
