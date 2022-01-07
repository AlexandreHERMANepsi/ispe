<?php

namespace App\Entity;

use App\Repository\EleveRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=EleveRepository::class)
 * 
 */
class Eleve
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomEleve;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomEleve;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoEleve;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeClasse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEleve(): ?string
    {
        return $this->nomEleve;
    }

    public function setNomEleve(string $nomEleve): self
    {
        $this->nomEleve = $nomEleve;

        return $this;
    }

    public function getPrenomEleve(): ?string
    {
        return $this->prenomEleve;
    }

    public function setPrenomEleve(string $prenomEleve): self
    {
        $this->prenomEleve = $prenomEleve;

        return $this;
    }

    public function getPhotoEleve(): ?string
    {
        return $this->photoEleve;
    }

    public function setPhotoEleve(?string $photoEleve): self
    {
        $this->photoEleve = $photoEleve;

        return $this;
    }

    public function getCodeClasse(): ?int
    {
        return $this->codeClasse;
    }

    public function setCodeClasse(int $codeClasse): self
    {
        $this->codeClasse = $codeClasse;

        return $this;
    }
}
