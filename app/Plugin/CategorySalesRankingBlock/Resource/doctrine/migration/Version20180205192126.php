<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180205192126 extends AbstractMigration
{
    const TABLE = "plg_category_sales_ranking_block_config";

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $t = $schema->getTable(self::TABLE);
        if (!$t->hasColumn('category_id')) {
            $t->addColumn('category_id', 'integer', array('NotNull' => false));
        }
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $t = $schema->getTable(self::TABLE);
        if($t->hasColumn('category_id')) {
            $t->dropColumn('category_id');
        }
    }
}
