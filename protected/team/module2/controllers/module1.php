<?php
namespace Team\Module2\Controller;

use Kecik\Controller;

class Module1 extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return $this->view('index_team_hmvc');
    }

    public function create() {
        $table = new \Team\Module2\Model\Table();
            $table->field = $this->request->post('field');
        $table->save();
    }

    public function update() {
        $table = new \Team\Module2\Model\Table(array('id' => $this->request->post('id')));
            $table->field = $this->request->post('field');
        $table->save();
    }

    public function delete() {
        $table = new \Team\Module2\Model\Table(array('id' => $this->request->post('id')));
        $table->delete();
    }

    public function read($id='') {
        if (empty($id))
            $rows = \Team\Module2\Model\Table::find();
        else {
            $rows = \Team\Module2\Model\Table::find(array(
                'where'=>array(
                    'id' => $this->request->post('id')
                )
            ));
        }
        return json_encode($rows);
    }
}