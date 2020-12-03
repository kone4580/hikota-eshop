<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20201203165333 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        // $this->addSql('DROP INDEX dtb_page_layout_url_idx ON dtb_page_layout');
        $this->addSql('ALTER TABLE dtb_class_category CHANGE color color_code LONGTEXT DEFAULT NULL');
        // $this->addSql('DROP INDEX dtb_order_pre_order_id_idx ON dtb_order');
        // $this->addSql('DROP INDEX dtb_order_order_email_idx ON dtb_order');
        // $this->addSql('DROP INDEX dtb_customer_email_idx ON dtb_customer');
        $this->addSql('ALTER TABLE dtb_product_class ADD color_name LONGTEXT DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE dtb_class_category CHANGE color_code color LONGTEXT DEFAULT NULL COLLATE utf8_general_ci');
        // $this->addSql('CREATE INDEX dtb_customer_email_idx ON dtb_customer (email)');
        // $this->addSql('CREATE INDEX dtb_order_pre_order_id_idx ON dtb_order (pre_order_id)');
        // $this->addSql('CREATE INDEX dtb_order_order_email_idx ON dtb_order (order_email)');
        // $this->addSql('CREATE INDEX dtb_page_layout_url_idx ON dtb_page_layout (url)');
        $this->addSql('ALTER TABLE dtb_product_class DROP color_name');
    }
}
