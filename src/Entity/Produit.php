<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idproduit;

    /**
* @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nomproduit;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $categorie;

    /**
     * @ORM\Column(type="integer")
     */
    private $numproduit;

    /**
     * @ORM\ManyToOne(targetEntity=Lot::class, inversedBy="idproduit")
     * @ORM\JoinColumn(name="lot_idlot", referencedColumnName="idlot")
     */
    private $lot_idlot;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="idproduit")
     * @ORM\JoinColumn(name="categorie_idcategorie", referencedColumnName="idcategorie")
     */
    private $categorie_idcategorie;



    public function __construct()
    {
        $this->categorie_idcategorie = new ArrayCollection();

    }

    public function getidproduit(): ?int
    {
        return $this->idproduit;
    }

    public function getnomproduit(): ?string
    {
        return $this->nomproduit;
    }

    public function setnomproduit(string $nomproduit): self
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    public function getcategorie(): ?string
    {
        return $this->categorie;
    }

    public function setcategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getnumproduit(): ?int
    {
        return $this->numproduit;
    }

    public function setnumproduit(int $numproduit): self
    {
        $this->numproduit = $numproduit;

        return $this;
    }

    public function getprix(): ?int
    {
        return $this->prix;
    }

    public function setprix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getlot_idlot(): ?Lot
    {
        return $this->lot_idlot;
    }

    public function setlot_idlot(?Lot $lot_idlot): self
    {
        $this->lot_idlot = $lot_idlot;

        return $this;
    }

    public function getCategorieIdcategorie(): ?Categorie
    {
        return $this->categorie_idcategorie;
    }

    public function setCategorieIdcategorie(?Categorie $categorie_idcategorie): self
    {
        $this->categorie_idcategorie = $categorie_idcategorie;

        return $this;
    }




}
