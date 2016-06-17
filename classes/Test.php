<?php
class Test {

    public static $first_name = "Luciano";
    public $last_name = "van Hoorn";

    public function getUser() {
      //return self::$first_name;
      return $this->last_name;
    }

    public static function getFirstName() {
      //return  self::$first_name;
      //return self::$last_name;
      //return $this->last_name;
    }
}

 ?>
