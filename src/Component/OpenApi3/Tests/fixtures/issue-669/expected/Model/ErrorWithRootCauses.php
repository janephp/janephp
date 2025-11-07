<?php

namespace Jane\Generated\DigitalOcean\Model;

class ErrorWithRootCauses extends \ArrayObject
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
     * A message providing information about the error.
     *
     * @var string
     */
    protected $error;
    /**
     * A list of error messages.
     *
     * @var list<string>|null
     */
    protected $messages;
    /**
     * A list of underlying causes for the error, including details to help  resolve it when possible.
     *
     * @var list<string>
     */
    protected $rootCauses;
    /**
     * A message providing information about the error.
     *
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
    /**
     * A message providing information about the error.
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * A list of error messages.
     *
     * @return list<string>|null
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }
    /**
     * A list of error messages.
     *
     * @param list<string>|null $messages
     *
     * @return self
     */
    public function setMessages(?array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }
    /**
     * A list of underlying causes for the error, including details to help  resolve it when possible.
     *
     * @return list<string>
     */
    public function getRootCauses(): array
    {
        return $this->rootCauses;
    }
    /**
     * A list of underlying causes for the error, including details to help  resolve it when possible.
     *
     * @param list<string> $rootCauses
     *
     * @return self
     */
    public function setRootCauses(array $rootCauses): self
    {
        $this->initialized['rootCauses'] = true;
        $this->rootCauses = $rootCauses;
        return $this;
    }
}