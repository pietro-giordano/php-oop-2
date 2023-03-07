<?php

require_once __DIR__ . '/Products.php';

class Game extends Product
{
      public static $type = 'Game';

      public function print()
      {
            $this->printProduct();

            echo '<p class="card-text">Tipologia: ' . self::$type . '</p>';
            echo '</div>';
            echo '</div>';
      }
}
