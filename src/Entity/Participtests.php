<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participtests
 *
 * @ORM\Table(name="ParticipTests", indexes={@ORM\Index(name="IDX_42CE2F531C0A237B", columns={"ProjectTestId"}), @ORM\Index(name="IDX_42CE2F536F06CBD7", columns={"ParticipId"})})
 * @ORM\Entity
 */
class Participtests
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PrimaryMark", type="float", precision=53, scale=0, nullable=true)
     */
    private $primarymark;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grade5", type="integer", nullable=true)
     */
    private $grade5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GradeString", type="string", length=100, nullable=true)
     */
    private $gradestring;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grade5_v2", type="integer", nullable=true)
     */
    private $grade5V2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OptionNumber", type="smallint", nullable=true)
     */
    private $optionnumber;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PrimaryMark_v2", type="float", precision=53, scale=0, nullable=true)
     */
    private $primarymarkV2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete", type="string", length=50, nullable=true)
     */
    private $delete;

    /**
     * @var Projecttests
     *
     * @ORM\ManyToOne(targetEntity="Projecttests")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProjectTestId", referencedColumnName="Id")
     * })
     */
    private $projecttestid;

    /**
     * @var Particips
     *
     * @ORM\ManyToOne(targetEntity="Particips")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ParticipId", referencedColumnName="Id")
     * })
     */
    private $participid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrimarymark(): ?float
    {
        return $this->primarymark;
    }

    public function setPrimarymark(?float $primarymark): self
    {
        $this->primarymark = $primarymark;

        return $this;
    }

    public function getGrade5(): ?int
    {
        return $this->grade5;
    }

    public function setGrade5(?int $grade5): self
    {
        $this->grade5 = $grade5;

        return $this;
    }

    public function getGradestring(): ?string
    {
        return $this->gradestring;
    }

    public function setGradestring(?string $gradestring): self
    {
        $this->gradestring = $gradestring;

        return $this;
    }

    public function getGrade5V2(): ?int
    {
        return $this->grade5V2;
    }

    public function setGrade5V2(?int $grade5V2): self
    {
        $this->grade5V2 = $grade5V2;

        return $this;
    }

    public function getOptionnumber(): ?int
    {
        return $this->optionnumber;
    }

    public function setOptionnumber(?int $optionnumber): self
    {
        $this->optionnumber = $optionnumber;

        return $this;
    }

    public function getPrimarymarkV2(): ?float
    {
        return $this->primarymarkV2;
    }

    public function setPrimarymarkV2(?float $primarymarkV2): self
    {
        $this->primarymarkV2 = $primarymarkV2;

        return $this;
    }

    public function getDelete(): ?string
    {
        return $this->delete;
    }

    public function setDelete(?string $delete): self
    {
        $this->delete = $delete;

        return $this;
    }

    public function getProjecttestid(): ?Projecttests
    {
        return $this->projecttestid;
    }

    public function setProjecttestid(?Projecttests $projecttestid): self
    {
        $this->projecttestid = $projecttestid;

        return $this;
    }

    public function getParticipid(): ?Particips
    {
        return $this->participid;
    }

    public function setParticipid(?Particips $participid): self
    {
        $this->participid = $participid;

        return $this;
    }


}
