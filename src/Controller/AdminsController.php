<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admins Controller
 *
 * @property \App\Model\Table\AdminsTable $Admins
 *
 * @method \App\Model\Entity\Admin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminsController extends AppController
{
    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}
