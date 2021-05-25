<?php

namespace App\Entity;

use App\Repository\VendeurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VendeurRepository::class)
 */
class Vendeur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Prénom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $IdProduit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ordre_Achat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrénom(): ?string
    {
        return $this->Prénom;
    }

    public function setPrénom(string $Prénom): self
    {
        $this->Prénom = $Prénom;

        return $this;
    }

    public function getIdProduit(): ?string
    {
        return $this->IdProduit;
    }

    public function setIdProduit(string $IdProduit): self
    {
        $this->IdProduit = $IdProduit;

        return $this;
    }

    public function getOrdreAchat(): ?string
    {
        return $this->Ordre_Achat;
    }

    public function setOrdreAchat(string $Ordre_Achat): self
    {
        $this->Ordre_Achat = $Ordre_Achat;

        return $this;
    }
}
