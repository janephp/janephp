<?php

namespace PicturePark\API\Model;

class CustomerInfo
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
     * The customer ID.
     *
     * @var string
     */
    protected $customerId;
    /**
     * The name of the customer instance.
     *
     * @var string
     */
    protected $name;
    /**
     * Alias of the customer instance.
     *
     * @var string
     */
    protected $customerAlias;
    /**
     * The base URL of identity server to authenticate the user using OpenID Connect.
     *
     * @var string
     */
    protected $identityServerUrl;
    /**
     * The base API URL.
     *
     * @var string
     */
    protected $apiUrl;
    /**
     * Information if the query details can be enabled when searching. For debug purposes only.
     *
     * @var bool
     */
    protected $enableQueryDetails;
    /**
     * Configured languages of customer instance (system, metadata, default).
     *
     * @var mixed
     */
    protected $languageConfiguration;
    /**
     * Languages including translations for the configured system and metadata languages.
     *
     * @var Language[]
     */
    protected $languages;
    /**
     * Configured rendering outputs including translations for the customer instance.
     *
     * @var OutputFormatInfo[]
     */
    protected $outputFormats;
    /**
     * Boost levels that can be applied to a metadata field to boost the the significance of the field in a search operation.
     *
     * @var float[]
     */
    protected $boostValues;
    /**
     * Apps registered for this customer
     *
     * @var CustomerApp[]|null
     */
    protected $apps;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $modificationDate;
    /**
     * Url to access Frontend service
     *
     * @var string
     */
    protected $baseUrl;
    /**
     * Base bath to access logos of customer (including trailing slash), available images: name, full, small, background
     *
     * @var string
     */
    protected $logosUrl;
    /**
     * The customer ID.
     *
     * @return string
     */
    public function getCustomerId() : string
    {
        return $this->customerId;
    }
    /**
     * The customer ID.
     *
     * @param string $customerId
     *
     * @return self
     */
    public function setCustomerId(string $customerId) : self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * The name of the customer instance.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the customer instance.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Alias of the customer instance.
     *
     * @return string
     */
    public function getCustomerAlias() : string
    {
        return $this->customerAlias;
    }
    /**
     * Alias of the customer instance.
     *
     * @param string $customerAlias
     *
     * @return self
     */
    public function setCustomerAlias(string $customerAlias) : self
    {
        $this->initialized['customerAlias'] = true;
        $this->customerAlias = $customerAlias;
        return $this;
    }
    /**
     * The base URL of identity server to authenticate the user using OpenID Connect.
     *
     * @return string
     */
    public function getIdentityServerUrl() : string
    {
        return $this->identityServerUrl;
    }
    /**
     * The base URL of identity server to authenticate the user using OpenID Connect.
     *
     * @param string $identityServerUrl
     *
     * @return self
     */
    public function setIdentityServerUrl(string $identityServerUrl) : self
    {
        $this->initialized['identityServerUrl'] = true;
        $this->identityServerUrl = $identityServerUrl;
        return $this;
    }
    /**
     * The base API URL.
     *
     * @return string
     */
    public function getApiUrl() : string
    {
        return $this->apiUrl;
    }
    /**
     * The base API URL.
     *
     * @param string $apiUrl
     *
     * @return self
     */
    public function setApiUrl(string $apiUrl) : self
    {
        $this->initialized['apiUrl'] = true;
        $this->apiUrl = $apiUrl;
        return $this;
    }
    /**
     * Information if the query details can be enabled when searching. For debug purposes only.
     *
     * @return bool
     */
    public function getEnableQueryDetails() : bool
    {
        return $this->enableQueryDetails;
    }
    /**
     * Information if the query details can be enabled when searching. For debug purposes only.
     *
     * @param bool $enableQueryDetails
     *
     * @return self
     */
    public function setEnableQueryDetails(bool $enableQueryDetails) : self
    {
        $this->initialized['enableQueryDetails'] = true;
        $this->enableQueryDetails = $enableQueryDetails;
        return $this;
    }
    /**
     * Configured languages of customer instance (system, metadata, default).
     *
     * @return mixed
     */
    public function getLanguageConfiguration()
    {
        return $this->languageConfiguration;
    }
    /**
     * Configured languages of customer instance (system, metadata, default).
     *
     * @param mixed $languageConfiguration
     *
     * @return self
     */
    public function setLanguageConfiguration($languageConfiguration) : self
    {
        $this->initialized['languageConfiguration'] = true;
        $this->languageConfiguration = $languageConfiguration;
        return $this;
    }
    /**
     * Languages including translations for the configured system and metadata languages.
     *
     * @return Language[]
     */
    public function getLanguages() : array
    {
        return $this->languages;
    }
    /**
     * Languages including translations for the configured system and metadata languages.
     *
     * @param Language[] $languages
     *
     * @return self
     */
    public function setLanguages(array $languages) : self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
    /**
     * Configured rendering outputs including translations for the customer instance.
     *
     * @return OutputFormatInfo[]
     */
    public function getOutputFormats() : array
    {
        return $this->outputFormats;
    }
    /**
     * Configured rendering outputs including translations for the customer instance.
     *
     * @param OutputFormatInfo[] $outputFormats
     *
     * @return self
     */
    public function setOutputFormats(array $outputFormats) : self
    {
        $this->initialized['outputFormats'] = true;
        $this->outputFormats = $outputFormats;
        return $this;
    }
    /**
     * Boost levels that can be applied to a metadata field to boost the the significance of the field in a search operation.
     *
     * @return float[]
     */
    public function getBoostValues() : array
    {
        return $this->boostValues;
    }
    /**
     * Boost levels that can be applied to a metadata field to boost the the significance of the field in a search operation.
     *
     * @param float[] $boostValues
     *
     * @return self
     */
    public function setBoostValues(array $boostValues) : self
    {
        $this->initialized['boostValues'] = true;
        $this->boostValues = $boostValues;
        return $this;
    }
    /**
     * Apps registered for this customer
     *
     * @return CustomerApp[]|null
     */
    public function getApps() : ?array
    {
        return $this->apps;
    }
    /**
     * Apps registered for this customer
     *
     * @param CustomerApp[]|null $apps
     *
     * @return self
     */
    public function setApps(?array $apps) : self
    {
        $this->initialized['apps'] = true;
        $this->apps = $apps;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getModificationDate() : \DateTime
    {
        return $this->modificationDate;
    }
    /**
     * 
     *
     * @param \DateTime $modificationDate
     *
     * @return self
     */
    public function setModificationDate(\DateTime $modificationDate) : self
    {
        $this->initialized['modificationDate'] = true;
        $this->modificationDate = $modificationDate;
        return $this;
    }
    /**
     * Url to access Frontend service
     *
     * @return string
     */
    public function getBaseUrl() : string
    {
        return $this->baseUrl;
    }
    /**
     * Url to access Frontend service
     *
     * @param string $baseUrl
     *
     * @return self
     */
    public function setBaseUrl(string $baseUrl) : self
    {
        $this->initialized['baseUrl'] = true;
        $this->baseUrl = $baseUrl;
        return $this;
    }
    /**
     * Base bath to access logos of customer (including trailing slash), available images: name, full, small, background
     *
     * @return string
     */
    public function getLogosUrl() : string
    {
        return $this->logosUrl;
    }
    /**
     * Base bath to access logos of customer (including trailing slash), available images: name, full, small, background
     *
     * @param string $logosUrl
     *
     * @return self
     */
    public function setLogosUrl(string $logosUrl) : self
    {
        $this->initialized['logosUrl'] = true;
        $this->logosUrl = $logosUrl;
        return $this;
    }
}