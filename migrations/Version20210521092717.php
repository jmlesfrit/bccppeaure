<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210521092717 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commissaire priseur');
        $this->addSql('ALTER TABLE acheteur ADD id INT AUTO_INCREMENT NOT NULL, ADD adress_email VARCHAR(45) NOT NULL, ADD prenom VARCHAR(45) NOT NULL, ADD password VARCHAR(45) NOT NULL, DROP idAcheteur, DROP Prénom, DROP TypePayement, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE commissaire_priseur ADD pr�nom VARCHAR(45) NOT NULL, ADD r�gion VARCHAR(45) NOT NULL, ADD d�partement VARCHAR(45) NOT NULL, DROP pr?nom, DROP r?gion, DROP d?partement');
        $this->addSql('DROP INDEX Produit_idProduit ON lot');
        $this->addSql('ALTER TABLE lot ADD id INT AUTO_INCREMENT NOT NULL, ADD id_produit VARCHAR(255) NOT NULL, DROP idLot, DROP Produit_idProduit, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE photo ADD id INT AUTO_INCREMENT NOT NULL, ADD url VARCHAR(255) NOT NULL, DROP idphoto, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX Catégorie_idCatégorie ON produit');
        $this->addSql('DROP INDEX Lot_idLot ON produit');
        $this->addSql('ALTER TABLE produit ADD id INT AUTO_INCREMENT NOT NULL, DROP idProduit, DROP N°, DROP Nom, DROP Catégorie, DROP Photo_idPhoto, DROP Catégorie_idCatégorie, DROP Lot_idLot, DROP Acheteur_idAcheteur, DROP Vendeur_idVendeur, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX Produit_idProduit ON vendeur');
        $this->addSql('ALTER TABLE vendeur ADD id INT AUTO_INCREMENT NOT NULL, ADD pr�nom VARCHAR(45) NOT NULL, ADD id_produit VARCHAR(255) NOT NULL, ADD ordre_achat VARCHAR(255) NOT NULL, DROP idVendeur, DROP Prénom, DROP Produit_idProduit, DROP Ordre achat, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX Lot_idLot ON vente');
        $this->addSql('ALTER TABLE vente ADD id INT AUTO_INCREMENT NOT NULL, ADD id_lot INT NOT NULL, DROP N°lot, DROP Lot_idLot, CHANGE Lieu lieu VARCHAR(255) NOT NULL, CHANGE idvente n�lot INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commissaire priseur (idcommissaire INT NOT NULL, Prénom VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Nom VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Région VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Département VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(idcommissaire)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('ALTER TABLE acheteur MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE acheteur DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE acheteur ADD idAcheteur INT NOT NULL, ADD Prénom VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ADD TypePayement VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, DROP id, DROP adress_email, DROP prenom, DROP password');
        $this->addSql('ALTER TABLE acheteur ADD PRIMARY KEY (idAcheteur)');
        $this->addSql('ALTER TABLE commissaire_priseur ADD pr?nom VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD r?gion VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD d?partement VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP pr�nom, DROP r�gion, DROP d�partement');
        $this->addSql('ALTER TABLE lot MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE lot DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE lot ADD idLot INT NOT NULL, ADD Produit_idProduit INT DEFAULT NULL, DROP id, DROP id_produit');
        $this->addSql('CREATE UNIQUE INDEX Produit_idProduit ON lot (Produit_idProduit)');
        $this->addSql('ALTER TABLE lot ADD PRIMARY KEY (idLot)');
        $this->addSql('ALTER TABLE photo MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE photo DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE photo ADD idphoto INT NOT NULL, DROP id, DROP url');
        $this->addSql('ALTER TABLE photo ADD PRIMARY KEY (idphoto)');
        $this->addSql('ALTER TABLE produit MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE produit DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE produit ADD idProduit INT NOT NULL, ADD N° INT NOT NULL, ADD Nom VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ADD Catégorie VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ADD Photo_idPhoto INT DEFAULT NULL, ADD Catégorie_idCatégorie INT DEFAULT NULL, ADD Lot_idLot INT DEFAULT NULL, ADD Acheteur_idAcheteur INT NOT NULL, ADD Vendeur_idVendeur INT NOT NULL, DROP id');
        $this->addSql('CREATE UNIQUE INDEX Catégorie_idCatégorie ON produit (Catégorie_idCatégorie, Acheteur_idAcheteur, Vendeur_idVendeur)');
        $this->addSql('CREATE UNIQUE INDEX Lot_idLot ON produit (Lot_idLot)');
        $this->addSql('ALTER TABLE produit ADD PRIMARY KEY (idProduit)');
        $this->addSql('ALTER TABLE vendeur MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE vendeur DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE vendeur ADD idVendeur INT NOT NULL, ADD Produit_idProduit INT DEFAULT NULL, ADD Ordre achat VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, DROP id, DROP id_produit, DROP ordre_achat, CHANGE pr�nom Prénom VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('CREATE UNIQUE INDEX Produit_idProduit ON vendeur (Produit_idProduit)');
        $this->addSql('ALTER TABLE vendeur ADD PRIMARY KEY (idVendeur)');
        $this->addSql('ALTER TABLE vente MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE vente DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE vente ADD idVente INT NOT NULL, ADD N°lot INT DEFAULT NULL, ADD Lot_idLot INT DEFAULT NULL, DROP id, DROP n�lot, DROP id_lot, CHANGE lieu Lieu VARCHAR(45) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('CREATE UNIQUE INDEX Lot_idLot ON vente (Lot_idLot)');
        $this->addSql('ALTER TABLE vente ADD PRIMARY KEY (idVente)');
    }
}
