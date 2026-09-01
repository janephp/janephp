<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

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