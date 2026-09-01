<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceTestingConfig
{
    /**
     * Identifier of the authentication service
     *
     * @var string
     */
    public string $id;
    /**
     * @var ServiceTestingConfigLoginRequest
     */
    public ServiceTestingConfigLoginRequest $loginRequest;
}