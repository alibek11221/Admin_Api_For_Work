<?php

namespace App\Entity;

use App\Repository\RsuractualcodesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rsuractualcodes
 *
 * @ORM\Table(name="RsurActualCodes")
 * @ORM\Entity(repositoryClass=RsuractualcodesRepository::class)
 */
class Rsuractualcodes
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=500, nullable=false)
     */
    private $description;

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
