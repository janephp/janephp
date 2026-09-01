<?php

namespace PicturePark\API\Model;

class CustomerInfo
{
    /**
     * The customer ID.
     *
     * @var string
     */
    public string $customerId;
    /**
     * The name of the customer instance.
     *
     * @var string
     */
    public string $name;
    /**
     * Alias of the customer instance.
     *
     * @var string
     */
    public string $customerAlias;
    /**
     * The base URL of identity server to authenticate the user using OpenID Connect.
     *
     * @var string
     */
    public string $identityServerUrl;
    /**
     * The base API URL.
     *
     * @var string
     */
    public string $apiUrl;
    /**
     * Information if the query details can be enabled when searching. For debug purposes only.
     *
     * @var bool
     */
    public bool $enableQueryDetails;
    /**
     * Configured languages of customer instance (system, metadata, default).
     *
     * @var LanguageConfiguration
     */
    public LanguageConfiguration $languageConfiguration;
    /**
     * Languages including translations for the configured system and metadata languages.
     *
     * @var list<Language>
     */
    public array $languages;
    /**
     * Configured rendering outputs including translations for the customer instance.
     *
     * @var list<OutputFormatInfo>
     */
    public array $outputFormats;
    /**
     * Boost levels that can be applied to a metadata field to boost the the significance of the field in a search operation.
     *
     * @var list<float>
     */
    public array $boostValues;
    /**
     * Apps registered for this customer
     *
     * @var list<CustomerApp>|null
     */
    public ?array $apps;
    /**
     * @var \DateTime
     */
    public \DateTime $modificationDate;
    /**
     * Url to access Frontend service
     *
     * @var string
     */
    public string $baseUrl;
    /**
     * Base bath to access logos of customer (including trailing slash), available images: name, full, small, background
     *
     * @var string
     */
    public string $logosUrl;
}