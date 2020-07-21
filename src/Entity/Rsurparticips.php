<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rsurparticips
 *
 * @ORM\Table(name="RsurParticips", indexes={@ORM\Index(name="IDX_D16CB72085FDF66", columns={"ActualCode"})})
 * @ORM\Entity
 */
class Rsurparticips
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
     * @ORM\Column(name="OldCode", type="string", length=12, nullable=true, options={"fixed"=true})
     */
    private $oldcode;

    /**
     * @var Schools
     *
     * @ORM\ManyToOne(targetEntity="Schools")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="schoolId", referencedColumnName="Id")
     * })
     */
    private Schools $school;

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
     * @var Rsursubjects
     *
     * @ORM\ManyToOne(targetEntity="Rsursubjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rsursubjectcode", referencedColumnName="Code")
     * })
     */
    private Rsursubjects $rsursubject;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CategoryId", type="integer", nullable=true)
     */
    private $categoryid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Experience", type="integer", nullable=true)
     */
    private $experience;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="Birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ClassNumbers", type="string", length=30, nullable=true)
     */
    private $classnumbers;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SchoolIdFrom", type="string", length=4, nullable=true, options={"fixed"=true})
     */
    private $schoolidfrom;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="AddedDate", type="datetime", nullable=true)
     */
    private $addeddate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tutors", type="integer", nullable=true)
     */
    private $tutors;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RsurParticipidTutors", type="integer", nullable=true)
     */
    private $rsurparticipidtutors;

    /**
     * @var Rsuractualcodes
     *
     * @ORM\ManyToOne(targetEntity="Rsuractualcodes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ActualCode", referencedColumnName="Code")
     * })
     */
    private Rsuractualcodes $actualcode;

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function getOldcode(): ?string
    {
        return $this->oldcode;
    }

    public function setOldcode(?string $oldcode): self
    {
        $this->oldcode = $oldcode;

        return $this;
    }

    public function getSchool(): ?Schools
    {
        return $this->school;
    }

    public function setSchool(Schools $school): self
    {
        $this->school = $school;

        return $this;
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

    public function getRsursubject(): ?Rsursubjects
    {
        return $this->rsursubject;
    }

    public function setRsursubject(Rsursubjects $rsursubject): self
    {
        $this->rsursubject = $rsursubject;

        return $this;
    }

    public function getCategoryid(): ?int
    {
        return $this->categoryid;
    }

    public function setCategoryid(?int $categoryid): self
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(?int $experience): self
    {
        $this->experience = $experience;

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

    public function getBirthday(): ?DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

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

    public function getSchoolidfrom(): ?string
    {
        return $this->schoolidfrom;
    }

    public function setSchoolidfrom(?string $schoolidfrom): self
    {
        $this->schoolidfrom = $schoolidfrom;

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

    public function getTutors(): ?int
    {
        return $this->tutors;
    }

    public function setTutors(?int $tutors): self
    {
        $this->tutors = $tutors;

        return $this;
    }

    public function getRsurparticipidtutors(): ?int
    {
        return $this->rsurparticipidtutors;
    }

    public function setRsurparticipidtutors(?int $rsurparticipidtutors): self
    {
        $this->rsurparticipidtutors = $rsurparticipidtutors;

        return $this;
    }

    public function getActualcode(): ?Rsuractualcodes
    {
        return $this->actualcode;
    }

    public function setActualcode(?Rsuractualcodes $actualcode): self
    {
        $this->actualcode = $actualcode;

        return $this;
    }


}
