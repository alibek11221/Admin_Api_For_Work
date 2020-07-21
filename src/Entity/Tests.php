<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tests
 *
 * @ORM\Table(name="Tests", indexes={@ORM\Index(name="IDX_D3A1D35A4DA4947", columns={"SubjectCode"})})
 * @ORM\Entity
 */
class Tests
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumberCode", type="string", length=10, nullable=true)
     */
    private $numbercode;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=0, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="FullName", type="string", length=0, nullable=false)
     */
    private $fullname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ExcerMaxMarks", type="string", length=50, nullable=true)
     */
    private $excermaxmarks;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsFinal", type="boolean", nullable=false)
     */
    private $isfinal;

    /**
     * @var Rsursubjects
     *
     * @ORM\ManyToOne(targetEntity="Rsursubjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SubjectCode", referencedColumnName="Code")
     * })
     */
    private $subjectcode;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getNumbercode(): ?string
    {
        return $this->numbercode;
    }

    public function setNumbercode(?string $numbercode): self
    {
        $this->numbercode = $numbercode;

        return $this;
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

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getExcermaxmarks(): ?string
    {
        return $this->excermaxmarks;
    }

    public function setExcermaxmarks(?string $excermaxmarks): self
    {
        $this->excermaxmarks = $excermaxmarks;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getDate(): ?DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIsfinal(): ?bool
    {
        return $this->isfinal;
    }

    public function setIsfinal(bool $isfinal): self
    {
        $this->isfinal = $isfinal;

        return $this;
    }

    public function getSubjectcode(): ?Rsursubjects
    {
        return $this->subjectcode;
    }

    public function setSubjectcode(?Rsursubjects $subjectcode): self
    {
        $this->subjectcode = $subjectcode;

        return $this;
    }


}
