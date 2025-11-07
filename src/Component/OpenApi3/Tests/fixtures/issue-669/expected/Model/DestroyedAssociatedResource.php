<?php

namespace Jane\Generated\DigitalOcean\Model;

class DestroyedAssociatedResource extends \ArrayObject
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
     * The unique identifier for the resource scheduled for deletion.
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the resource scheduled for deletion.
     *
     * @var string
     */
    protected $name;
    /**
     * A time value given in ISO8601 combined date and time format indicating when the resource was destroyed if the request was successful.
     *
     * @var \DateTime
     */
    protected $destroyedAt;
    /**
     * A string indicating that the resource was not successfully destroyed and providing additional information.
     *
     * @var string
     */
    protected $errorMessage;
    /**
     * The unique identifier for the resource scheduled for deletion.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique identifier for the resource scheduled for deletion.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The name of the resource scheduled for deletion.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the resource scheduled for deletion.
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
    /**
     * A time value given in ISO8601 combined date and time format indicating when the resource was destroyed if the request was successful.
     *
     * @return \DateTime
     */
    public function getDestroyedAt(): \DateTime
    {
        return $this->destroyedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format indicating when the resource was destroyed if the request was successful.
     *
     * @param \DateTime $destroyedAt
     *
     * @return self
     */
    public function setDestroyedAt(\DateTime $destroyedAt): self
    {
        $this->initialized['destroyedAt'] = true;
        $this->destroyedAt = $destroyedAt;
        return $this;
    }
    /**
     * A string indicating that the resource was not successfully destroyed and providing additional information.
     *
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
    /**
     * A string indicating that the resource was not successfully destroyed and providing additional information.
     *
     * @param string $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;
        return $this;
    }
}