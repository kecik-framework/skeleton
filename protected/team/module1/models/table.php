<?php
namespace Team\Module1\Model;

use Kecik\Model;

class Table extends Model {
    protected static $table = 'table';

    public function __construct($id='') {
        parent::__construct($id);
    }
}