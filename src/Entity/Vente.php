<?php

namespace App\Entity;

use App\Repository\VenteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VenteRepository::class)
 */
class Vente
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idvente;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\OneToOne(targetEntity=Lot::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="idlot", referencedColumnName="idlot")
     */
    private $idlot;

    public function getidvente(): ?int
    {
        return $this->idvente;
    }

    public function getdate(): ?string
    {
        return $this->date;
    }

    public function setdate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getlieu(): ?\DateTimeInterface
    {
        return $this->lieu;
    }

    public function setlieu(\DateTimeInterface $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }


    public function getidlot(): ?Lot
    {
        return $this->idlot;
    }

    public function setidlot(Lot $idlot): self
    {
        $this->idlot = $idlot;

        return $this;
    }


}
