<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230909154440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE board_game_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE board_game (id INT NOT NULL, uuid UUID NOT NULL, game_title VARCHAR(150) NOT NULL, description TEXT NOT NULL, purchase_date DATE NOT NULL, price DOUBLE PRECISION NOT NULL, rate DOUBLE PRECISION DEFAULT NULL, difficulty DOUBLE PRECISION DEFAULT NULL, player_min INT DEFAULT NULL, player_max INT DEFAULT NULL, average_game_duration INT DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE board_game_id_seq CASCADE');
        $this->addSql('DROP TABLE board_game');
    }
}
