<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersGrbac
 *
 * @ORM\Table(name="users_grbac", indexes={@ORM\Index(name="uk1", columns={"email"}), @ORM\Index(name="uk2", columns={"username"}), @ORM\Index(name="ldap", columns={"ldapusername"})})
 * @ORM\Entity
 */
class UsersGrbac
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=20, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=160, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="namef", type="string", length=20, nullable=true)
     */
    private $namef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="namem", type="string", length=20, nullable=true)
     */
    private $namem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="namel", type="string", length=20, nullable=true)
     */
    private $namel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=120, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastlogin", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastlogin = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastcontroller", type="string", length=50, nullable=true)
     */
    private $lastcontroller = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastaction", type="string", length=50, nullable=true)
     */
    private $lastaction = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="valid_code", type="string", length=45, nullable=true)
     */
    private $validCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="authorize", type="string", length=20, nullable=true)
     */
    private $authorize;

    /**
     * @var string|null
     *
     * @ORM\Column(name="auth_code", type="string", length=20, nullable=true)
     */
    private $authCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="algo", type="string", length=20, nullable=true)
     */
    private $algo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="webservice", type="boolean", nullable=true)
     */
    private $webservice = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="role", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\Column(name="org_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $orgId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="obj_table", type="string", length=50, nullable=true)
     */
    private $objTable;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="obj_id", type="boolean", nullable=true)
     */
    private $objId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="obj_id_list", type="text", length=65535, nullable=true)
     */
    private $objIdList;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ldapusername", type="string", length=30, nullable=true)
     */
    private $ldapusername;

    /**
     * @var bool
     *
     * @ORM\Column(name="finance", type="boolean", nullable=false, options={"comment"="Признак финансиста"})
     */
    private $finance = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="viewall", type="boolean", nullable=false, options={"comment"="Если установлен этот признак, пользователь видит все записи, как наблюдатель, а остальные права - по его основной роли"})
     */
    private $viewall = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="dogovors", type="boolean", nullable=false, options={"comment"="Признак работающего с договорами"})
     */
    private $dogovors = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="report_level", type="integer", nullable=false, options={"unsigned"=true,"comment"="Уровень доступа к отчетам. 0 - полный доступ, 99 - нет доступа"})
     */
    private $reportLevel = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="archive_admin", type="boolean", nullable=false)
     */
    private $archiveAdmin = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="archive_view", type="boolean", nullable=false)
     */
    private $archiveView = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="archive2_admin", type="boolean", nullable=false)
     */
    private $archive2Admin = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="archive2_view", type="boolean", nullable=false)
     */
    private $archive2View = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="vsat_admin", type="boolean", nullable=false)
     */
    private $vsatAdmin = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="vsat_view", type="boolean", nullable=false)
     */
    private $vsatView = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tlf", type="string", length=255, nullable=true)
     */
    private $tlf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gosexp_view", type="integer", nullable=true)
     */
    private $gosexpView = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="gosexp_admin", type="integer", nullable=true)
     */
    private $gosexpAdmin = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sys_projects_view", type="integer", nullable=true)
     */
    private $sysProjectsView = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sys_projects_admin", type="integer", nullable=true)
     */
    private $sysProjectsAdmin = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ks2_check_admin", type="integer", nullable=true)
     */
    private $ks2CheckAdmin = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ks2_check_user", type="integer", nullable=true)
     */
    private $ks2CheckUser = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ks2_check_read", type="integer", nullable=true)
     */
    private $ks2CheckRead = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="obj_problem_edit", type="integer", nullable=true)
     */
    private $objProblemEdit = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_crimea", type="integer", nullable=true)
     */
    private $idCrimea = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="project_type", type="text", length=65535, nullable=false)
     */
    private $projectType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="demontazh_rights", type="text", length=65535, nullable=true)
     */
    private $demontazhRights;

    /**
     * @var string
     *
     * @ORM\Column(name="file_manager", type="string", length=255, nullable=false)
     */
    private $fileManager = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="inherit_role", type="string", length=255, nullable=false)
     */
    private $inheritRole = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNamef(): ?string
    {
        return $this->namef;
    }

    public function setNamef(?string $namef): self
    {
        $this->namef = $namef;

        return $this;
    }

    public function getNamem(): ?string
    {
        return $this->namem;
    }

    public function setNamem(?string $namem): self
    {
        $this->namem = $namem;

        return $this;
    }

    public function getNamel(): ?string
    {
        return $this->namel;
    }

    public function setNamel(?string $namel): self
    {
        $this->namel = $namel;

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

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(?\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getLastlogin(): ?\DateTimeInterface
    {
        return $this->lastlogin;
    }

    public function setLastlogin(\DateTimeInterface $lastlogin): self
    {
        $this->lastlogin = $lastlogin;

        return $this;
    }

    public function getLastcontroller(): ?string
    {
        return $this->lastcontroller;
    }

    public function setLastcontroller(?string $lastcontroller): self
    {
        $this->lastcontroller = $lastcontroller;

        return $this;
    }

    public function getLastaction(): ?string
    {
        return $this->lastaction;
    }

    public function setLastaction(?string $lastaction): self
    {
        $this->lastaction = $lastaction;

        return $this;
    }

    public function getValidCode(): ?string
    {
        return $this->validCode;
    }

    public function setValidCode(?string $validCode): self
    {
        $this->validCode = $validCode;

        return $this;
    }

    public function getAuthorize(): ?string
    {
        return $this->authorize;
    }

    public function setAuthorize(?string $authorize): self
    {
        $this->authorize = $authorize;

        return $this;
    }

    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }

    public function setAuthCode(?string $authCode): self
    {
        $this->authCode = $authCode;

        return $this;
    }

    public function getAlgo(): ?string
    {
        return $this->algo;
    }

    public function setAlgo(?string $algo): self
    {
        $this->algo = $algo;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getWebservice(): ?bool
    {
        return $this->webservice;
    }

    public function setWebservice(?bool $webservice): self
    {
        $this->webservice = $webservice;

        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getOrgId(): ?int
    {
        return $this->orgId;
    }

    public function setOrgId(int $orgId): self
    {
        $this->orgId = $orgId;

        return $this;
    }

    public function getObjTable(): ?string
    {
        return $this->objTable;
    }

    public function setObjTable(?string $objTable): self
    {
        $this->objTable = $objTable;

        return $this;
    }

    public function getObjId(): ?bool
    {
        return $this->objId;
    }

    public function setObjId(?bool $objId): self
    {
        $this->objId = $objId;

        return $this;
    }

    public function getObjIdList(): ?string
    {
        return $this->objIdList;
    }

    public function setObjIdList(?string $objIdList): self
    {
        $this->objIdList = $objIdList;

        return $this;
    }

    public function getLdapusername(): ?string
    {
        return $this->ldapusername;
    }

    public function setLdapusername(?string $ldapusername): self
    {
        $this->ldapusername = $ldapusername;

        return $this;
    }

    public function getFinance(): ?bool
    {
        return $this->finance;
    }

    public function setFinance(bool $finance): self
    {
        $this->finance = $finance;

        return $this;
    }

    public function getViewall(): ?bool
    {
        return $this->viewall;
    }

    public function setViewall(bool $viewall): self
    {
        $this->viewall = $viewall;

        return $this;
    }

    public function getDogovors(): ?bool
    {
        return $this->dogovors;
    }

    public function setDogovors(bool $dogovors): self
    {
        $this->dogovors = $dogovors;

        return $this;
    }

    public function getReportLevel(): ?int
    {
        return $this->reportLevel;
    }

    public function setReportLevel(int $reportLevel): self
    {
        $this->reportLevel = $reportLevel;

        return $this;
    }

    public function getArchiveAdmin(): ?bool
    {
        return $this->archiveAdmin;
    }

    public function setArchiveAdmin(bool $archiveAdmin): self
    {
        $this->archiveAdmin = $archiveAdmin;

        return $this;
    }

    public function getArchiveView(): ?bool
    {
        return $this->archiveView;
    }

    public function setArchiveView(bool $archiveView): self
    {
        $this->archiveView = $archiveView;

        return $this;
    }

    public function getArchive2Admin(): ?bool
    {
        return $this->archive2Admin;
    }

    public function setArchive2Admin(bool $archive2Admin): self
    {
        $this->archive2Admin = $archive2Admin;

        return $this;
    }

    public function getArchive2View(): ?bool
    {
        return $this->archive2View;
    }

    public function setArchive2View(bool $archive2View): self
    {
        $this->archive2View = $archive2View;

        return $this;
    }

    public function getVsatAdmin(): ?bool
    {
        return $this->vsatAdmin;
    }

    public function setVsatAdmin(bool $vsatAdmin): self
    {
        $this->vsatAdmin = $vsatAdmin;

        return $this;
    }

    public function getVsatView(): ?bool
    {
        return $this->vsatView;
    }

    public function setVsatView(bool $vsatView): self
    {
        $this->vsatView = $vsatView;

        return $this;
    }

    public function getTlf(): ?string
    {
        return $this->tlf;
    }

    public function setTlf(?string $tlf): self
    {
        $this->tlf = $tlf;

        return $this;
    }

    public function getGosexpView(): ?int
    {
        return $this->gosexpView;
    }

    public function setGosexpView(?int $gosexpView): self
    {
        $this->gosexpView = $gosexpView;

        return $this;
    }

    public function getGosexpAdmin(): ?int
    {
        return $this->gosexpAdmin;
    }

    public function setGosexpAdmin(?int $gosexpAdmin): self
    {
        $this->gosexpAdmin = $gosexpAdmin;

        return $this;
    }

    public function getSysProjectsView(): ?int
    {
        return $this->sysProjectsView;
    }

    public function setSysProjectsView(?int $sysProjectsView): self
    {
        $this->sysProjectsView = $sysProjectsView;

        return $this;
    }

    public function getSysProjectsAdmin(): ?int
    {
        return $this->sysProjectsAdmin;
    }

    public function setSysProjectsAdmin(?int $sysProjectsAdmin): self
    {
        $this->sysProjectsAdmin = $sysProjectsAdmin;

        return $this;
    }

    public function getKs2CheckAdmin(): ?int
    {
        return $this->ks2CheckAdmin;
    }

    public function setKs2CheckAdmin(?int $ks2CheckAdmin): self
    {
        $this->ks2CheckAdmin = $ks2CheckAdmin;

        return $this;
    }

    public function getKs2CheckUser(): ?int
    {
        return $this->ks2CheckUser;
    }

    public function setKs2CheckUser(?int $ks2CheckUser): self
    {
        $this->ks2CheckUser = $ks2CheckUser;

        return $this;
    }

    public function getKs2CheckRead(): ?int
    {
        return $this->ks2CheckRead;
    }

    public function setKs2CheckRead(?int $ks2CheckRead): self
    {
        $this->ks2CheckRead = $ks2CheckRead;

        return $this;
    }

    public function getObjProblemEdit(): ?int
    {
        return $this->objProblemEdit;
    }

    public function setObjProblemEdit(?int $objProblemEdit): self
    {
        $this->objProblemEdit = $objProblemEdit;

        return $this;
    }

    public function getIdCrimea(): ?int
    {
        return $this->idCrimea;
    }

    public function setIdCrimea(?int $idCrimea): self
    {
        $this->idCrimea = $idCrimea;

        return $this;
    }

    public function getProjectType(): ?string
    {
        return $this->projectType;
    }

    public function setProjectType(string $projectType): self
    {
        $this->projectType = $projectType;

        return $this;
    }

    public function getDemontazhRights(): ?string
    {
        return $this->demontazhRights;
    }

    public function setDemontazhRights(?string $demontazhRights): self
    {
        $this->demontazhRights = $demontazhRights;

        return $this;
    }

    public function getFileManager(): ?string
    {
        return $this->fileManager;
    }

    public function setFileManager(string $fileManager): self
    {
        $this->fileManager = $fileManager;

        return $this;
    }

    public function getInheritRole(): ?string
    {
        return $this->inheritRole;
    }

    public function setInheritRole(string $inheritRole): self
    {
        $this->inheritRole = $inheritRole;

        return $this;
    }


}
