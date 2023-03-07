<?php

require_once __DIR__ . '/Products.php';

class Kennel extends Product
{
      public static $type = 'Cuccia';

      public function print()
      {
            $this->printProduct();

            echo '<p class="card-text">Tipologia: ' . self::$type . '</p>';
            echo '</div>';
            echo '</div>';
      }
}
