<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\View\CellTrait;
use Cake\Routing\Router;
use Cake\Core\Configure;

/**
 * Main Controller
 *
 * @property \App\Model\Table\UsersTable $Main
 */
class MainController extends AppController
{
    public $helpers = ['NavigationSelector'];

    use CellTrait;

    /**
     * Initialize Method     
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $nav_selected = ["home"];
        $this->set('nav_selected', $nav_selected);
        $this->set('website_title', 'Innovative Carriers');
        $this->set('page_title', 'Home');
    }    
    
    /**
     * BeforeFilter Method     
     * 
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        //$this->Auth->allow(['index','ajax_winning_results']);
        $this->Auth->allow();
    }

    /**
     * Index method for homepage     
     * @return void
     */

    public function index()
    {   
        $this->viewBuilder()->layout('main');        
    }
}
