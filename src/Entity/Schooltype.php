<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schooltype
 *
 * @ORM\Table(name="schooltype", uniqueConstraints={@ORM\UniqueConstraint(name="IX_cschooltype", columns={"SchoolTypeCode"})})
 * @ORM\Entity
 */
class Schooltype
{
    /**
     * @var int
     *
     * @ORM\Column(name="SchoolTypeCode", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $schooltypecode;

    /**
     * @var string
     *
     * @ORM\Column(name="SchoolTypeName", type="string", length=100, nullable=false, options={"fixed"=true})
     */
    private $schooltypename;

    public function getSchooltypecode(): ?int
    {
        return $this->schooltypecode;
    }

    public function getSchooltypename(): ?string
    {
        return $this->schooltypename;
    }

    public function setSchooltypename(string $schooltypename): self
    {
        $this->schooltypename = $schooltypename;

        return $this;
    }


}
