<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Fichiers
 *
 * @ORM\Table(name="Fichiers")
 * @ORM\Entity
 * @ApiResource()
 */
class Fichiers
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Fichiers", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFichiers;

    /**
     * @var string
     *
     * @ORM\Column(name="NomFichier", type="string", length=255, nullable=false)
     */
    private $nomfichier;

    /**
     * @var string
     *
     * @ORM\Column(name="ExtensionFichier", type="string", length=255, nullable=false)
     */
    private $extensionfichier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fichier", type="datetime", nullable=false)
     */
    private $dateFichier;

    /**
     * @var float
     *
     * @ORM\Column(name="taille", type="float", precision=10, scale=0, nullable=false)
     */
    private $taille;

    public function getIdFichiers(): ?int
    {
        return $this->idFichiers;
    }

    public function getNomfichier(): ?string
    {
        return $this->nomfichier;
    }

    public function setNomfichier(string $nomfichier): self
    {
        $this->nomfichier = $nomfichier;

        return $this;
    }

    public function getExtensionfichier(): ?string
    {
        return $this->extensionfichier;
    }

    public function setExtensionfichier(string $extensionfichier): self
    {
        $this->extensionfichier = $extensionfichier;

        return $this;
    }

    public function getDateFichier(): ?\DateTimeInterface
    {
        return $this->dateFichier;
    }

    public function setDateFichier(\DateTimeInterface $dateFichier): self
    {
        $this->dateFichier = $dateFichier;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): self
    {
        $this->taille = $taille;

        return $this;
    }


}
