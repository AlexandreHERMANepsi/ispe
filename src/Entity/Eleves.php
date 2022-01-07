<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Eleves
 *
 * @ORM\Table(name="eleves", indexes={@ORM\Index(name="Id_Classe", columns={"Id_Classe"})})
 * @ORM\Entity
 * @ApiResource()
 */
class Eleves
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Eleve", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=254, nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var \Classes
     *
     * @ORM\ManyToOne(targetEntity="Classes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Classe", referencedColumnName="Id_Classe")
     * })
     */
    private $idClasse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Rattrapages", mappedBy="idEleve")
     */
    private $idRattrapages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idRattrapages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdEleve(): ?int
    {
        return $this->idEleve;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getIdClasse(): ?Classes
    {
        return $this->idClasse;
    }

    public function setIdClasse(?Classes $idClasse): self
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    /**
     * @return Collection|Rattrapages[]
     */
    public function getIdRattrapages(): Collection
    {
        return $this->idRattrapages;
    }

    public function addIdRattrapage(Rattrapages $idRattrapage): self
    {
        if (!$this->idRattrapages->contains($idRattrapage)) {
            $this->idRattrapages[] = $idRattrapage;
            $idRattrapage->addIdEleve($this);
        }

        return $this;
    }

    public function removeIdRattrapage(Rattrapages $idRattrapage): self
    {
        if ($this->idRattrapages->removeElement($idRattrapage)) {
            $idRattrapage->removeIdEleve($this);
        }

        return $this;
    }

}
