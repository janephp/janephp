<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiAgentFunctionVersion extends \ArrayObject
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
     * Description of the function
     *
     * @var string
     */
    protected $description;
    /**
     * FaaS name of the function
     *
     * @var string
     */
    protected $faasName;
    /**
     * FaaS namespace of the function
     *
     * @var string
     */
    protected $faasNamespace;
    /**
     * Whether the function is deleted
     *
     * @var bool
     */
    protected $isDeleted;
    /**
     * Name of the function
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the function
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the function
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
     * FaaS name of the function
     *
     * @return string
     */
    public function getFaasName(): string
    {
        return $this->faasName;
    }
    /**
     * FaaS name of the function
     *
     * @param string $faasName
     *
     * @return self
     */
    public function setFaasName(string $faasName): self
    {
        $this->initialized['faasName'] = true;
        $this->faasName = $faasName;
        return $this;
    }
    /**
     * FaaS namespace of the function
     *
     * @return string
     */
    public function getFaasNamespace(): string
    {
        return $this->faasNamespace;
    }
    /**
     * FaaS namespace of the function
     *
     * @param string $faasNamespace
     *
     * @return self
     */
    public function setFaasNamespace(string $faasNamespace): self
    {
        $this->initialized['faasNamespace'] = true;
        $this->faasNamespace = $faasNamespace;
        return $this;
    }
    /**
     * Whether the function is deleted
     *
     * @return bool
     */
    public function getIsDeleted(): bool
    {
        return $this->isDeleted;
    }
    /**
     * Whether the function is deleted
     *
     * @param bool $isDeleted
     *
     * @return self
     */
    public function setIsDeleted(bool $isDeleted): self
    {
        $this->initialized['isDeleted'] = true;
        $this->isDeleted = $isDeleted;
        return $this;
    }
    /**
     * Name of the function
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the function
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
}