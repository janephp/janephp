<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonPortalCustomization
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
     * Language
     *
     * @var string
     */
    protected $language = 'en_US';
    /**
     * Title
     *
     * @var string
     */
    protected $title;
    /**
     * logo
     *
     * @var string
     */
    protected $logo;
    /**
     * Terms and conditions is required or not
     *
     * @var bool
     */
    protected $termsAndConditionsRequired = 'false';
    /**
     * Terms and conditions text
     *
     * @var string
     */
    protected $termsAndConditionsText = 'Terms of Use

By accepting this agreement and accessing the wireless network, you acknowledge that you are of legal age, you have read and understood, and agree to be bound by this agreement.
(*) The wireless network service is provided by the property owners and is completely at their discretion. Your access to the network may be blocked, suspended, or terminated at any time for any reason.
(*) You agree not to use the wireless network for any purpose that is unlawful or otherwise prohibited and you are fully responsible for your use.
(*) The wireless network is provided "as is" without warranties of any kind, either expressed or implied.

This wireless network is powered by Ruckus Wireless.';
    /**
     * Language
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * Language
     *
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
     * Title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Title
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
     * logo
     *
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }
    /**
     * logo
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
    /**
     * Terms and conditions is required or not
     *
     * @return bool
     */
    public function getTermsAndConditionsRequired(): bool
    {
        return $this->termsAndConditionsRequired;
    }
    /**
     * Terms and conditions is required or not
     *
     * @param bool $termsAndConditionsRequired
     *
     * @return self
     */
    public function setTermsAndConditionsRequired(bool $termsAndConditionsRequired): self
    {
        $this->initialized['termsAndConditionsRequired'] = true;
        $this->termsAndConditionsRequired = $termsAndConditionsRequired;
        return $this;
    }
    /**
     * Terms and conditions text
     *
     * @return string
     */
    public function getTermsAndConditionsText(): string
    {
        return $this->termsAndConditionsText;
    }
    /**
     * Terms and conditions text
     *
     * @param string $termsAndConditionsText
     *
     * @return self
     */
    public function setTermsAndConditionsText(string $termsAndConditionsText): self
    {
        $this->initialized['termsAndConditionsText'] = true;
        $this->termsAndConditionsText = $termsAndConditionsText;
        return $this;
    }
}