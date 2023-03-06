<?php

require_once __DIR__ . '/Products.php';

class Kennel extends Product
{
      public function print()
      {
            $this->printProduct();

            echo '<p class="card-text">Tipologia: Cucce</p>';
            echo '</div>';
            echo '</div>';
      }
}
