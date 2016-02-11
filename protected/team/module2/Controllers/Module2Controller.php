<?php
namespace Team\Module2\Controllers;

use Kecik\Controller;

/**
 * Class Module2Controller
 * @package Team\Module2\Controller
 */
class Module2Controller extends Controller
{

    /**
     * Module2Controller constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function index()
    {
        return $this->view('index_team_hmvc');
    }

    /**
     *
     */
    public function create()
    {
        $table = new \Team\Module2\Model\Table();
        $table->field = $this->request->post('field');
        $table->save();
    }

    /**
     *
     */
    public function update()
    {
        $table = new \Team\Module2\Model\Table(array('id' => $this->request->post('id')));
        $table->field = $this->request->post('field');
        $table->save();
    }

    /**
     *
     */
    public function delete()
    {
        $table = new \Team\Module2\Model\Table(array('id' => $this->request->post('id')));
        $table->delete();
    }

    /**
     * @param string $id
     * @return string
     */
    public function read($id = '')
    {
        if (empty($id)) {
            $rows = \Team\Module2\Model\Table::find();
        } else {
            $rows = \Team\Module2\Model\Table::find(array(
                'where' => array(
                    'id' => $this->request->post('id')
                )
            ));
        }
        return json_encode($rows);
    }
}