<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250512083012 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE auteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE livre ADD auteur_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE livre ADD CONSTRAINT FK_AC634F9960BB6FE6 FOREIGN KEY (auteur_id) REFERENCES auteur (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_AC634F9960BB6FE6 ON livre (auteur_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE livre DROP FOREIGN KEY FK_AC634F9960BB6FE6
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE auteur
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_AC634F9960BB6FE6 ON livre
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE livre DROP auteur_id
        SQL);
    }
}
