<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Model;

class Error
{
    /**
     * An application-specific error code, expressed as a string value.
     *
     * @var string
     */
    public string $code;
    /**
     * A short, human-readable summary of the problem.
     *
     * @var string
     */
    public string $title;
}