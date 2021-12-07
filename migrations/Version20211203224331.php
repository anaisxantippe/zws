<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211203224331 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD first_name VARCHAR(50) NOT NULL, ADD last_name VARCHAR(50) NOT NULL, ADD gender VARCHAR(50) NOT NULL, ADD pronoun VARCHAR(50) NOT NULL, ADD dob DATE NOT NULL, ADD first_mail VARCHAR(100) NOT NULL, ADD second_mail VARCHAR(100) DEFAULT NULL, ADD adress VARCHAR(100) NOT NULL, ADD zip VARCHAR(5) NOT NULL, ADD city VARCHAR(50) NOT NULL, ADD phone VARCHAR(10) NOT NULL, ADD space_id INT NOT NULL, ADD member_status VARCHAR(100) NOT NULL, ADD role_id INT NOT NULL, ADD ca TINYINT(1) NOT NULL, ADD shirt_size VARCHAR(10) NOT NULL, ADD fav_color VARCHAR(50) NOT NULL, ADD fav_games VARCHAR(255) NOT NULL, ADD comments VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP first_name, DROP last_name, DROP gender, DROP pronoun, DROP dob, DROP first_mail, DROP second_mail, DROP adress, DROP zip, DROP city, DROP phone, DROP space_id, DROP member_status, DROP role_id, DROP ca, DROP shirt_size, DROP fav_color, DROP fav_games, DROP comments');
    }
}
