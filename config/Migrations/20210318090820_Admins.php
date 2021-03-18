<?php
use Migrations\AbstractMigration;

class Admins extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('admins');
        $table->addColumn('user_name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('password','string',[
            'default' => null,
            'null' => true,
            'limit' => 255,
        ]);
        $table->create();
    }
}
