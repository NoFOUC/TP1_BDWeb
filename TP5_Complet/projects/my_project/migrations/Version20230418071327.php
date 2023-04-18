<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230418071327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY Cle1');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY Cle2');
        $this->addSql('DROP INDEX Cle2 ON facture');
        $this->addSql('DROP INDEX Cle1 ON facture');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT Cle1 FOREIGN KEY (id_article) REFERENCES article (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT Cle2 FOREIGN KEY (id_client) REFERENCES client (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX Cle2 ON facture (id_client)');
        $this->addSql('CREATE INDEX Cle1 ON facture (id_article)');
    }
}
