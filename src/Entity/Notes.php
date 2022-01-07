<?php

namespace App\Entity;

use App\Repository\NotesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=NotesRepository::class)
 * 
 */
class Notes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idEleve;

    /**
     * @ORM\Column(type="integer")
     */
    private $idRattrapage;

    /**
     * @ORM\Column(type="integer")
     */
    private $resultat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEleve(): ?int
    {
        return $this->idEleve;
    }

    public function setIdEleve(int $idEleve): self
    {
        $this->idEleve = $idEleve;

        return $this;
    }

    public function getIdRattrapage(): ?int
    {
        return $this->idRattrapage;
    }

    public function setIdRattrapage(int $idRattrapage): self
    {
        $this->idRattrapage = $idRattrapage;

        return $this;
    }

    public function getResultat(): ?int
    {
        return $this->resultat;
    }

    public function setResultat(int $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }
}
