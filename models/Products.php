<?php

class Product
{
      public $img;
      public $title;
      public $price;
      public $disponibility;
      public $categories;
      public $type;

      public function __construct(string $_img, string $_title, float $_price, int $_disponibility, array $_categories, $_type)
      {
            $this->img = $_img;
            $this->title = $_title;
            $this->price = $_price;
            $this->disponibility = $_disponibility;
            $this->categories = $_categories;
            $this->type = $_type;
      }

      public function printProduct()
      {
            echo '<div class="card">';
            echo '<img src="' . $this->img . '" card="card-img-top">';

            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $this->title . '</h5>';
            echo '<p class="card-text">Prezzo: ' . $this->price . '€</p>';

            if ($this->disponibility == 0) {
                  echo '<p class="card-text">Disponibilità: Non disponibile</p>';
            } else if ($this->disponibility == 1) {
                  echo '<p class="card-text">Disponibilità: Disponibile</p>';
            }

            echo '<p class="card-text">Categorie: ';
            foreach ($this->categories as $category) {
                  echo $category;
            }
            echo '</p>';
            echo '<p class="card-text">Tipologia: ' . $this->type . '</p>';

            echo '</div>';
            echo '</div>';
      }
}
