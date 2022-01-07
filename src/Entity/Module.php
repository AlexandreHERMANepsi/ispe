<?php

namespace App\Entity;

use App\Repository\ModuleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ModuleRepository::class)
 * 
 */
class Module
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
    private $codeModule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleModule;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeModule(): ?string
    {
        return $this->codeModule;
    }

    public function setCodeModule(string $codeModule): self
    {
        $this->codeModule = $codeModule;

        return $this;
    }

    public function getLibelleModule(): ?string
    {
        return $this->libelleModule;
    }

    public function setLibelleModule(string $libelleModule): self
    {
        $this->libelleModule = $libelleModule;

        return $this;
    }
}
