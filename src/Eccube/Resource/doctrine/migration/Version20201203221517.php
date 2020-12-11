<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20201203221517 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE dtb_customer_favorite_product_class (favorite_id INT AUTO_INCREMENT NOT NULL, customer_id INT DEFAULT NULL, product_class_id INT DEFAULT NULL, create_date DATETIME NOT NULL, update_date DATETIME NOT NULL, del_flg SMALLINT DEFAULT 0 NOT NULL, INDEX IDX_50BE65399395C3F3 (customer_id), INDEX IDX_50BE653921B06187 (product_class_id), PRIMARY KEY(favorite_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dtb_customer_favorite_product_class ADD CONSTRAINT FK_50BE65399395C3F3 FOREIGN KEY (customer_id) REFERENCES dtb_customer (customer_id)');
        $this->addSql('ALTER TABLE dtb_customer_favorite_product_class ADD CONSTRAINT FK_50BE653921B06187 FOREIGN KEY (product_class_id) REFERENCES dtb_product_class (product_class_id)');
        // $this->addSql('DROP INDEX dtb_page_layout_url_idx ON dtb_page_layout');
        // $this->addSql('DROP INDEX dtb_order_pre_order_id_idx ON dtb_order');
        // $this->addSql('DROP INDEX dtb_order_order_email_idx ON dtb_order');
        // $this->addSql('DROP INDEX dtb_customer_email_idx ON dtb_customer');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE dtb_customer_favorite_product_class');
        // $this->addSql('CREATE INDEX dtb_customer_email_idx ON dtb_customer (email)');
        // $this->addSql('CREATE INDEX dtb_order_pre_order_id_idx ON dtb_order (pre_order_id)');
        // $this->addSql('CREATE INDEX dtb_order_order_email_idx ON dtb_order (order_email)');
        // $this->addSql('CREATE INDEX dtb_page_layout_url_idx ON dtb_page_layout (url)');
    }
}
