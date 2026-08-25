<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentChatbotIdentifier implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Agent chatbot identifier
     *
     * @var string
     */
    protected $agentChatbotIdentifier;
    /**
     * Agent chatbot identifier
     *
     * @return string
     */
    public function getAgentChatbotIdentifier(): string
    {
        return $this->agentChatbotIdentifier;
    }
    /**
     * Agent chatbot identifier
     *
     * @param string $agentChatbotIdentifier
     *
     * @return self
     */
    public function setAgentChatbotIdentifier(string $agentChatbotIdentifier): self
    {
        $this->initialized['agentChatbotIdentifier'] = true;
        $this->agentChatbotIdentifier = $agentChatbotIdentifier;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['agentChatbotIdentifier' => ['agent_chatbot_identifier', 'getAgentChatbotIdentifier', 'setAgentChatbotIdentifier']];
    }
}