<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220622082105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD voornaam VARCHAR(255) NOT NULL, ADD tussenvoegsel VARCHAR(255) DEFAULT NULL, ADD achternaam VARCHAR(255) NOT NULL, ADD geboortedatum DATE NOT NULL, ADD gender VARCHAR(255) NOT NULL, ADD adres VARCHAR(255) NOT NULL, ADD postcode VARCHAR(255) NOT NULL, ADD woonplaats VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP voornaam, DROP tussenvoegsel, DROP achternaam, DROP geboortedatum, DROP gender, DROP adres, DROP postcode, DROP woonplaats');
    }
}
