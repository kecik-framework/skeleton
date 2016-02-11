<?php
namespace Module\Controllers;

use Kecik\Controller;

/**
 * Class ModuleController
 * @package Module\Controller
 */
class ModuleController extends Controller
{

    /**
     * ModuleController constructor.
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
        return $this->view('index_hmvc');
    }

    /**
     *
     */
    public function create()
    {
        $table = new \Module\Model\Table();
        $table->field = $this->request->post('field');
        $table->save();
    }

    /**
     *
     */
    public function update()
    {
        $table = new \Module\Model\Table(array('id' => $this->request->post('id')));
        $table->field = $this->request->post('field');
        $table->save();
    }

    /**
     *
     */
    public function delete()
    {
        $table = new \Module\Model\Table(array('id' => $this->request->post('id')));
        $table->delete();
    }

    /**
     * @param string $id
     * @return string
     */
    public function read($id = '')
    {
        if (empty($id)) {
            $rows = \Module\Model\Table::find();
        } else {
            $rows = \Module\Model\Table::find(array(
                'where' => array(
                    'id' => $this->request->post('id')
                )
            ));
        }
        return json_encode($rows);
    }

}