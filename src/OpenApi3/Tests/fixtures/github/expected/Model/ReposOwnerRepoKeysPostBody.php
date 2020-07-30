<?php

namespace Github\Model;

class ReposOwnerRepoKeysPostBody
{
    /**
     * A name for the key.
     *
     * @var string
     */
    protected $title;
    /**
     * The contents of the key.
     *
     * @var string
     */
    protected $key;
    /**
    * If `true`, the key will only be able to read repository contents. Otherwise, the key will be able to read and write.  
     
    Deploy keys with write access can perform the same actions as an organization member with admin access, or a collaborator on a personal repository. For more information, see "[Repository permission levels for an organization](https://help.github.com/articles/repository-permission-levels-for-an-organization/)" and "[Permission levels for a user account repository](https://help.github.com/articles/permission-levels-for-a-user-account-repository/)."
    *
    * @var bool
    */
    protected $readOnly;
    /**
     * A name for the key.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * A name for the key.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * The contents of the key.
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * The contents of the key.
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
    * If `true`, the key will only be able to read repository contents. Otherwise, the key will be able to read and write.  
     
    Deploy keys with write access can perform the same actions as an organization member with admin access, or a collaborator on a personal repository. For more information, see "[Repository permission levels for an organization](https://help.github.com/articles/repository-permission-levels-for-an-organization/)" and "[Permission levels for a user account repository](https://help.github.com/articles/permission-levels-for-a-user-account-repository/)."
    *
    * @return bool
    */
    public function getReadOnly() : bool
    {
        return $this->readOnly;
    }
    /**
    * If `true`, the key will only be able to read repository contents. Otherwise, the key will be able to read and write.  
     
    Deploy keys with write access can perform the same actions as an organization member with admin access, or a collaborator on a personal repository. For more information, see "[Repository permission levels for an organization](https://help.github.com/articles/repository-permission-levels-for-an-organization/)" and "[Permission levels for a user account repository](https://help.github.com/articles/permission-levels-for-a-user-account-repository/)."
    *
    * @param bool $readOnly
    *
    * @return self
    */
    public function setReadOnly(bool $readOnly) : self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
}