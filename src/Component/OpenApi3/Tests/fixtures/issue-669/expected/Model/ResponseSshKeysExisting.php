<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseSshKeysExisting implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var SshKeys
     */
    public SshKeys $sshKey;
    public function definedProperties(): array
    {
        return ['sshKey' => 'ssh_key'];
    }
}