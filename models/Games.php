<?php

require_once __DIR__ . '/Products.php';

class Game extends Product
{
      public function print()
      {
            $this->printProduct();

            echo '<p class="card-text">Tipologia: Giochi</p>';
            echo '</div>';
            echo '</div>';
      }
}
