<?php
App::uses('Post', 'Model');

/**
 * Post Test Case
 *
 */
class PostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post',
                'app.category',
                'app.user'

	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Post = ClassRegistry::init('Post');
	}


     //create function that gett post that contain Category name ,User name ,can filter by Category id



           public function testGetPost(){
            $posts =$this->Post->getPost();
            //debug($posts);
            $this->assertTrue(count($posts)>0);
            $this->assertTrue(!empty($posts[0]['Category']['name']));
            $this->assertTrue(!empty($posts[0]['User']['username']));  
           }


          public function testGetPostByCategory(){
              $posts =$this->Post->getPost(1);
              $categoryId = Hash::extract($posts,'{n}.Post.category_id');
               debug($categoryId);
              $categoryId = array_unique($categoryId);
              echo "After Unique ################### ";
              debug($categoryId);
            $this->assertEquals(1,count($categoryId));
            $this->assertEquals($categoryId[0],1); 
          }

          //public function testgetPostByEmptyCategory(){
              //$posts =$this->Post->getPost();
          //}



 
 

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Post);

		parent::tearDown();
	}

}
