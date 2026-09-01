<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterlintResultsDiagnosticsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The clusterlint check that resulted in the diagnostic.
     *
     * @var string
     */
    public string $checkName;
    /**
     * Can be one of error, warning or suggestion.
     *
     * @var string
     */
    public string $severity;
    /**
     * Feedback about the object for users to fix.
     *
     * @var string
     */
    public string $message;
    /**
     * Metadata about the Kubernetes API object the diagnostic is reported on.
     *
     * @var ClusterlintResultsDiagnosticsItemObject
     */
    public ClusterlintResultsDiagnosticsItemObject $object;
    public function definedProperties(): array
    {
        return ['checkName' => 'check_name', 'severity' => 'severity', 'message' => 'message', 'object' => 'object'];
    }
}