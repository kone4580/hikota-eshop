<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20201124230149 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE migration_CategorySalesRankingBlock');
        $this->addSql('DROP TABLE migration_Maker');
        $this->addSql('DROP TABLE migration_ProductReview');
        // $this->addSql('DROP INDEX dtb_page_layout_url_idx ON dtb_page_layout');
        $this->addSql('ALTER TABLE dtb_class_category ADD color LONGTEXT DEFAULT NULL');
        // $this->addSql('DROP INDEX dtb_order_pre_order_id_idx ON dtb_order');
        // $this->addSql('DROP INDEX dtb_order_order_email_idx ON dtb_order');
        // $this->addSql('DROP INDEX dtb_customer_email_idx ON dtb_customer');
        $this->addSql('ALTER TABLE plg_category_sales_ranking_block_config ADD CONSTRAINT FK_4183AFE212469DE2 FOREIGN KEY (category_id) REFERENCES dtb_category (category_id)');
        $this->addSql('ALTER TABLE plg_product_maker ADD CONSTRAINT FK_F3A9167968DA5EC3 FOREIGN KEY (maker_id) REFERENCES plg_maker (maker_id)');
        $this->addSql('ALTER TABLE plg_product_review ADD CONSTRAINT FK_9CA38FA24584665A FOREIGN KEY (product_id) REFERENCES dtb_product (product_id)');
        $this->addSql('ALTER TABLE plg_product_review ADD CONSTRAINT FK_9CA38FA2EFA269F7 FOREIGN KEY (sex) REFERENCES mtb_sex (id)');
        $this->addSql('ALTER TABLE plg_product_review ADD CONSTRAINT FK_9CA38FA29395C3F3 FOREIGN KEY (customer_id) REFERENCES dtb_customer (customer_id)');
        $this->addSql('ALTER TABLE plg_product_review ADD CONSTRAINT FK_9CA38FA27B00651C FOREIGN KEY (status) REFERENCES mtb_disp (id)');
        $this->addSql('ALTER TABLE plg_product_review_config ADD CONSTRAINT FK_D27A17EF5684A52A FOREIGN KEY (csv_id) REFERENCES mtb_csv_type (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE migration_CategorySalesRankingBlock (version VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE migration_Maker (version VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE migration_ProductReview (version VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dtb_class_category DROP color');
        // $this->addSql('CREATE INDEX dtb_customer_email_idx ON dtb_customer (email)');
        // $this->addSql('CREATE INDEX dtb_order_pre_order_id_idx ON dtb_order (pre_order_id)');
        // $this->addSql('CREATE INDEX dtb_order_order_email_idx ON dtb_order (order_email)');
        // $this->addSql('CREATE INDEX dtb_page_layout_url_idx ON dtb_page_layout (url)');
        $this->addSql('ALTER TABLE plg_category_sales_ranking_block_config DROP FOREIGN KEY FK_4183AFE212469DE2');
        $this->addSql('ALTER TABLE plg_product_maker DROP FOREIGN KEY FK_F3A9167968DA5EC3');
        $this->addSql('ALTER TABLE plg_product_review DROP FOREIGN KEY FK_9CA38FA24584665A');
        $this->addSql('ALTER TABLE plg_product_review DROP FOREIGN KEY FK_9CA38FA2EFA269F7');
        $this->addSql('ALTER TABLE plg_product_review DROP FOREIGN KEY FK_9CA38FA29395C3F3');
        $this->addSql('ALTER TABLE plg_product_review DROP FOREIGN KEY FK_9CA38FA27B00651C');
        $this->addSql('ALTER TABLE plg_product_review_config DROP FOREIGN KEY FK_D27A17EF5684A52A');
    }
}
