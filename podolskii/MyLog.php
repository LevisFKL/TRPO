<?php namespace podolskii;

use core\LogAbstract;
use core\LogInterface;


Class MyLog extends LogAbstract implements LogInterface {

    public function _log(String $str){
        $this->log[]=$str;
    }

    /**
     * @param String $str строка для записи в массив лога
     */
    public static function log(String $str){
        self::Instance()->_log($str);
	}
    
    public function _write(){
        
        foreach($this->log as $value){
            echo $value."\n";
        }
        
    }
    
    public static function write(){
        self::Instance()->_write();
    }

}

?>