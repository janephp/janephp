<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

class Parameters
{
    /** @var array<string, string> */
    private $parameters;

    /**
     * @param array<string, string> $parameters
     */
    public function __construct(array $parameters)
    {
        $this->setParameters($parameters);
    }

    /**
     * @return array<string, string>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param array<string, string> $parameters
     */
    public function setParameters(array $parameters): void
    {
        $this->parameters = $parameters;
    }
}
