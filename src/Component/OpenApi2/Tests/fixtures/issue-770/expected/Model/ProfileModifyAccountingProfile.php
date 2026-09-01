<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileModifyAccountingProfile
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Accounting service per realm
     *
     * @var list<ProfileAcctServiceRealmMapping>
     */
    public array $realmMappings;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
    /**
     * Domain UUID
     *
     * @var string
     */
    public string $domainId;
    /**
     * ID of Accounting Profile
     *
     * @var string
     */
    public string $id;
}