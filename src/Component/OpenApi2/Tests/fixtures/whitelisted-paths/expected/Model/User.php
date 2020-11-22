<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class User
{
    /**
     * Unique ID for the user.
     *
     * @var int
     */
    protected $id;
    /**
     * The first name of the user.
     *
     * @var string
     */
    protected $firstName;
    /**
     * The last name of the user.
     *
     * @var string
     */
    protected $lastName;
    /**
     * The email address of the user.
     *
     * @var string
     */
    protected $email;
    /**
     * The user’s timezone.
     *
     * @var string
     */
    protected $timezone;
    /**
     * Whether the user should be automatically added to future projects.
     *
     * @var bool
     */
    protected $hasAccessToAllFutureProjects;
    /**
     * Whether the user is a contractor or an employee.
     *
     * @var bool
     */
    protected $isContractor;
    /**
     * Whether the user has Admin permissions.
     *
     * @var bool
     */
    protected $isAdmin;
    /**
     * Whether the user has Project Manager permissions.
     *
     * @var bool
     */
    protected $isProjectManager;
    /**
     * Whether the user can see billable rates on projects. Only applicable to Project Managers.
     *
     * @var bool
     */
    protected $canSeeRates;
    /**
     * Whether the user can create projects. Only applicable to Project Managers.
     *
     * @var bool
     */
    protected $canCreateProjects;
    /**
     * Whether the user can create invoices. Only applicable to Project Managers.
     *
     * @var bool
     */
    protected $canCreateInvoices;
    /**
     * Whether the user is active or archived.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * The number of hours per week this person is available to work in seconds, in half hour increments. For example, if a person’s capacity is 35 hours, the API will return 126000 seconds.
     *
     * @var int
     */
    protected $weeklyCapacity;
    /**
     * The billable rate to use for this user when they are added to a project.
     *
     * @var float
     */
    protected $defaultHourlyRate;
    /**
     * The cost rate to use for this user when calculating a project’s costs vs billable amount.
     *
     * @var float
     */
    protected $costRate;
    /**
     * The role names assigned to this person.
     *
     * @var string[]
     */
    protected $roles;
    /**
     * The URL to the user’s avatar image.
     *
     * @var string
     */
    protected $avatarUrl;
    /**
     * Date and time the user was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the user was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the user.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the user.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The first name of the user.
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * The first name of the user.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * The last name of the user.
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * The last name of the user.
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * The email address of the user.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email address of the user.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The user’s timezone.
     *
     * @return string
     */
    public function getTimezone() : string
    {
        return $this->timezone;
    }
    /**
     * The user’s timezone.
     *
     * @param string $timezone
     *
     * @return self
     */
    public function setTimezone(string $timezone) : self
    {
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Whether the user should be automatically added to future projects.
     *
     * @return bool
     */
    public function getHasAccessToAllFutureProjects() : bool
    {
        return $this->hasAccessToAllFutureProjects;
    }
    /**
     * Whether the user should be automatically added to future projects.
     *
     * @param bool $hasAccessToAllFutureProjects
     *
     * @return self
     */
    public function setHasAccessToAllFutureProjects(bool $hasAccessToAllFutureProjects) : self
    {
        $this->hasAccessToAllFutureProjects = $hasAccessToAllFutureProjects;
        return $this;
    }
    /**
     * Whether the user is a contractor or an employee.
     *
     * @return bool
     */
    public function getIsContractor() : bool
    {
        return $this->isContractor;
    }
    /**
     * Whether the user is a contractor or an employee.
     *
     * @param bool $isContractor
     *
     * @return self
     */
    public function setIsContractor(bool $isContractor) : self
    {
        $this->isContractor = $isContractor;
        return $this;
    }
    /**
     * Whether the user has Admin permissions.
     *
     * @return bool
     */
    public function getIsAdmin() : bool
    {
        return $this->isAdmin;
    }
    /**
     * Whether the user has Admin permissions.
     *
     * @param bool $isAdmin
     *
     * @return self
     */
    public function setIsAdmin(bool $isAdmin) : self
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }
    /**
     * Whether the user has Project Manager permissions.
     *
     * @return bool
     */
    public function getIsProjectManager() : bool
    {
        return $this->isProjectManager;
    }
    /**
     * Whether the user has Project Manager permissions.
     *
     * @param bool $isProjectManager
     *
     * @return self
     */
    public function setIsProjectManager(bool $isProjectManager) : self
    {
        $this->isProjectManager = $isProjectManager;
        return $this;
    }
    /**
     * Whether the user can see billable rates on projects. Only applicable to Project Managers.
     *
     * @return bool
     */
    public function getCanSeeRates() : bool
    {
        return $this->canSeeRates;
    }
    /**
     * Whether the user can see billable rates on projects. Only applicable to Project Managers.
     *
     * @param bool $canSeeRates
     *
     * @return self
     */
    public function setCanSeeRates(bool $canSeeRates) : self
    {
        $this->canSeeRates = $canSeeRates;
        return $this;
    }
    /**
     * Whether the user can create projects. Only applicable to Project Managers.
     *
     * @return bool
     */
    public function getCanCreateProjects() : bool
    {
        return $this->canCreateProjects;
    }
    /**
     * Whether the user can create projects. Only applicable to Project Managers.
     *
     * @param bool $canCreateProjects
     *
     * @return self
     */
    public function setCanCreateProjects(bool $canCreateProjects) : self
    {
        $this->canCreateProjects = $canCreateProjects;
        return $this;
    }
    /**
     * Whether the user can create invoices. Only applicable to Project Managers.
     *
     * @return bool
     */
    public function getCanCreateInvoices() : bool
    {
        return $this->canCreateInvoices;
    }
    /**
     * Whether the user can create invoices. Only applicable to Project Managers.
     *
     * @param bool $canCreateInvoices
     *
     * @return self
     */
    public function setCanCreateInvoices(bool $canCreateInvoices) : self
    {
        $this->canCreateInvoices = $canCreateInvoices;
        return $this;
    }
    /**
     * Whether the user is active or archived.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Whether the user is active or archived.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * The number of hours per week this person is available to work in seconds, in half hour increments. For example, if a person’s capacity is 35 hours, the API will return 126000 seconds.
     *
     * @return int
     */
    public function getWeeklyCapacity() : int
    {
        return $this->weeklyCapacity;
    }
    /**
     * The number of hours per week this person is available to work in seconds, in half hour increments. For example, if a person’s capacity is 35 hours, the API will return 126000 seconds.
     *
     * @param int $weeklyCapacity
     *
     * @return self
     */
    public function setWeeklyCapacity(int $weeklyCapacity) : self
    {
        $this->weeklyCapacity = $weeklyCapacity;
        return $this;
    }
    /**
     * The billable rate to use for this user when they are added to a project.
     *
     * @return float
     */
    public function getDefaultHourlyRate() : float
    {
        return $this->defaultHourlyRate;
    }
    /**
     * The billable rate to use for this user when they are added to a project.
     *
     * @param float $defaultHourlyRate
     *
     * @return self
     */
    public function setDefaultHourlyRate(float $defaultHourlyRate) : self
    {
        $this->defaultHourlyRate = $defaultHourlyRate;
        return $this;
    }
    /**
     * The cost rate to use for this user when calculating a project’s costs vs billable amount.
     *
     * @return float
     */
    public function getCostRate() : float
    {
        return $this->costRate;
    }
    /**
     * The cost rate to use for this user when calculating a project’s costs vs billable amount.
     *
     * @param float $costRate
     *
     * @return self
     */
    public function setCostRate(float $costRate) : self
    {
        $this->costRate = $costRate;
        return $this;
    }
    /**
     * The role names assigned to this person.
     *
     * @return string[]
     */
    public function getRoles() : array
    {
        return $this->roles;
    }
    /**
     * The role names assigned to this person.
     *
     * @param string[] $roles
     *
     * @return self
     */
    public function setRoles(array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * The URL to the user’s avatar image.
     *
     * @return string
     */
    public function getAvatarUrl() : string
    {
        return $this->avatarUrl;
    }
    /**
     * The URL to the user’s avatar image.
     *
     * @param string $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(string $avatarUrl) : self
    {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }
    /**
     * Date and time the user was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the user was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the user was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the user was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}