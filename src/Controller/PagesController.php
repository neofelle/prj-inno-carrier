<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class PagesController extends AppController
{
    public $helpers = ['NavigationSelector'];

    /**
     * initialize method    
     * 
     */
    public function initialize()
    {
        parent::initialize();   
         
    }

    /**
     * beforeFilter method     
     * 
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }

    /**
     * beforeFilter method     
     * 
     */
    public function afterFilter(Event $event)
    {
        parent::afterFilter($event);
    }

    /**
     * Signup method
     * @return void
     */

    public function signup()
    {   
        $this->viewBuilder()->layout('main_no_banner');        
    }

    /**
     * Login method
     * @return void
     */

    public function login()
    {   
        $this->viewBuilder()->layout('main_no_banner');        
    }

    /**
     * ltl method
     * @return void
     */

    public function ltl()
    {   
        $this->viewBuilder()->layout('main_no_banner');        
    }

    /**
     * Truckload method
     * @return void
     */

    public function truckload()
    {   
        $this->viewBuilder()->layout('main_no_banner');        
    }

    /**
     * Rail and Intermodal method
     * @return void
     */

    public function rail_and_intermodal()
    {   
        $this->viewBuilder()->layout('main_no_banner');        
    }

    /**
     * Resources method
     * @return void
     */

    public function resources()
    {   
        $this->viewBuilder()->layout('main_no_banner');        
    }
    
}
