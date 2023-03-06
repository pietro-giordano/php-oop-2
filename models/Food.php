<?php

require_once __DIR__ . '/Products.php';

class Food extends Product
{
      public function print()
      {
            $this->printProduct();

            echo '<p class="card-text">Tipologia: Cibo</p>';
            echo '</div>';
            echo '</div>';
      }
}
