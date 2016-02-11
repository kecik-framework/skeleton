<?php
namespace Team\Module2\Models;

use Kecik\Model;

/**
 * Class Table
 * @package Team\Module2\Model
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