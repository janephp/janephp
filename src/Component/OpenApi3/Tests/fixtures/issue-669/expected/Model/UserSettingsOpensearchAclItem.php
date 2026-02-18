<?php

namespace Jane\Generated\DigitalOcean\Model;

class UserSettingsOpensearchAclItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A regex for matching the indexes that this ACL should apply to.
     *
     * @var string
     */
    protected $index;
    /**
     * Permission set applied to the ACL. 'read' allows user to read from the index. 'write' allows for user to write to the index. 'readwrite' allows for both 'read' and 'write' permission. 'deny'(default) restricts user from performing any operation over an index. 'admin' allows for 'readwrite' as well as any operations to administer the index.
     *
     * @var string
     */
    protected $permission;
    /**
     * A regex for matching the indexes that this ACL should apply to.
     *
     * @return string
     */
    public function getIndex(): string
    {
        return $this->index;
    }
    /**
     * A regex for matching the indexes that this ACL should apply to.
     *
     * @param string $index
     *
     * @return self
     */
    public function setIndex(string $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    /**
     * Permission set applied to the ACL. 'read' allows user to read from the index. 'write' allows for user to write to the index. 'readwrite' allows for both 'read' and 'write' permission. 'deny'(default) restricts user from performing any operation over an index. 'admin' allows for 'readwrite' as well as any operations to administer the index.
     *
     * @return string
     */
    public function getPermission(): string
    {
        return $this->permission;
    }
    /**
     * Permission set applied to the ACL. 'read' allows user to read from the index. 'write' allows for user to write to the index. 'readwrite' allows for both 'read' and 'write' permission. 'deny'(default) restricts user from performing any operation over an index. 'admin' allows for 'readwrite' as well as any operations to administer the index.
     *
     * @param string $permission
     *
     * @return self
     */
    public function setPermission(string $permission): self
    {
        $this->initialized['permission'] = true;
        $this->permission = $permission;
        return $this;
    }
}