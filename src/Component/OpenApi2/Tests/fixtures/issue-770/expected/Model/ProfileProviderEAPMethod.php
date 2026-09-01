<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderEAPMethod
{
    /**
     * EAP method type
     *
     * @var string
     */
    public string $type;
    /**
     * EAP method auth settings
     *
     * @var list<ProfileProviderEAPAuthSetting>
     */
    public array $authSettings;
}