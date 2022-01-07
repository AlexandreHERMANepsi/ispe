<?php

namespace App\Entity;

use App\Repository\ResponsableRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ResponsableRepository::class)
 * 
 */
class Responsable
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
    private $nom_responsable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_responsable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomResponsable(): ?string
    {
        return $this->nom_responsable;
    }

    public function setNomResponsable(string $nom_responsable): self
    {
        $this->nom_responsable = $nom_responsable;

        return $this;
    }

    public function getPrenomResponsable(): ?string
    {
        return $this->prenom_responsable;
    }

    public function setPrenomResponsable(string $prenom_responsable): self
    {
        $this->prenom_responsable = $prenom_responsable;

        return $this;
    }
}
