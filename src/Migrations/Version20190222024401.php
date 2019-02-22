<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190222024401 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(25) NOT NULL, password VARCHAR(50) NOT NULL, note INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annonce (id INT AUTO_INCREMENT NOT NULL, id_utilisateur_id INT NOT NULL, text LONGTEXT NOT NULL, tarif DOUBLE PRECISION DEFAULT NULL, lieu VARCHAR(100) DEFAULT NULL, INDEX IDX_F65593E5C6EE5C49 (id_utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_utilisateur_id INT NOT NULL, id_annonce_id INT NOT NULL, text LONGTEXT NOT NULL, date DATETIME NOT NULL, INDEX IDX_67F068BCC6EE5C49 (id_utilisateur_id), INDEX IDX_67F068BC2D8F2BF8 (id_annonce_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5C6EE5C49 FOREIGN KEY (id_utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC6EE5C49 FOREIGN KEY (id_utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC2D8F2BF8 FOREIGN KEY (id_annonce_id) REFERENCES annonce (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5C6EE5C49');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCC6EE5C49');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC2D8F2BF8');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE annonce');
        $this->addSql('DROP TABLE commentaire');
    }
}
