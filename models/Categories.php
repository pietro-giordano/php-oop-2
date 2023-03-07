<?php

require_once __DIR__ . '/../traits/name.php';

class Category
{
      use name;
      public $icon;

      public function __construct(string $_name, string $_icon)
      {
            $this->name = $_name;
            $this->icon = $_icon;
      }
}
