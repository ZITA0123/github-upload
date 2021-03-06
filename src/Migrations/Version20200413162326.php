<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200413162326 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE produits (id INT AUTO_INCREMENT NOT NULL, couleur VARCHAR(255) NOT NULL, a_vue VARCHAR(255) NOT NULL, progressif VARCHAR(255) NOT NULL, traite_vue VARCHAR(255) NOT NULL, forme VARCHAR(255) NOT NULL, style VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, type_mon VARCHAR(255) NOT NULL, fabrication VARCHAR(255) NOT NULL, matiere VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, prix_ver VARCHAR(255) NOT NULL, prix_seule VARCHAR(255) NOT NULL, lar_new VARCHAR(255) NOT NULL, branche VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE produits');
    }
}
