<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterlintResultsDiagnosticsItem implements AdditionalPropertiesInterface
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
     * The clusterlint check that resulted in the diagnostic.
     *
     * @var string
     */
    protected $checkName;
    /**
     * Can be one of error, warning or suggestion.
     *
     * @var string
     */
    protected $severity;
    /**
     * Feedback about the object for users to fix.
     *
     * @var string
     */
    protected $message;
    /**
     * Metadata about the Kubernetes API object the diagnostic is reported on.
     *
     * @var ClusterlintResultsDiagnosticsItemObject
     */
    protected $object;
    /**
     * The clusterlint check that resulted in the diagnostic.
     *
     * @return string
     */
    public function getCheckName(): string
    {
        return $this->checkName;
    }
    /**
     * The clusterlint check that resulted in the diagnostic.
     *
     * @param string $checkName
     *
     * @return self
     */
    public function setCheckName(string $checkName): self
    {
        $this->initialized['checkName'] = true;
        $this->checkName = $checkName;
        return $this;
    }
    /**
     * Can be one of error, warning or suggestion.
     *
     * @return string
     */
    public function getSeverity(): string
    {
        return $this->severity;
    }
    /**
     * Can be one of error, warning or suggestion.
     *
     * @param string $severity
     *
     * @return self
     */
    public function setSeverity(string $severity): self
    {
        $this->initialized['severity'] = true;
        $this->severity = $severity;
        return $this;
    }
    /**
     * Feedback about the object for users to fix.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Feedback about the object for users to fix.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Metadata about the Kubernetes API object the diagnostic is reported on.
     *
     * @return ClusterlintResultsDiagnosticsItemObject
     */
    public function getObject(): ClusterlintResultsDiagnosticsItemObject
    {
        return $this->object;
    }
    /**
     * Metadata about the Kubernetes API object the diagnostic is reported on.
     *
     * @param ClusterlintResultsDiagnosticsItemObject $object
     *
     * @return self
     */
    public function setObject(ClusterlintResultsDiagnosticsItemObject $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['checkName' => ['check_name', 'getCheckName', 'setCheckName'], 'severity' => ['severity', 'getSeverity', 'setSeverity'], 'message' => ['message', 'getMessage', 'setMessage'], 'object' => ['object', 'getObject', 'setObject']];
    }
}