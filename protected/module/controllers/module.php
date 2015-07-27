<?php
namespace Module\Controller;

use Kecik\Controller;

class Module extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return $this->view('index_hmvc');
    }

    public function create() {
        $table = new \Module\Model\Table();
            $table->field = $this->request->post('field');
        $table->save();
    }

    public function update() {
        $table = new \Module\Model\Table(array('id' => $this->request->post('id')));
            $table->field = $this->request->post('field');
        $table->save();
    }

    public function delete() {
        $table = new \Module\Model\Table(array('id' => $this->request->post('id')));
        $table->delete();
    }

    public function read($id='') {
        if (empty($id))
            $rows = \Module\Model\Table::find();
        else {
            $rows = \Module\Model\Table::find(array(
                'where'=>array(
                    'id' => $this->request->post('id')
                )
            ));
        }
        return json_encode($rows);
    }
}