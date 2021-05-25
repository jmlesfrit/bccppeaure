<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idcategorie;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nomcategorie;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="categorie_idcategorie")
     * @ORM\JoinColumn(name="idproduit", referencedColumnName="idproduit")
     */
    private $idproduit;

    public function __construct()
    {
        $this->idproduit = new ArrayCollection();
    }

    public function getidcategorie(): ?int
    {
        return $this->idcategorie;
    }

    public function getnomcategorie(): ?string
    {
        return $this->nomcategorie;
    }

    public function setnomcategorie(string $nomcategorie): self
    {
        $this->nomcategorie = $nomcategorie;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getIdproduit(): Collection
    {
        return $this->idproduit;
    }

    public function addIdproduit(Produit $idproduit): self
    {
        if (!$this->idproduit->contains($idproduit)) {
            $this->idproduit[] = $idproduit;
            $idproduit->setCategorieIdcategorie($this);
        }

        return $this;
    }

    public function removeIdproduit(Produit $idproduit): self
    {
        if ($this->idproduit->removeElement($idproduit)) {
            // set the owning side to null (unless already changed)
            if ($idproduit->getCategorieIdcategorie() === $this) {
                $idproduit->setCategorieIdcategorie(null);
            }
        }

        return $this;
    }
}
