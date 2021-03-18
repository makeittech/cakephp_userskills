<?php

use Cake\Auth\DefaultPasswordHasher;
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $admins = \Cake\ORM\TableRegistry::getTableLocator()->get('admins');
        $admin = $admins->newEntity(['user_name' => 'admin','password'=> (new DefaultPasswordHasher())->hash('123123123'),'role'=>'admin']);
        $admins->save($admin);
    }
}
