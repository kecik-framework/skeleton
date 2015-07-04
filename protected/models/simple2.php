<?php
namespace Model;

use Kecik\Model;

class Simple extends Model {
    protected static $table='table_name';

    public function __construct($id='') {
        parent::__construct($id);
    }

    /**
     * Manipulate value of field when we use find function Example: 
     * 
     * $rows = \Model\Users::find();
     * 
     * the return value of field now will modified not origin value
     */
    public function callback() {
        // Enable this For Manipulate Some field end Disable for manipulate All field
        return array(
            'field' => function($value, $row) {
                return $value;
            }
        );

        /*
        // Enable this For Manipulate All field
        return function($value, $row) {
            return $value;
        }
        */
    }

    /**
     * Manipulate value before for insert and update proccess
     */
    public function before() {
        return array(
            'insert' => array(
                'field' => 'value'
            ),

            'update' => array(
                'field' => 'value'
            )
        );
    }

    /**
     * Call for insert and update proccess
     */
    public function after() {
        return array(
            'insert' => function($data) {

            },

            'update' => function($data) {

            }
        ),
    }
}
