<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;


/**
 * Projecttests
 *
 * @ORM\Table(name="ProjectTests", indexes={@ORM\Index(name="IDX_AF24B0A1EE62E254", columns={"ProjectId"}), @ORM\Index(name="IDX_AF24B0A136198D8C", columns={"TestId"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProjecttestsRepository")
 */
class Projecttests
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
     * @var DateTime
     *
     * @ORM\Column(name="TestDate", type="date", nullable=false)
     */
    private $testdate;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsOpen", type="boolean", nullable=false)
     */
    private $isopen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TestNumber", type="integer", nullable=true)
     */
    private $testnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PassPrimaryMark", type="integer", nullable=true)
     */
    private $passprimarymark;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SubjectCode", type="integer", nullable=true)
     */
    private $subjectcode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ClassNumber", type="integer", nullable=true)
     */
    private $classnumber;

    /**
     * @var Projects
     *
     * @ORM\ManyToOne(targetEntity="Projects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProjectId", referencedColumnName="Id")
     * })
     */
    private $projectid;

    /**
     * @var Tests
     *
     * @ORM\ManyToOne(targetEntity="Tests", inversedBy="id")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TestId", referencedColumnName="Id")
     * })
     */
    private $testid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTestdate(): ?DateTimeInterface
    {
        return $this->testdate;
    }

    public function setTestdate(DateTimeInterface $testdate): self
    {
        $this->testdate = $testdate;

        return $this;
    }

    public function getIsopen(): ?bool
    {
        return $this->isopen;
    }

    public function setIsopen(bool $isopen): self
    {
        $this->isopen = $isopen;

        return $this;
    }

    public function getTestnumber(): ?int
    {
        return $this->testnumber;
    }

    public function setTestnumber(?int $testnumber): self
    {
        $this->testnumber = $testnumber;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getPassprimarymark(): ?int
    {
        return $this->passprimarymark;
    }

    public function setPassprimarymark(?int $passprimarymark): self
    {
        $this->passprimarymark = $passprimarymark;

        return $this;
    }

    public function getSubjectcode(): ?int
    {
        return $this->subjectcode;
    }

    public function setSubjectcode(?int $subjectcode): self
    {
        $this->subjectcode = $subjectcode;

        return $this;
    }

    public function getClassnumber(): ?int
    {
        return $this->classnumber;
    }

    public function setClassnumber(?int $classnumber): self
    {
        $this->classnumber = $classnumber;

        return $this;
    }

    public function getProjectid(): ?Projects
    {
        return $this->projectid;
    }

    public function setProjectid(?Projects $projectid): self
    {
        $this->projectid = $projectid;

        return $this;
    }

    public function getTestid(): ?Tests
    {
        return $this->testid;
    }

    public function setTestid(?Tests $testid): self
    {
        $this->testid = $testid;

        return $this;
    }


}
