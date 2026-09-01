<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileModifyDnsServerProfile
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
     * Primary ip of DNS server service
     *
     * @var string
     */
    public string $primaryIp;
    /**
     * Secondary ip of DNS server service
     *
     * @var string
     */
    public string $secondaryIp;
    /**
     * Tertiary ip of DNS server service
     *
     * @var string
     */
    public string $tertiaryIp;
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
     * Profile Id
     *
     * @var string
     */
    public string $id;
}