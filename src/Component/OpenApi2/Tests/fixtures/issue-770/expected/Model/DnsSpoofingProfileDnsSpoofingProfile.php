<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DnsSpoofingProfileDnsSpoofingProfile
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
    protected $name;
    /**
     * DNS Spoofing Profile's description
     *
     * @var string
     */
    protected $description;
    /**
     * DNS Spoofing Profile's rules (At least one rule)
     *
     * @var list<DnsSpoofingProfileDnsSpoofingRule>
     */
    protected $rules;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * DNS Spoofing Profile's description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * DNS Spoofing Profile's description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * DNS Spoofing Profile's rules (At least one rule)
     *
     * @return list<DnsSpoofingProfileDnsSpoofingRule>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * DNS Spoofing Profile's rules (At least one rule)
     *
     * @param list<DnsSpoofingProfileDnsSpoofingRule> $rules
     *
     * @return self
     */
    public function setRules(array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
}