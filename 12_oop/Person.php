<?php
 class Person{
    public $name;
    public $sirName;
    private $age;
    public static $counter = 0;

    public function __construct($name, $sirName)
    {
        $this-> name = $name;
        $this->sirName = $sirName;
        
    }
    public function setAge ($age)
    {
        $this ->age = $age;
    }

    public static function getCounter()
    {
        return self :: $counter;
    }
}