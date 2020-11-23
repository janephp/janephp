<?php

namespace PicturePark\API\Model;

class IdentityProviderBasicInfo
{
    /**
     * Identity provider ID (has to match an existing IdP defined in IdentityServer)
     *
     * @var string|null
     */
    protected $id;
    /**
     * Name of the identity provider as defined in IdentityServer
     *
     * @var string|null
     */
    protected $name;
    /**
     * Display name of the identity provider as defined in IdentityServer
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * Identity provider ID (has to match an existing IdP defined in IdentityServer)
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Identity provider ID (has to match an existing IdP defined in IdentityServer)
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the identity provider as defined in IdentityServer
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of the identity provider as defined in IdentityServer
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Display name of the identity provider as defined in IdentityServer
     *
     * @return string|null
     */
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * Display name of the identity provider as defined in IdentityServer
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
}