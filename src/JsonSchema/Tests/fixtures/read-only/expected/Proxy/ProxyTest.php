<?php

namespace Jane\JsonSchema\Tests\Expected\Proxy;

class ProxyTest extends \Jane\JsonSchema\Tests\Expected\Model\Test
{
    public function __properties() : array
    {
        return ['__token' => &$this->token, 'email' => &$this->email];
    }
}