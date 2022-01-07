<?php

namespace App\Entity;

use App\Repository\RattrapageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=RattrapageRepository::class)
 * 
 */
class Rattrapage
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
    private $fichierRattrapage;

    /**
     * @ORM\Column(type="integer")
     */
    private $statutRattrapage;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_Module;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFichierRattrapage(): ?string
    {
        return $this->fichierRattrapage;
    }

    public function setFichierRattrapage(string $fichierRattrapage): self
    {
        $this->fichierRattrapage = $fichierRattrapage;

        return $this;
    }

    public function getStatutRattrapage(): ?int
    {
        return $this->statutRattrapage;
    }

    public function setStatutRattrapage(int $statutRattrapage): self
    {
        $this->statutRattrapage = $statutRattrapage;

        return $this;
    }

    public function getIdModule(): ?int
    {
        return $this->id_Module;
    }

    public function setIdModule(int $id_Module): self
    {
        $this->id_Module = $id_Module;

        return $this;
    }
}
