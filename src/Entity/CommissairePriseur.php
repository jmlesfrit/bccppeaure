<?php

namespace App\Entity;

use App\Repository\CommissairePriseurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommissairePriseurRepository::class)
 */
class CommissairePriseur
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
    private $Prénom;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Région;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Département;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getRégion(): ?string
    {
        return $this->Région;
    }

    public function setRégion(string $Région): self
    {
        $this->Région = $Région;

        return $this;
    }

    public function getDépartement(): ?string
    {
        return $this->Département;
    }

    public function setDépartement(string $Département): self
    {
        $this->Département = $Département;

        return $this;
    }
}
