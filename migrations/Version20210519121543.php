<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210519121543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product_detail (id INT AUTO_INCREMENT NOT NULL, color VARCHAR(255) NOT NULL, descr LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD details_id INT DEFAULT NULL, ADD price INT NOT NULL, ADD price_old INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADBB1A0722 FOREIGN KEY (details_id) REFERENCES product_detail (id)');
        $this->addSql('CREATE INDEX IDX_D34A04ADBB1A0722 ON product (details_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADBB1A0722');
        $this->addSql('DROP TABLE product_detail');
        $this->addSql('DROP INDEX IDX_D34A04ADBB1A0722 ON product');
        $this->addSql('ALTER TABLE product DROP details_id, DROP price, DROP price_old');
    }
}
