<?php

require_once __DIR__ . '/Products.php';

class Food extends Product
{
      public static $type = 'Cibo';

      public function print()
      {
            $this->printProduct();

            echo '<p class="card-text">Tipologia: ' . self::$type . '</p>';
            echo '</div>';
            echo '</div>';
      }
}
