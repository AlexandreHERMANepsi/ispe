<?php

namespace App\Entity;

use App\Repository\IntervenantRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=IntervenantRepository::class)
 * 
 */
class Intervenant
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
    private $nom_Intervenant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_Intervenant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomIntervenant(): ?string
    {
        return $this->nom_Intervenant;
    }

    public function setNomIntervenant(string $nom_Intervenant): self
    {
        $this->nom_Intervenant = $nom_Intervenant;

        return $this;
    }

    public function getPrenomIntervenant(): ?string
    {
        return $this->prenom_Intervenant;
    }

    public function setPrenomIntervenant(string $prenom_Intervenant): self
    {
        $this->prenom_Intervenant = $prenom_Intervenant;

        return $this;
    }
}
