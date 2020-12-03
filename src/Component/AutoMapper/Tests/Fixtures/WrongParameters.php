<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

class WrongParameters
{
    /** @var string[]|null */
    private $parameters;

    /**
     * @param string[]|null $parameters
     */
    public function __construct(array $parameters)
    {
        $this->setParameters($parameters);
    }

    /**
     * @return string[]|null
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param string[]|null $parameters
     */
    public function setParameters(array $parameters): void
    {
        $this->parameters = $parameters;
    }
}
