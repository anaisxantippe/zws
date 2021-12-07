<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211203233702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE projects (id INT AUTO_INCREMENT NOT NULL, space_id INT NOT NULL, proj_name VARCHAR(255) NOT NULL, proj_start DATE NOT NULL, proj_deadline DATE NOT NULL, proj_desc VARCHAR(255) NOT NULL, status_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE status (id INT AUTO_INCREMENT NOT NULL, status_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tasks (id INT AUTO_INCREMENT NOT NULL, task_name VARCHAR(255) NOT NULL, task_start DATE NOT NULL, task_deadline DATE NOT NULL, task_desc VARCHAR(255) NOT NULL, task_status VARCHAR(255) NOT NULL, task_users VARCHAR(255) NOT NULL, status_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE workspaces (id INT AUTO_INCREMENT NOT NULL, space_name VARCHAR(255) NOT NULL, space_desc VARCHAR(255) NOT NULL, space_color VARCHAR(255) NOT NULL, icon_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE projects');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP TABLE tasks');
        $this->addSql('DROP TABLE workspaces');
    }
}
