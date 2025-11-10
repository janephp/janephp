<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WhiteLabelCustomizationUpdateWhiteLabelCustomization
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
     * @var string
     */
    protected $companyName;
    /**
     * @var string
     */
    protected $favIconImage;
    /**
     * @var string
     */
    protected $homeLogoImage;
    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * @return string
     */
    public function getFavIconImage(): string
    {
        return $this->favIconImage;
    }
    /**
     * @param string $favIconImage
     *
     * @return self
     */
    public function setFavIconImage(string $favIconImage): self
    {
        $this->initialized['favIconImage'] = true;
        $this->favIconImage = $favIconImage;
        return $this;
    }
    /**
     * @return string
     */
    public function getHomeLogoImage(): string
    {
        return $this->homeLogoImage;
    }
    /**
     * @param string $homeLogoImage
     *
     * @return self
     */
    public function setHomeLogoImage(string $homeLogoImage): self
    {
        $this->initialized['homeLogoImage'] = true;
        $this->homeLogoImage = $homeLogoImage;
        return $this;
    }
}