<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Rattrapages
 *
 * @ORM\Table(name="rattrapages", uniqueConstraints={@ORM\UniqueConstraint(name="Id_Fichiers", columns={"Id_Fichiers"})}, indexes={@ORM\Index(name="Id_Utilisateur", columns={"Id_Utilisateur"}), @ORM\Index(name="Id_Module", columns={"Id_Module"})})
 * @ORM\Entity
 * @ApiResource()
 */
class Rattrapages
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_rattrapages", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRattrapages;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEpreuve", type="date", nullable=false)
     */
    private $dateepreuve;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DureeEpreuve", type="time", nullable=false)
     */
    private $dureeepreuve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Etat", type="string", length=50, nullable=true)
     */
    private $etat;

    /**
     * @var \Fichiers
     *
     * @ORM\ManyToOne(targetEntity="Fichiers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Fichiers", referencedColumnName="Id_Fichiers")
     * })
     */
    private $idFichiers;

    /**
     * @var \Modules
     *
     * @ORM\ManyToOne(targetEntity="Modules")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Module", referencedColumnName="Id_Module")
     * })
     */
    private $idModule;

    /**
     * @var \Surveillant
     *
     * @ORM\ManyToOne(targetEntity="Surveillant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Utilisateur", referencedColumnName="Id_Utilisateur")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Eleves", inversedBy="idRattrapages")
     * @ORM\JoinTable(name="notation",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_rattrapages", referencedColumnName="Id_rattrapages")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_Eleve", referencedColumnName="Id_Eleve")
     *   }
     * )
     */
    private $idEleve;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEleve = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdRattrapages(): ?int
    {
        return $this->idRattrapages;
    }

    public function getDateepreuve(): ?\DateTimeInterface
    {
        return $this->dateepreuve;
    }

    public function setDateepreuve(\DateTimeInterface $dateepreuve): self
    {
        $this->dateepreuve = $dateepreuve;

        return $this;
    }

    public function getDureeepreuve(): ?\DateTimeInterface
    {
        return $this->dureeepreuve;
    }

    public function setDureeepreuve(\DateTimeInterface $dureeepreuve): self
    {
        $this->dureeepreuve = $dureeepreuve;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdFichiers(): ?Fichiers
    {
        return $this->idFichiers;
    }

    public function setIdFichiers(?Fichiers $idFichiers): self
    {
        $this->idFichiers = $idFichiers;

        return $this;
    }

    public function getIdModule(): ?Modules
    {
        return $this->idModule;
    }

    public function setIdModule(?Modules $idModule): self
    {
        $this->idModule = $idModule;

        return $this;
    }

    public function getIdUtilisateur(): ?Surveillant
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?Surveillant $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * @return Collection|Eleves[]
     */
    public function getIdEleve(): Collection
    {
        return $this->idEleve;
    }

    public function addIdEleve(Eleves $idEleve): self
    {
        if (!$this->idEleve->contains($idEleve)) {
            $this->idEleve[] = $idEleve;
        }

        return $this;
    }

    public function removeIdEleve(Eleves $idEleve): self
    {
        $this->idEleve->removeElement($idEleve);

        return $this;
    }

}
