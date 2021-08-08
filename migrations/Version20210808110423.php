<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210808110423 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session CHANGE datesession datesession VARCHAR(255) DEFAULT NULL, CHANGE dateannonceconcours dateannonceconcours VARCHAR(255) DEFAULT NULL, CHANGE dateentreprisdossierparcomite dateentreprisdossierparcomite VARCHAR(255) DEFAULT NULL, CHANGE dateapprobationparconseiladministration dateapprobationparconseiladministration VARCHAR(255) DEFAULT NULL, CHANGE dateconclusiontransaction dateconclusiontransaction VARCHAR(255) DEFAULT NULL, CHANGE datedebutaccomplissement datedebutaccomplissement VARCHAR(255) DEFAULT NULL, CHANGE datenotificationobservatoire datenotificationobservatoire VARCHAR(255) DEFAULT NULL, CHANGE dateestimeetimbre dateestimeetimbre VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session CHANGE datesession datesession DATE DEFAULT NULL, CHANGE dateannonceconcours dateannonceconcours DATE DEFAULT NULL, CHANGE dateentreprisdossierparcomite dateentreprisdossierparcomite DATE DEFAULT NULL, CHANGE dateapprobationparconseiladministration dateapprobationparconseiladministration DATE DEFAULT NULL, CHANGE dateconclusiontransaction dateconclusiontransaction DATE DEFAULT NULL, CHANGE datedebutaccomplissement datedebutaccomplissement DATE DEFAULT NULL, CHANGE datenotificationobservatoire datenotificationobservatoire DATE DEFAULT NULL, CHANGE dateestimeetimbre dateestimeetimbre DATE DEFAULT NULL');
    }
}
