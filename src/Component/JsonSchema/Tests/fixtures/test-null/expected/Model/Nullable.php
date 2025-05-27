<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Nullable
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
     * @var null
     */
    protected $onlyNull;
    /**
     * @var string|null
     */
    protected $nullOrString;
    /**
     * @var string
     */
    protected $required;
    /**
     * @var string|null
     */
    protected $requiredNull;
    /**
     * @return null
     */
    public function getOnlyNull()
    {
        return $this->onlyNull;
    }
    /**
     * @param null $onlyNull
     *
     * @return self
     */
    public function setOnlyNull($onlyNull): self
    {
        $this->initialized['onlyNull'] = true;
        $this->onlyNull = $onlyNull;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNullOrString(): ?string
    {
        return $this->nullOrString;
    }
    /**
     * @param string|null $nullOrString
     *
     * @return self
     */
    public function setNullOrString(?string $nullOrString): self
    {
        $this->initialized['nullOrString'] = true;
        $this->nullOrString = $nullOrString;
        return $this;
    }
    /**
     * @return string
     */
    public function getRequired(): string
    {
        return $this->required;
    }
    /**
     * @param string $required
     *
     * @return self
     */
    public function setRequired(string $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRequiredNull(): ?string
    {
        return $this->requiredNull;
    }
    /**
     * @param string|null $requiredNull
     *
     * @return self
     */
    public function setRequiredNull(?string $requiredNull): self
    {
        $this->initialized['requiredNull'] = true;
        $this->requiredNull = $requiredNull;
        return $this;
    }
}