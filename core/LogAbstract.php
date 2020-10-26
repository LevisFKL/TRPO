<?php
namespace core;
	
abstract class LogAbstract {
   protected static $i;

   private function __construct() {
   }

public static function Instance() {
      if (!(static::$i instanceof static)) {
         static::$i = new static();
      }
      return static::$i;
   }

   protected $log = array();

   abstract public function _write();
}

?>