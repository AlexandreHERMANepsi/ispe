<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Classes
 *
 * @ORM\Table(name="classes", uniqueConstraints={@ORM\UniqueConstraint(name="classe", columns={"classe"})})
 * @ORM\Entity
 * @ApiResource()
 */


class Classes
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Classe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasse;

    /**
     * @var string
     *
     * @ORM\Column(name="classe", type="string", length=100, nullable=false)
     */
    private $classe;

    public function getIdClasse(): ?int
    {
        return $this->idClasse;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }


}
