<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UserSettingsOpensearchAclItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A regex for matching the indexes that this ACL should apply to.
     *
     * @var string
     */
    public string $index;
    /**
     * Permission set applied to the ACL. 'read' allows user to read from the index. 'write' allows for user to write to the index. 'readwrite' allows for both 'read' and 'write' permission. 'deny'(default) restricts user from performing any operation over an index. 'admin' allows for 'readwrite' as well as any operations to administer the index.
     *
     * @var string
     */
    public string $permission;
    public function definedProperties(): array
    {
        return ['index' => 'index', 'permission' => 'permission'];
    }
}