<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Groups Controller
 *
 * @property \App\Model\Table\GroupsTable $Groups
 */
class GroupsController extends AppController
{
    /**
     * initialize method
     *  ID : CA-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        // Add the selected sidebar-menu 'active' class
        // Valid value can be found in NavigationSelectorHelper       
        if ($this->request->action == "dashboard") {
            $nav_selected = ["dashboard"];
        } else {
            $nav_selected = ["groups"];
        }
        $this->set('nav_selected', $nav_selected);
        $this->set(['load_css_script' => 'groups']);

        // Allow full access to this controller
        $this->Auth->allow(['index','add','update']);
    }

    /**
     * Index method
     * ID : CA-02
     *
     * @return void
     */
    public function index()
    {
        $groups = $this->Groups->find('all')->where(['Groups.is_archive' => 0]);
        $this->set('groups', $groups);
        $this->set('_serialize', ['groups']);
    }

    /**
     * View method
     * ID : CA-03
     *
     * @param string|null $id Group id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $group = $this->Groups->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('group', $group);
        $this->set('_serialize', ['group']);
    }

    /**
     * Add method
     * ID : CA-04
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $group = $this->Groups->newEntity();
        if ($this->request->is('post')) {
            $group = $this->Groups->patchEntity($group, $this->request->data);
            if ($this->Groups->save($group)) {
                $this->Flash->success(__('Group has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The group could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('group'));
        $this->set('_serialize', ['group']);
    }

    /**
     * Edit method
     * ID : CA-05
     *
     * @param string|null $id Group id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $group = $this->Groups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $group = $this->Groups->patchEntity($group, $this->request->data);
            if ($this->Groups->save($group)) {
                $this->Flash->success(__('The group has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The group could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('group'));
        $this->set('_serialize', ['group']);
    }

    public function update()
    {
        $id = $this->request->data['id'];
        $group = $this->Groups->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->data;
            $group = $this->Groups->patchEntity($group, $data);
            if ( $result = $this->Groups->save($group)) {
                
                $this->Flash->success(__('Group has been updated.'));
                
            } else {
                $this->Flash->error(__('Group could not be saved. Please, try again.'));
            }
        }
        return custom_redirect($this,['controller' => 'groups', 'action' => 'index']);
    }

    /**
     * Delete method
     * ID : CA-06
     *
     * @param string|null $id Group id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $group = $this->Groups->get($id);
        $group->is_archive = 1;
        $this->Groups->save($group);

        $this->Flash->success(__('Group has been deleted.'));        
        return custom_redirect($this,['controller' => 'groups', 'action' => 'index']);
    }
}
