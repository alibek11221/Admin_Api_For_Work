<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schools
 *
 * @ORM\Table(name="Schools", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Schools_Name", columns={"Name"})}, indexes={@ORM\Index(name="IDX_88F90249F1EA5CB6", columns={"AreaCode"}), @ORM\Index(name="IDX_88F90249612D02EB", columns={"TypeCode"}), @ORM\Index(name="IDX_88F90249DEDCE92", columns={"ViewCode"}), @ORM\Index(name="IDX_88F9024980299F05", columns={"TownTypeId"}), @ORM\Index(name="IDX_88F90249C566EB4F", columns={"Monit95Login"})})
 * @ORM\Entity
 */
class Schools
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="string", length=4, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VprCode", type="string", length=50, nullable=true)
     */
    private $vprcode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="GiaCode", type="integer", nullable=true)
     */
    private $giacode;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=250, nullable=false, options={"comment"="Краткое наименование образовательной организации"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FullName", type="string", length=0, nullable=true, options={"comment"="Полное наименование образовательной организации"})
     */
    private $fullname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Address", type="string", length=200, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Director", type="string", length=100, nullable=true, options={"comment"="Фамилия, имя и отчество директора образовательной организации"})
     */
    private $director;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone", type="string", length=50, nullable=true, options={"comment"="Номер телефона образовательной организации"})
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Admin", type="string", length=100, nullable=true, options={"comment"="Заместитель директора по ИКТ"})
     */
    private $admin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AdminPhone", type="string", length=50, nullable=true, options={"comment"="Номер телефона заместителя директора по ИКТ"})
     */
    private $adminphone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true, options={"comment"="Электронный адрес образовательной организации"})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ReportLink", type="string", length=255, nullable=true, options={"comment"="Ссылка на папку-отчетов в облаке Mail.ru"})
     */
    private $reportlink;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PropertyTypeCode", type="integer", nullable=true)
     */
    private $propertytypecode;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsAlive", type="boolean", nullable=false)
     */
    private $isalive;

    /**
     * @var int|null
     *
     * @ORM\Column(name="GoverCode", type="integer", nullable=true)
     */
    private $govercode;

    /**
     * @var \Areas
     *
     * @ORM\ManyToOne(targetEntity="Areas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AreaCode", referencedColumnName="Code")
     * })
     */
    private $areacode;

//    /**
//     * @var \Schooltype
//     *
//     * @ORM\ManyToOne(targetEntity="Schooltype")
//     * @ORM\JoinColumns({
//     *   @ORM\JoinColumn(name="TypeCode", referencedColumnName="SchoolTypeCode")
//     * })
//     */
//    private $typecode;
//
//    /**
//     * @var \Schoolview
//     *
//     * @ORM\ManyToOne(targetEntity="Schoolview")
//     * @ORM\JoinColumns({
//     *   @ORM\JoinColumn(name="ViewCode", referencedColumnName="SchoolViewCode")
//     * })
//     */
//    private $viewcode;
//
//    /**
//     * @var \Towntypes
//     *
//     * @ORM\ManyToOne(targetEntity="Towntypes")
//     * @ORM\JoinColumns({
//     *   @ORM\JoinColumn(name="TownTypeId", referencedColumnName="Id")
//     * })
//     */
//    private $towntypeid;
//
//    /**
//     * @var \Monit95users
//     *
//     * @ORM\ManyToOne(targetEntity="Monit95users")
//     * @ORM\JoinColumns({
//     *   @ORM\JoinColumn(name="Monit95Login", referencedColumnName="Login")
//     * })
//     */
//    private $monit95login;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getVprcode(): ?string
    {
        return $this->vprcode;
    }

    public function setVprcode(?string $vprcode): self
    {
        $this->vprcode = $vprcode;

        return $this;
    }

    public function getGiacode(): ?int
    {
        return $this->giacode;
    }

    public function setGiacode(?int $giacode): self
    {
        $this->giacode = $giacode;

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

    public function setFullname(?string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(?string $director): self
    {
        $this->director = $director;

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

    public function getAdmin(): ?string
    {
        return $this->admin;
    }

    public function setAdmin(?string $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function getAdminphone(): ?string
    {
        return $this->adminphone;
    }

    public function setAdminphone(?string $adminphone): self
    {
        $this->adminphone = $adminphone;

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

    public function getReportlink(): ?string
    {
        return $this->reportlink;
    }

    public function setReportlink(?string $reportlink): self
    {
        $this->reportlink = $reportlink;

        return $this;
    }

    public function getPropertytypecode(): ?int
    {
        return $this->propertytypecode;
    }

    public function setPropertytypecode(?int $propertytypecode): self
    {
        $this->propertytypecode = $propertytypecode;

        return $this;
    }

    public function getIsalive(): ?bool
    {
        return $this->isalive;
    }

    public function setIsalive(bool $isalive): self
    {
        $this->isalive = $isalive;

        return $this;
    }

    public function getGovercode(): ?int
    {
        return $this->govercode;
    }

    public function setGovercode(?int $govercode): self
    {
        $this->govercode = $govercode;

        return $this;
    }

    public function getAreacode(): ?Areas
    {
        return $this->areacode;
    }

    public function setAreacode(?Areas $areacode): self
    {
        $this->areacode = $areacode;

        return $this;
    }
//
//    public function getTypecode(): ?Schooltype
//    {
//        return $this->typecode;
//    }
//
//    public function setTypecode(?Schooltype $typecode): self
//    {
//        $this->typecode = $typecode;
//
//        return $this;
//    }
//
//    public function getViewcode(): ?Schoolview
//    {
//        return $this->viewcode;
//    }
//
//    public function setViewcode(?Schoolview $viewcode): self
//    {
//        $this->viewcode = $viewcode;
//
//        return $this;
//    }
//
//    public function getTowntypeid(): ?Towntypes
//    {
//        return $this->towntypeid;
//    }
//
//    public function setTowntypeid(?Towntypes $towntypeid): self
//    {
//        $this->towntypeid = $towntypeid;
//
//        return $this;
//    }
//
//    public function getMonit95login(): ?Monit95users
//    {
//        return $this->monit95login;
//    }
//
//    public function setMonit95login(?Monit95users $monit95login): self
//    {
//        $this->monit95login = $monit95login;
//
//        return $this;
//    }


}
