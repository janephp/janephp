<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileProviderRealm
{
    /**
     * Name of realm
     *
     * @var string
     */
    public string $name;
    /**
     * Encoding
     *
     * @var string
     */
    public string $encoding;
    /**
     * EAP methods
     *
     * @var list<ProfileProviderEAPMethod>
     */
    public array $eapMethods;
}