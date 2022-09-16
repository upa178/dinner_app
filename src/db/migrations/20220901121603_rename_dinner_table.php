<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class RenameDinnerTable extends AbstractMigration
{

    const OLD_TABLE_NAME = 'dinner_menu';
    const NEW_TABLE_NAME = 'dinner_menus';
 
    public function up()
    {
        $table = $this->table(self::OLD_TABLE_NAME);
        $table->rename(self::NEW_TABLE_NAME);
        $table->update();
    }
 
    public function down()
    {
        $table = $this->table(self::NEW_TABLE_NAME);
        $table->rename(self::OLD_TABLE_NAME);
        $table->update();
    }
}
