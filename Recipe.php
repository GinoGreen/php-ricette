<?php
   class Recipe {
      public $name;
      public $ingrediants;
      public $description;
      public $process;
      public $cooking_time;
      public $difficulty = 3;

      function __construct($_name) {
         $this->name = $_name;
      }

      public function setProcess($_process) {
         $this->process = $_process;
      }

      public function getDiffuculty() {
         $stringDifficulty = 'difficile';
         if ($this->difficulty <= 3) {
            $stringDifficulty = 'facile';
         } else if ($this->difficulty <= 8) {
            $stringDifficulty = 'media';
         }
         return $stringDifficulty;
      }

      public function getExceptedDescription($length = 20) {
         return substr($this->description, 0, $length) . "...";
      }
   }