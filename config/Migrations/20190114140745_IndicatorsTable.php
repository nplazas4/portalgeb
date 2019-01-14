<?php
use Migrations\AbstractMigration;

class IndicatorsTable extends AbstractMigration
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
      $table = $this->table('INDICATORS');
      $table ->addColumn('CAPEX_USD','string',array('limit' => 100))
             ->addColumn('CAPEX_COP','string',array('limit' => 500))
             ->addColumn('RIESGOS','string',array('limit'=> 500))
             ->addColumn('SPI_EXTERNO','date')
             -create();
    }
}
