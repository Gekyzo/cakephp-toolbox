<?php
namespace ToolBox\Controller;

use ToolBox\Controller\AppController;
use Cake\Filesystem\Folder;

/**
 * Folders Controller
 *
 *
 * @method \ToolBox\Model\Entity\Folder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FoldersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        debug('hola');
    }

    public function add()
    {
        /**
         * Cogemos los datos enviados
         */
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $fol = new Folder('/path/to/folder' . $data['nombre']);
            debug($fol);
        }
        die;
    }
}
