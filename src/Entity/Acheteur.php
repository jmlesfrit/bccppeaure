<?php

namespace App\Entity;

use App\Repository\AcheteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AcheteurRepository::class)
 */
class Acheteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idacheteur;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nomacheteur;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $prenomacheteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adressemail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    public function getidacheteur(): ?int
    {
        return $this->idacheteur;
    }

    public function getnomacheteur(): ?string
    {
        return $this->nomacheteur;
    }

    public function setnomacheteur(string $nomacheteur): self
    {
        $this->nomacheteur = $nomacheteur;

        return $this;
    }

    public function getprenomacheteur(): ?string
    {
        return $this->prenomacheteur;
    }

    public function setprenomacheteur(string $prenomacheteur): self
    {
        $this->prenomacheteur = $prenomacheteur;

        return $this;
    }

    public function getAdressemail(): ?string
    {
        return $this->adressemail;
    }

    public function setAdressemail(string $adressemail): self
    {
        $this->adressemail = $adressemail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
