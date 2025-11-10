<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonWebAuthenticationPortalCustomization
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
     * Title of the custom portal
     *
     * @var string
     */
    protected $title;
    /**
     * Logo encoded with base64, format is "data:image/png;base64,the base64 encoded logo"
     *
     * @var string
     */
    protected $logo;
    /**
     * Title of the custom portal
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Title of the custom portal
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Logo encoded with base64, format is "data:image/png;base64,the base64 encoded logo"
     *
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }
    /**
     * Logo encoded with base64, format is "data:image/png;base64,the base64 encoded logo"
     *
     * @param string $logo
     *
     * @return self
     */
    public function setLogo(string $logo): self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;
        return $this;
    }
}