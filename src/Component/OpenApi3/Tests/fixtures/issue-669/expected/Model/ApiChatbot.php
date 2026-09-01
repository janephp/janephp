<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiChatbot implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $allowedDomains;
    /**
     * @var string
     */
    public string $buttonBackgroundColor;
    /**
     * @var string
     */
    public string $logo;
    /**
     * Name of chatbot
     *
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $primaryColor;
    /**
     * @var string
     */
    public string $secondaryColor;
    /**
     * @var string
     */
    public string $startingMessage;
    public function definedProperties(): array
    {
        return ['allowedDomains' => 'allowed_domains', 'buttonBackgroundColor' => 'button_background_color', 'logo' => 'logo', 'name' => 'name', 'primaryColor' => 'primary_color', 'secondaryColor' => 'secondary_color', 'startingMessage' => 'starting_message'];
    }
}