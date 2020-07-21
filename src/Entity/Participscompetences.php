<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participscompetences
 *
 * @ORM\Table(name="ParticipsCompetences")
 * @ORM\Entity
 */
class Participscompetences
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FIO", type="string", length=255, nullable=true)
     */
    private $fio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SchoolId", type="string", length=255, nullable=true)
     */
    private $schoolid;

    /**
     * @var int
     *
     * @ORM\Column(name="PrimaryMark", type="integer", nullable=false)
     */
    private $primarymark;

    /**
     * @var int
     *
     * @ORM\Column(name="CompetenceLevel", type="smallint", nullable=false)
     */
    private $competencelevel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marks", type="string", length=255, nullable=true)
     */
    private $marks;

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function getFio(): ?string
    {
        return $this->fio;
    }

    public function setFio(?string $fio): self
    {
        $this->fio = $fio;

        return $this;
    }

    public function getSchoolid(): ?string
    {
        return $this->schoolid;
    }

    public function setSchoolid(?string $schoolid): self
    {
        $this->schoolid = $schoolid;

        return $this;
    }

    public function getPrimarymark(): ?int
    {
        return $this->primarymark;
    }

    public function setPrimarymark(int $primarymark): self
    {
        $this->primarymark = $primarymark;

        return $this;
    }

    public function getCompetencelevel(): ?int
    {
        return $this->competencelevel;
    }

    public function setCompetencelevel(int $competencelevel): self
    {
        $this->competencelevel = $competencelevel;

        return $this;
    }

    public function getMarks(): ?string
    {
        return $this->marks;
    }

    public function setMarks(?string $marks): self
    {
        $this->marks = $marks;

        return $this;
    }


}
