<?php
namespace Team\Module1\Controllers;

use Kecik\Controller;

/**
 * Class Module1Controller
 * @package Team\Module1\Controller
 */
class Module1Controller extends Controller
{

    /**
     * Module1Controller constructor.
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
        $table = new \Team\Module1\Model\Table();
        $table->field = $this->request->post('field');
        $table->save();
    }

    /**
     *
     */
    public function update()
    {
        $table = new \Team\Module1\Model\Table(array('id' => $this->request->post('id')));
        $table->field = $this->request->post('field');
        $table->save();
    }

    /**
     *
     */
    public function delete()
    {
        $table = new \Team\Module1\Model\Table(array('id' => $this->request->post('id')));
        $table->delete();
    }

    /**
     * @param string $id
     * @return string
     */
    public function read($id = '')
    {
        if (empty($id)) {
            $rows = \Team\Module1\Model\Table::find();
        } else {
            $rows = \Team\Module1\Model\Table::find(array(
                'where' => array(
                    'id' => $this->request->post('id')
                )
            ));
        }
        return json_encode($rows);
    }
}