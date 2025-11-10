<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonQueryCriteriaOptions
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * include Not Available auth service option while returning result
     *
     * @var bool
     */
    protected $authIncludeNa;
    /**
     * include LocalDB auth service while returning result
     *
     * @var bool
     */
    protected $authIncludeLocalDb;
    /**
     * include Guest auth service while returning result
     *
     * @var bool
     */
    protected $authIncludeGuest;
    /**
     * If AD is in list, include only AD with Global Catalog configured
     *
     * @var bool
     */
    protected $authIncludeAdGlobal;
    /**
     * authentication service types to get, use comma to separate, Ex: RADIUS,AD
     *
     * @var string
     */
    protected $authType;
    /**
     * To get specific authentication service information for configuring realm based authentication profile
     *
     * @var string
     */
    protected $authRealmType;
    /**
     * accounting service types to get, use comma to separate, Ex: RADIUS,CGF
     *
     * @var string
     */
    protected $acctType;
    /**
     * only get testable service type
     *
     * @var bool
     */
    protected $authTestableOnly;
    /**
     * only get testable service type
     *
     * @var bool
     */
    protected $acctTestableOnly;
    /**
     * include Not Available acct service option while returning result
     *
     * @var bool
     */
    protected $acctIncludeNa;
    /**
     * forwarding service types to get, use comma to separate, Ex: L2oGRE,Bridge,Advanced
     *
     * @var string
     */
    protected $forwardingType;
    /**
     * Whether to include the resources of parent domain or not.
     *
     * @var bool
     */
    protected $includeSharedResources;
    /**
     * Whether to include RBAC metadata or not.
     *
     * @var bool
     */
    protected $iNCLUDERBACMETADATA;
    /**
     * Specify Tenant ID for query.
     *
     * @var string
     */
    protected $tENANTID;
    /**
     * Specify inMap status for query.
     *
     * @var bool
     */
    protected $inMap;
    /**
     * Specify GlobalFilter ID for query.
     *
     * @var string
     */
    protected $globalFilterId;
    /**
     * Indicate if Hosted AAA Support is enabled
     *
     * @var bool
     */
    protected $authHostedAaaSupportedEnabled;
    /**
     * Indicate if Configure PLMN identifier is enabled
     *
     * @var bool
     */
    protected $authPlmnIdentifierEnabled;
    /**
     * Should also retrieve users or not
     *
     * @var bool
     */
    protected $includeUsers;
    /**
     * Can be used when group tree rendering needs include user clicked node.
     *
     * @var bool
     */
    protected $includeUserClickNode;
    /**
     * Zone UUID for DP Group filter
     *
     * @var string
     */
    protected $dpGroupFilterId;
    /**
     * include Not Available auth service option while returning result
     *
     * @return bool
     */
    public function getAuthIncludeNa(): bool
    {
        return $this->authIncludeNa;
    }
    /**
     * include Not Available auth service option while returning result
     *
     * @param bool $authIncludeNa
     *
     * @return self
     */
    public function setAuthIncludeNa(bool $authIncludeNa): self
    {
        $this->initialized['authIncludeNa'] = true;
        $this->authIncludeNa = $authIncludeNa;
        return $this;
    }
    /**
     * include LocalDB auth service while returning result
     *
     * @return bool
     */
    public function getAuthIncludeLocalDb(): bool
    {
        return $this->authIncludeLocalDb;
    }
    /**
     * include LocalDB auth service while returning result
     *
     * @param bool $authIncludeLocalDb
     *
     * @return self
     */
    public function setAuthIncludeLocalDb(bool $authIncludeLocalDb): self
    {
        $this->initialized['authIncludeLocalDb'] = true;
        $this->authIncludeLocalDb = $authIncludeLocalDb;
        return $this;
    }
    /**
     * include Guest auth service while returning result
     *
     * @return bool
     */
    public function getAuthIncludeGuest(): bool
    {
        return $this->authIncludeGuest;
    }
    /**
     * include Guest auth service while returning result
     *
     * @param bool $authIncludeGuest
     *
     * @return self
     */
    public function setAuthIncludeGuest(bool $authIncludeGuest): self
    {
        $this->initialized['authIncludeGuest'] = true;
        $this->authIncludeGuest = $authIncludeGuest;
        return $this;
    }
    /**
     * If AD is in list, include only AD with Global Catalog configured
     *
     * @return bool
     */
    public function getAuthIncludeAdGlobal(): bool
    {
        return $this->authIncludeAdGlobal;
    }
    /**
     * If AD is in list, include only AD with Global Catalog configured
     *
     * @param bool $authIncludeAdGlobal
     *
     * @return self
     */
    public function setAuthIncludeAdGlobal(bool $authIncludeAdGlobal): self
    {
        $this->initialized['authIncludeAdGlobal'] = true;
        $this->authIncludeAdGlobal = $authIncludeAdGlobal;
        return $this;
    }
    /**
     * authentication service types to get, use comma to separate, Ex: RADIUS,AD
     *
     * @return string
     */
    public function getAuthType(): string
    {
        return $this->authType;
    }
    /**
     * authentication service types to get, use comma to separate, Ex: RADIUS,AD
     *
     * @param string $authType
     *
     * @return self
     */
    public function setAuthType(string $authType): self
    {
        $this->initialized['authType'] = true;
        $this->authType = $authType;
        return $this;
    }
    /**
     * To get specific authentication service information for configuring realm based authentication profile
     *
     * @return string
     */
    public function getAuthRealmType(): string
    {
        return $this->authRealmType;
    }
    /**
     * To get specific authentication service information for configuring realm based authentication profile
     *
     * @param string $authRealmType
     *
     * @return self
     */
    public function setAuthRealmType(string $authRealmType): self
    {
        $this->initialized['authRealmType'] = true;
        $this->authRealmType = $authRealmType;
        return $this;
    }
    /**
     * accounting service types to get, use comma to separate, Ex: RADIUS,CGF
     *
     * @return string
     */
    public function getAcctType(): string
    {
        return $this->acctType;
    }
    /**
     * accounting service types to get, use comma to separate, Ex: RADIUS,CGF
     *
     * @param string $acctType
     *
     * @return self
     */
    public function setAcctType(string $acctType): self
    {
        $this->initialized['acctType'] = true;
        $this->acctType = $acctType;
        return $this;
    }
    /**
     * only get testable service type
     *
     * @return bool
     */
    public function getAuthTestableOnly(): bool
    {
        return $this->authTestableOnly;
    }
    /**
     * only get testable service type
     *
     * @param bool $authTestableOnly
     *
     * @return self
     */
    public function setAuthTestableOnly(bool $authTestableOnly): self
    {
        $this->initialized['authTestableOnly'] = true;
        $this->authTestableOnly = $authTestableOnly;
        return $this;
    }
    /**
     * only get testable service type
     *
     * @return bool
     */
    public function getAcctTestableOnly(): bool
    {
        return $this->acctTestableOnly;
    }
    /**
     * only get testable service type
     *
     * @param bool $acctTestableOnly
     *
     * @return self
     */
    public function setAcctTestableOnly(bool $acctTestableOnly): self
    {
        $this->initialized['acctTestableOnly'] = true;
        $this->acctTestableOnly = $acctTestableOnly;
        return $this;
    }
    /**
     * include Not Available acct service option while returning result
     *
     * @return bool
     */
    public function getAcctIncludeNa(): bool
    {
        return $this->acctIncludeNa;
    }
    /**
     * include Not Available acct service option while returning result
     *
     * @param bool $acctIncludeNa
     *
     * @return self
     */
    public function setAcctIncludeNa(bool $acctIncludeNa): self
    {
        $this->initialized['acctIncludeNa'] = true;
        $this->acctIncludeNa = $acctIncludeNa;
        return $this;
    }
    /**
     * forwarding service types to get, use comma to separate, Ex: L2oGRE,Bridge,Advanced
     *
     * @return string
     */
    public function getForwardingType(): string
    {
        return $this->forwardingType;
    }
    /**
     * forwarding service types to get, use comma to separate, Ex: L2oGRE,Bridge,Advanced
     *
     * @param string $forwardingType
     *
     * @return self
     */
    public function setForwardingType(string $forwardingType): self
    {
        $this->initialized['forwardingType'] = true;
        $this->forwardingType = $forwardingType;
        return $this;
    }
    /**
     * Whether to include the resources of parent domain or not.
     *
     * @return bool
     */
    public function getIncludeSharedResources(): bool
    {
        return $this->includeSharedResources;
    }
    /**
     * Whether to include the resources of parent domain or not.
     *
     * @param bool $includeSharedResources
     *
     * @return self
     */
    public function setIncludeSharedResources(bool $includeSharedResources): self
    {
        $this->initialized['includeSharedResources'] = true;
        $this->includeSharedResources = $includeSharedResources;
        return $this;
    }
    /**
     * Whether to include RBAC metadata or not.
     *
     * @return bool
     */
    public function getINCLUDERBACMETADATA(): bool
    {
        return $this->iNCLUDERBACMETADATA;
    }
    /**
     * Whether to include RBAC metadata or not.
     *
     * @param bool $iNCLUDERBACMETADATA
     *
     * @return self
     */
    public function setINCLUDERBACMETADATA(bool $iNCLUDERBACMETADATA): self
    {
        $this->initialized['iNCLUDERBACMETADATA'] = true;
        $this->iNCLUDERBACMETADATA = $iNCLUDERBACMETADATA;
        return $this;
    }
    /**
     * Specify Tenant ID for query.
     *
     * @return string
     */
    public function getTENANTID(): string
    {
        return $this->tENANTID;
    }
    /**
     * Specify Tenant ID for query.
     *
     * @param string $tENANTID
     *
     * @return self
     */
    public function setTENANTID(string $tENANTID): self
    {
        $this->initialized['tENANTID'] = true;
        $this->tENANTID = $tENANTID;
        return $this;
    }
    /**
     * Specify inMap status for query.
     *
     * @return bool
     */
    public function getInMap(): bool
    {
        return $this->inMap;
    }
    /**
     * Specify inMap status for query.
     *
     * @param bool $inMap
     *
     * @return self
     */
    public function setInMap(bool $inMap): self
    {
        $this->initialized['inMap'] = true;
        $this->inMap = $inMap;
        return $this;
    }
    /**
     * Specify GlobalFilter ID for query.
     *
     * @return string
     */
    public function getGlobalFilterId(): string
    {
        return $this->globalFilterId;
    }
    /**
     * Specify GlobalFilter ID for query.
     *
     * @param string $globalFilterId
     *
     * @return self
     */
    public function setGlobalFilterId(string $globalFilterId): self
    {
        $this->initialized['globalFilterId'] = true;
        $this->globalFilterId = $globalFilterId;
        return $this;
    }
    /**
     * Indicate if Hosted AAA Support is enabled
     *
     * @return bool
     */
    public function getAuthHostedAaaSupportedEnabled(): bool
    {
        return $this->authHostedAaaSupportedEnabled;
    }
    /**
     * Indicate if Hosted AAA Support is enabled
     *
     * @param bool $authHostedAaaSupportedEnabled
     *
     * @return self
     */
    public function setAuthHostedAaaSupportedEnabled(bool $authHostedAaaSupportedEnabled): self
    {
        $this->initialized['authHostedAaaSupportedEnabled'] = true;
        $this->authHostedAaaSupportedEnabled = $authHostedAaaSupportedEnabled;
        return $this;
    }
    /**
     * Indicate if Configure PLMN identifier is enabled
     *
     * @return bool
     */
    public function getAuthPlmnIdentifierEnabled(): bool
    {
        return $this->authPlmnIdentifierEnabled;
    }
    /**
     * Indicate if Configure PLMN identifier is enabled
     *
     * @param bool $authPlmnIdentifierEnabled
     *
     * @return self
     */
    public function setAuthPlmnIdentifierEnabled(bool $authPlmnIdentifierEnabled): self
    {
        $this->initialized['authPlmnIdentifierEnabled'] = true;
        $this->authPlmnIdentifierEnabled = $authPlmnIdentifierEnabled;
        return $this;
    }
    /**
     * Should also retrieve users or not
     *
     * @return bool
     */
    public function getIncludeUsers(): bool
    {
        return $this->includeUsers;
    }
    /**
     * Should also retrieve users or not
     *
     * @param bool $includeUsers
     *
     * @return self
     */
    public function setIncludeUsers(bool $includeUsers): self
    {
        $this->initialized['includeUsers'] = true;
        $this->includeUsers = $includeUsers;
        return $this;
    }
    /**
     * Can be used when group tree rendering needs include user clicked node.
     *
     * @return bool
     */
    public function getIncludeUserClickNode(): bool
    {
        return $this->includeUserClickNode;
    }
    /**
     * Can be used when group tree rendering needs include user clicked node.
     *
     * @param bool $includeUserClickNode
     *
     * @return self
     */
    public function setIncludeUserClickNode(bool $includeUserClickNode): self
    {
        $this->initialized['includeUserClickNode'] = true;
        $this->includeUserClickNode = $includeUserClickNode;
        return $this;
    }
    /**
     * Zone UUID for DP Group filter
     *
     * @return string
     */
    public function getDpGroupFilterId(): string
    {
        return $this->dpGroupFilterId;
    }
    /**
     * Zone UUID for DP Group filter
     *
     * @param string $dpGroupFilterId
     *
     * @return self
     */
    public function setDpGroupFilterId(string $dpGroupFilterId): self
    {
        $this->initialized['dpGroupFilterId'] = true;
        $this->dpGroupFilterId = $dpGroupFilterId;
        return $this;
    }
}