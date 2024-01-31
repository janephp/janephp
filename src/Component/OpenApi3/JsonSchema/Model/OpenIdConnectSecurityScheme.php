<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class OpenIdConnectSecurityScheme extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $openIdConnectUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpenIdConnectUrl() : ?string
    {
        return $this->openIdConnectUrl;
    }
    /**
     * 
     *
     * @param string|null $openIdConnectUrl
     *
     * @return self
     */
    public function setOpenIdConnectUrl(?string $openIdConnectUrl) : self
    {
        $this->initialized['openIdConnectUrl'] = true;
        $this->openIdConnectUrl = $openIdConnectUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}