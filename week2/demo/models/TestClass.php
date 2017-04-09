<?php

class TestClass {
        
    private $test;    //starts off as null
    //magic method
    public function __construct($test) {
        $this->setTest($test);
    }
    
    public function getTest() {
        return $this->test;
    }
    /**
     * 
     * @param type $test
     * @throws Exception
     */
    public function setTest($test) {
        if ( !is_string($test) ) {
            throw new Exception('only string allowed for test');
        }
        $this->test = $test;
    }  
    
    /**
     * 
     * @return string
     */
   public function functionName() {
       
       $bob = "Hi Mom";
       
       return $bob;
   } 
}
