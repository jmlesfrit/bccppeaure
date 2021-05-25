<?php

namespace App\Entity;

use App\Repository\LotRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LotRepository::class)
 */
class Lot
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idlot;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="lot_idlot")
     * @ORM\JoinColumn(name="idproduit", referencedColumnName="idproduit")
     */
    private $idproduit;

    public function __construct()
    {
        $this->idproduit = new ArrayCollection();
    }

    public function getidlot(): ?int
    {
        return $this->idlot;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getidproduits(): Collection
    {
        return $this->idproduit;
    }

    public function addidproduit(Produit $idproduit): self
    {
        if (!$this->idproduit->contains($idproduit)) {
            $this->idproduit[] = $idproduit;
            $idproduit->setlot_idlot($this);
        }

        return $this;
    }


    public function removeidproduit(Produit $idproduit): self
    {
        if ($this->idproduit->removeElement($idproduit)) {
            // set the owning side to null (unless already changed)
            if ($idproduit->getlot_idlot() === $this) {
                $idproduit->setlot_idlot(null);
            }
        }

        return $this;
    }
}

