<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Modules
 *
 * @ORM\Table(name="Modules", uniqueConstraints={@ORM\UniqueConstraint(name="code", columns={"code"}), @ORM\UniqueConstraint(name="libelle", columns={"libelle"})}, indexes={@ORM\Index(name="Id_Utilisateur", columns={"Id_Utilisateur"})})
 * @ORM\Entity
 * @ApiResource()
 */
class Modules
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Module", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModule;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=150, nullable=false)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     */
    private $code;

    /**
     * @var \Enseignant
     *
     * @ORM\ManyToOne(targetEntity="Enseignant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Utilisateur", referencedColumnName="Id_Utilisateur")
     * })
     */
    private $idUtilisateur;

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getIdUtilisateur(): ?Enseignant
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?Enseignant $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }


}
