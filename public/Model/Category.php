<?php

App::uses('AppModel', 'Model');

/**
 * Category Model
 *
 */
class Category extends AppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'category';

    public function generateCategoryList($s="") {
          // return $this->find('list');
         //return $this->find('list',array('order'=>array('name')));
          return $this->find('list',array('order'=>array('name'=>$s)));
    }

}
