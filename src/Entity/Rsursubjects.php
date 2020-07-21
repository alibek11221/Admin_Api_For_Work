<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rsursubjects
 *
 * @ORM\Table(name="RsurSubjects")
 * @ORM\Entity
 */
class Rsursubjects
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $code;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=false)
     */
    private string $name;

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
