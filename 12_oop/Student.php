<?php

 require_once "Person.php";
class Student extends Person
{
    public string $studentID;

    public function __construct($name, $sirName, $studentID)
    {
        $this->studentID = $studentID;
        
      //  parent __construct($name, $sirName);
    }

}