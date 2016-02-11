<?php
namespace Models;

use Kecik\Model;

/**
 * Class Simple
 * @package Model
 */
class Simple extends Model
{
    protected static $table = 'table_name';

    /**
     * Simple constructor.
     * @param string $id
     */
    public function __construct($id = '')
    {
        parent::__construct($id);
    }
}
