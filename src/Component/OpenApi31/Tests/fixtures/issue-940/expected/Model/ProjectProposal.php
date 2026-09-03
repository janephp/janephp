<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue940\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue940\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue940\Runtime\AdditionalPropertiesInterface;
class ProjectProposal implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var User|null
     */
    public ?User $users;
    public function definedProperties(): array
    {
        return ['users' => 'users'];
    }
}