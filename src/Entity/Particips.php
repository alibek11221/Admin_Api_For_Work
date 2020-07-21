<?php

namespace App\Entity;

use App\Repository\ParticipsRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Particips
 *
 * @ORM\Table(name="Particips", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Particips", columns={"ProjectId", "Surname", "Name", "SecondName", "DocumNumber", "SchoolId", "ClassId"})}, indexes={@ORM\Index(name="IDX_7FDA9F26EE62E254", columns={"ProjectId"}), @ORM\Index(name="IDX_7FDA9F26B2FC9483", columns={"SchoolId"}), @ORM\Index(name="IDX_7FDA9F2620CFF829", columns={"OldGroup"})})
 * @ORM\Entity(repositoryClass=ParticipsRepository::class)
 */
class Particips
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
     * @var string
     *
     * @ORM\Column(name="Surname", type="string", length=25, nullable=false)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SecondName", type="string", length=25, nullable=true)
     */
    private $secondname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ClassId", type="string", length=4, nullable=true, options={"fixed"=true})
     */
    private $classid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="WasDoo", type="boolean", nullable=true)
     */
    private $wasdoo;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="Birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DocumNumber", type="string", length=10, nullable=true)
     */
    private $documnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DataSource", type="string", length=50, nullable=true)
     */
    private $datasource;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="AddedDate", type="date", nullable=true)
     */
    private $addeddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone", type="string", length=50, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ActualCode", type="smallint", nullable=true)
     */
    private $actualcode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ActualCode1", type="smallint", nullable=true)
     */
    private ?int $actualcode1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ActualCode22", type="smallint", nullable=true)
     */
    private $actualcode22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ActualCode12", type="smallint", nullable=true)
     */
    private $actualcode12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PrevYearGrade", type="string", length=50, nullable=true)
     */
    private ?string $prevyeargrade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BookAuthor", type="string", length=500, nullable=true)
     */
    private ?string $bookauthor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visible12", type="string", length=50, nullable=true)
     */
    private $visible12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visible1", type="string", length=50, nullable=true)
     */
    private $visible1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visible22", type="string", length=50, nullable=true)
     */
    private $visible22;

    /**
     * @var null|Projects
     *
     * @ORM\ManyToOne(targetEntity="Projects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="projectId", referencedColumnName="Id")
     * })
     */
    private ?Projects $project;

    /**
     * @var Schools
     *
     * @ORM\ManyToOne(targetEntity="Schools")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="schoolId", referencedColumnName="Id")
     * })
     */
    private ?Schools $school;

    /**
     * @var Oldgroup
     *
     * @ORM\ManyToOne(targetEntity="Oldgroup", inversedBy="id")
     * @ORM\Column(type="string", name="oldgroup")
     */
    private ?Oldgroup $oldgroup;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

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

    public function getSecondname(): ?string
    {
        return $this->secondname;
    }

    public function setSecondname(?string $secondname): self
    {
        $this->secondname = $secondname;

        return $this;
    }

    public function getClassid(): ?string
    {
        return $this->classid;
    }

    public function setClassid(?string $classid): self
    {
        $this->classid = $classid;

        return $this;
    }

    public function getWasdoo(): ?bool
    {
        return $this->wasdoo;
    }

    public function setWasdoo(?bool $wasdoo): self
    {
        $this->wasdoo = $wasdoo;

        return $this;
    }

    public function getBirthday(): ?DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getDocumnumber(): ?string
    {
        return $this->documnumber;
    }

    public function setDocumnumber(?string $documnumber): self
    {
        $this->documnumber = $documnumber;

        return $this;
    }

    public function getDatasource(): ?string
    {
        return $this->datasource;
    }

    public function setDatasource(?string $datasource): self
    {
        $this->datasource = $datasource;

        return $this;
    }

    public function getAddeddate(): ?DateTimeInterface
    {
        return $this->addeddate;
    }

    public function setAddeddate(?DateTimeInterface $addeddate): self
    {
        $this->addeddate = $addeddate;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getActualcode(): ?int
    {
        return $this->actualcode;
    }

    public function setActualcode(?int $actualcode): self
    {
        $this->actualcode = $actualcode;

        return $this;
    }

    public function getActualcode1(): ?int
    {
        return $this->actualcode1;
    }

    public function setActualcode1(?int $actualcode1): self
    {
        $this->actualcode1 = $actualcode1;

        return $this;
    }

    public function getActualcode22(): ?int
    {
        return $this->actualcode22;
    }

    public function setActualcode22(?int $actualcode22): self
    {
        $this->actualcode22 = $actualcode22;

        return $this;
    }

    public function getActualcode12(): ?int
    {
        return $this->actualcode12;
    }

    public function setActualcode12(?int $actualcode12): self
    {
        $this->actualcode12 = $actualcode12;

        return $this;
    }

    public function getPrevyeargrade(): ?string
    {
        return $this->prevyeargrade;
    }

    public function setPrevyeargrade(?string $prevyeargrade): self
    {
        $this->prevyeargrade = $prevyeargrade;

        return $this;
    }

    public function getBookauthor(): ?string
    {
        return $this->bookauthor;
    }

    public function setBookauthor(?string $bookauthor): self
    {
        $this->bookauthor = $bookauthor;

        return $this;
    }

    public function getVisible12(): ?string
    {
        return $this->visible12;
    }

    public function setVisible12(?string $visible12): self
    {
        $this->visible12 = $visible12;

        return $this;
    }

    public function getVisible1(): ?string
    {
        return $this->visible1;
    }

    public function setVisible1(?string $visible1): self
    {
        $this->visible1 = $visible1;

        return $this;
    }

    public function getVisible22(): ?string
    {
        return $this->visible22;
    }

    public function setVisible22(?string $visible22): self
    {
        $this->visible22 = $visible22;

        return $this;
    }

    public function getProject(): ?Projects
    {
        return $this->project;
    }

    public function setProject(?Projects $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getSchool(): ?Schools
    {
        return $this->school;
    }

    public function setSchool(?Schools $school): self
    {
        $this->school = $school;

        return $this;
    }

    public function getOldgroup(): ?Oldgroup
    {
        return $this->oldgroup;
    }

    public function setOldgroup(?Oldgroup $oldgroup): self
    {
        $this->oldgroup = $oldgroup;

        return $this;
    }

}
