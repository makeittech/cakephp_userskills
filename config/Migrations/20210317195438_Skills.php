<?php
use Migrations\AbstractMigration;

class Skills extends AbstractMigration
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
        $table = $this->table('skills');
        $table->addColumn('user_id','integer',[
            'default' => null,
            'null' => false
        ]);
        $table->addForeignKey('user_id','users','id');
        $table->addColumn('name','string',[
            'default' => '',
            'null' => false
        ]);
        $table->create();
    }
}
