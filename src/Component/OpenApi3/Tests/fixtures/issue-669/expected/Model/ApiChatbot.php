<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiChatbot extends \ArrayObject
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
     * @var list<string>
     */
    protected $allowedDomains;
    /**
     * @var string
     */
    protected $buttonBackgroundColor;
    /**
     * @var string
     */
    protected $logo;
    /**
     * Name of chatbot
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $primaryColor;
    /**
     * @var string
     */
    protected $secondaryColor;
    /**
     * @var string
     */
    protected $startingMessage;
    /**
     * @return list<string>
     */
    public function getAllowedDomains(): array
    {
        return $this->allowedDomains;
    }
    /**
     * @param list<string> $allowedDomains
     *
     * @return self
     */
    public function setAllowedDomains(array $allowedDomains): self
    {
        $this->initialized['allowedDomains'] = true;
        $this->allowedDomains = $allowedDomains;
        return $this;
    }
    /**
     * @return string
     */
    public function getButtonBackgroundColor(): string
    {
        return $this->buttonBackgroundColor;
    }
    /**
     * @param string $buttonBackgroundColor
     *
     * @return self
     */
    public function setButtonBackgroundColor(string $buttonBackgroundColor): self
    {
        $this->initialized['buttonBackgroundColor'] = true;
        $this->buttonBackgroundColor = $buttonBackgroundColor;
        return $this;
    }
    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }
    /**
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
    /**
     * Name of chatbot
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of chatbot
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getPrimaryColor(): string
    {
        return $this->primaryColor;
    }
    /**
     * @param string $primaryColor
     *
     * @return self
     */
    public function setPrimaryColor(string $primaryColor): self
    {
        $this->initialized['primaryColor'] = true;
        $this->primaryColor = $primaryColor;
        return $this;
    }
    /**
     * @return string
     */
    public function getSecondaryColor(): string
    {
        return $this->secondaryColor;
    }
    /**
     * @param string $secondaryColor
     *
     * @return self
     */
    public function setSecondaryColor(string $secondaryColor): self
    {
        $this->initialized['secondaryColor'] = true;
        $this->secondaryColor = $secondaryColor;
        return $this;
    }
    /**
     * @return string
     */
    public function getStartingMessage(): string
    {
        return $this->startingMessage;
    }
    /**
     * @param string $startingMessage
     *
     * @return self
     */
    public function setStartingMessage(string $startingMessage): self
    {
        $this->initialized['startingMessage'] = true;
        $this->startingMessage = $startingMessage;
        return $this;
    }
}