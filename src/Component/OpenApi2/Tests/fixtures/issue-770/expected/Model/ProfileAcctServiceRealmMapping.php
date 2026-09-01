<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileAcctServiceRealmMapping
{
    /**
     * @var string
     */
    public string $realm;
    /**
     * Accounting service type, NA is NA-Request Rejected
     *
     * @var string
     */
    public string $serviceType;
    /**
     * Accounting service UUID
     *
     * @var string
     */
    public string $id;
    /**
     * Accounting service name
     *
     * @var string
     */
    public string $name;
}