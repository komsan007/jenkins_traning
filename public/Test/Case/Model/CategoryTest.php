<?php
App::uses('Category', 'Model');

/**
 * Category Test Case
 *
 */
class CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Category = ClassRegistry::init('Category');
	}
        
        
        public function testGenerateCategoryList() {
		$categories  = $this->Category->generateCategoryList() ;
                $this->assertEquals(6,count($categories));
                 $this->assertTrue(empty($categories[0]));
                  $this->assertEquals('fast food',$categories[1]);
        }   
        
        
         public function testGenerateCategoryListOrderASC() {
             $order = 'desc';
		$categories  = $this->Category->generateCategoryList($order) ;
                //debug($categories);
                //$first =array_shift($categories);
                $sortCat =$orgCat = array_values($categories);
                //echo "Org Cat #####################";
                //debug($orgCat);
                
                //echo "Sort Cat #####################";
                //debug($sortCat);
                
                //echo "RSort Cat #####################";
                rsort($sortCat);
                //debug($sortCat);
                              
                $this->assertEquals($sortCat , $orgCat);
                //$this->assertTrue(count($orgCat));
                
        }  

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Category);

		parent::tearDown();
	}

}
