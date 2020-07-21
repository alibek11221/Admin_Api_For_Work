<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projects
 *
 * @ORM\Table(name="Projects")
 * @ORM\Entity(repositoryClass="App\Repository\ProjectsRepository")
 */
class Projects
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name", type="string", length=0, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ClassNumbers", type="string", length=25, nullable=true)
     */
    private $classnumbers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getClassnumbers(): ?string
    {
        return $this->classnumbers;
    }

    public function setClassnumbers(?string $classnumbers): self
    {
        $this->classnumbers = $classnumbers;

        return $this;
    }


}
