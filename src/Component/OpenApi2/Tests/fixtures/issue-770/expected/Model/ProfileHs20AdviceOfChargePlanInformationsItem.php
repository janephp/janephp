<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileHs20AdviceOfChargePlanInformationsItem
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
    protected $language;
    /**
     * @var string
     */
    protected $currency;
    /**
     * the cotent carries an XML description
     *
     * @var string
     */
    protected $content;
    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * the cotent carries an XML description
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * the cotent carries an XML description
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}