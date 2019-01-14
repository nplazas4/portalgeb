<?php
use Migrations\AbstractMigration;

class CreateProjectsTable extends AbstractMigration
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
      $table = $this->table('PROJECTS');
      $table ->addColumn('ID_PROJECT','string',array('limit' => 100))
             ->addColumn('PROJECT_NAME','string',array('limit' => 500))
             ->addColumn('DESCRIPTION','string',array('limit'=> 500))
             ->addColumn('PLANNED_START_DATE','date')
             ->addColumn('PLANNED_FINISH_DATE','date')
             ->addColumn('SPI','decimal',['precision'=>10,'scale'=>2])
             ->addColumn('EXECUTED','integer')
             ->addColumn('PLANNED','integer')
             ->addColumn('ACPU','decimal',['precision'=>10,'scale'=>2])
             ->addColumn('CAPEX_PLANNED','integer')
             ->addColumn('CAPEX_EXECUTED','integer')
             ->addColumn('REGIONAL','string',array('limit'=> 50))
             ->create();
      $refTable = $this->table('PROJECTS');
      $refTable ->addColumn('EPS_OBJECT_ID','integer',array('signed'=>'disable'))
                ->addForeignKey('EPS_OBJECT_ID','EPS','id',array('delete'=>'CASCADE','update'=>'NO_ACTION'))
                ->update();
    }
}
