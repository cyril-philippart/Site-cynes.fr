<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210203163514 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE expertise (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(30) NOT NULL, picture VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, picture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE realisation (id INT AUTO_INCREMENT NOT NULL, expertise_id INT DEFAULT NULL, project_id INT DEFAULT NULL, name VARCHAR(100) NOT NULL, picture VARCHAR(255) NOT NULL, INDEX IDX_EAA5610E9D5B92F9 (expertise_id), INDEX IDX_EAA5610E166D1F9C (project_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE realisation ADD CONSTRAINT FK_EAA5610E9D5B92F9 FOREIGN KEY (expertise_id) REFERENCES expertise (id)');
        $this->addSql('ALTER TABLE realisation ADD CONSTRAINT FK_EAA5610E166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE realisation DROP FOREIGN KEY FK_EAA5610E9D5B92F9');
        $this->addSql('ALTER TABLE realisation DROP FOREIGN KEY FK_EAA5610E166D1F9C');
        $this->addSql('DROP TABLE expertise');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE realisation');
    }
}
