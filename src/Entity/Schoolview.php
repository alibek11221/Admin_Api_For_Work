<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schoolview
 *
 * @ORM\Table(name="schoolview")
 * @ORM\Entity
 */
class Schoolview
{
    /**
     * @var int
     *
     * @ORM\Column(name="SchoolViewCode", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $schoolviewcode;

    /**
     * @var string
     *
     * @ORM\Column(name="SchoolViewName", type="string", length=0, nullable=false)
     */
    private $schoolviewname;

    public function getSchoolviewcode(): ?int
    {
        return $this->schoolviewcode;
    }

    public function getSchoolviewname(): ?string
    {
        return $this->schoolviewname;
    }

    public function setSchoolviewname(string $schoolviewname): self
    {
        $this->schoolviewname = $schoolviewname;

        return $this;
    }


}
