<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateAccountingProfile
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
     * Domain UUID
     *
     * @var string
     */
    public string $domainId;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
}