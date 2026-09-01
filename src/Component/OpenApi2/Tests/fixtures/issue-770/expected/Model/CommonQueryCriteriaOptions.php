<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CommonQueryCriteriaOptions
{
    /**
     * include Not Available auth service option while returning result
     *
     * @var bool
     */
    public bool $authIncludeNa;
    /**
     * include LocalDB auth service while returning result
     *
     * @var bool
     */
    public bool $authIncludeLocalDb;
    /**
     * include Guest auth service while returning result
     *
     * @var bool
     */
    public bool $authIncludeGuest;
    /**
     * If AD is in list, include only AD with Global Catalog configured
     *
     * @var bool
     */
    public bool $authIncludeAdGlobal;
    /**
     * authentication service types to get, use comma to separate, Ex: RADIUS,AD
     *
     * @var string
     */
    public string $authType;
    /**
     * To get specific authentication service information for configuring realm based authentication profile
     *
     * @var string
     */
    public string $authRealmType;
    /**
     * accounting service types to get, use comma to separate, Ex: RADIUS,CGF
     *
     * @var string
     */
    public string $acctType;
    /**
     * only get testable service type
     *
     * @var bool
     */
    public bool $authTestableOnly;
    /**
     * only get testable service type
     *
     * @var bool
     */
    public bool $acctTestableOnly;
    /**
     * include Not Available acct service option while returning result
     *
     * @var bool
     */
    public bool $acctIncludeNa;
    /**
     * forwarding service types to get, use comma to separate, Ex: L2oGRE,Bridge,Advanced
     *
     * @var string
     */
    public string $forwardingType;
    /**
     * Whether to include the resources of parent domain or not.
     *
     * @var bool
     */
    public bool $includeSharedResources;
    /**
     * Whether to include RBAC metadata or not.
     *
     * @var bool
     */
    public bool $iNCLUDERBACMETADATA;
    /**
     * Specify Tenant ID for query.
     *
     * @var string
     */
    public string $tENANTID;
    /**
     * Specify inMap status for query.
     *
     * @var bool
     */
    public bool $inMap;
    /**
     * Specify GlobalFilter ID for query.
     *
     * @var string
     */
    public string $globalFilterId;
    /**
     * Indicate if Hosted AAA Support is enabled
     *
     * @var bool
     */
    public bool $authHostedAaaSupportedEnabled;
    /**
     * Indicate if Configure PLMN identifier is enabled
     *
     * @var bool
     */
    public bool $authPlmnIdentifierEnabled;
    /**
     * Should also retrieve users or not
     *
     * @var bool
     */
    public bool $includeUsers;
    /**
     * Can be used when group tree rendering needs include user clicked node.
     *
     * @var bool
     */
    public bool $includeUserClickNode;
    /**
     * Zone UUID for DP Group filter
     *
     * @var string
     */
    public string $dpGroupFilterId;
}