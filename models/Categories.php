<?php

require_once __DIR__ . '/../traits/name.php';

class Category
{
      use name;
      public $icon;

      public function __construct(string $_name, string $_icon)
      {
            if (strlen($_name) > 3) {
                  $this->name = $_name;
            } else {
                  throw new Exception('Stringa nome prodotto troppo corta');
            }

            $this->icon = $_icon;
      }
}
