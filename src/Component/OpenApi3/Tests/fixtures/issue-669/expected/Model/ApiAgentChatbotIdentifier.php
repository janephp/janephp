<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentChatbotIdentifier implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Agent chatbot identifier
     *
     * @var string
     */
    public string $agentChatbotIdentifier;
    public function definedProperties(): array
    {
        return ['agentChatbotIdentifier' => 'agent_chatbot_identifier'];
    }
}