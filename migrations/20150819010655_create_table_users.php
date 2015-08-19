<?php

use Phinx\Migration\AbstractMigration;

class CreateTableUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('username','string',['limit' => 50])
            ->addColumn('password','string',['limit' => 200])
            ->addColumn('email','string',['limit' => 100])
            ->addColumn('display_name','string',['limit' => 100])
            ->addColumn('deleted','boolean',['default' => 0])
            ->addColumn('created_at','datetime',['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at','datetime',['null' => true])
            ->addColumn('deleted_at','datetime', ['null' => true])
            ->save();
    }
}
