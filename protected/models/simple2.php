<?php
/**
 * Created by PhpStorm.
 * User: dnaextrim
 * Date: 2/11/2016
 * Time: 14:22
 */
namespace Models;

use \Kecik\Model;

class Simple2 extends Model 
{
        protected static $table = 'table_name';
        
    /**
     * Simple2 constructor.
     */
    public function __construct($id='') 
    {
        parent::__construct($id);
    }
    
    /**
     * Manipulate value of field when use find function
     * Example:
     * $rows = \Models\Model::find();
     *
     * the return value of field now will modified not origin value
     * @return array
     */
    public static function callback()
    {
        return array(
            /*'field_name' => function ($value, $row) {
                return $value;
            }*/
        );
    }
    
    /**
     * Manipulate value before insert and update process
     * @return array
     */
    public function before()
    {
        return array(
            'insert' => array(
            
            ),
            'update' => array(
            
            )
        );
    }
    
    /**
     * Event after of insert and update process
     */
    public function after()
    {
        return array(
            'insert' => function ($data) {
            
            },
            'update' => function ($data) {
            
            }
        );
    }
    
    /**
     * Relational declaration to another Models 
     * is same BelongTo of Other Framework
     * @return array
     */
    public static function relational()
    {
        return array(
            // array('Model2', 'field_on_model1', 'field_on_model2')
        );
    }
    
}