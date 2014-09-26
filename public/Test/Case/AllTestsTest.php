<?php

Class AllTestsTest extends CakeTestSuite {
    
    
    public static function suite(){
        $suite = new CakeTestSuite('All Test');
        $suite->addTestDirectoryRecursive(TESTS . 'Case');
        return $suite;
    }
    
}


?>