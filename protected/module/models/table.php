<?php
namespace Module\Models;

use Kecik\Model;

/**
 * Class Table
 * @package Module\Model
 */
class Table extends Model 
{
    protected static $table = 'table';

    /**
     * Table constructor.
     * @param string $id
     */
    public function __construct($id = '') 
    {
        parent::__construct($id);
    }

}