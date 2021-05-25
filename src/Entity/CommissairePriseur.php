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
    private $Pr�nom;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $R�gion;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $D�partement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPr�nom(): ?string
    {
        return $this->Pr�nom;
    }

    public function setPr�nom(string $Pr�nom): self
    {
        $this->Pr�nom = $Pr�nom;

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

    public function getR�gion(): ?string
    {
        return $this->R�gion;
    }

    public function setR�gion(string $R�gion): self
    {
        $this->R�gion = $R�gion;

        return $this;
    }

    public function getD�partement(): ?string
    {
        return $this->D�partement;
    }

    public function setD�partement(string $D�partement): self
    {
        $this->D�partement = $D�partement;

        return $this;
    }
}
