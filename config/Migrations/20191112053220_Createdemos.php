<?php
use Migrations\AbstractMigration;

class Createdemos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('demos');
        $table->addColumn('name','string',[
           'default' => 'null',
           'limit' => 255,
           'null' => false,
        ]);
        $table->addColumn('mobile','integer',[
            'limit' => 70,
            'null' => false,
         ]);
        
         $table->addColumn('email','text');
         $table->addColumn('password','text');
         $table->addColumn('gender','boolean');
         $table->addColumn('date','date');
         
        $table->create();
    }
}
