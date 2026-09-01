<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskWlanExternalDpskAuthService
{
    /**
     * Identifier of the authentication service. At least one ID or name is required in the request.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of the authentication service. At least one ID or name is required in the request.
     *
     * @var string
     */
    public string $name;
}