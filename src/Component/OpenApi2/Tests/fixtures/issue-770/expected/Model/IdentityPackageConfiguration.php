<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityPackageConfiguration
{
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $subscriberPackage;
    /**
     * Package expiration interval and value
     *
     * @var string
     */
    public string $packageExpiration;
}