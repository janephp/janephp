<?php

namespace Jane\JsonSchema\Tests\Expected\Proxy;

class ProxyTest extends \Jane\JsonSchema\Tests\Expected\Model\Test
{
    public function __construct(\Jane\JsonSchema\Tests\Expected\Model\Test $model = null, \Symfony\Component\Serializer\Normalizer\NormalizerInterface $normalizer = null, array $context = null)
    {
        if ($model instanceof \Jane\JsonSchema\Tests\Expected\Model\Test) {
            $properties = $this->__properties();
            $properties['__token'] = $model->getToken();
            $properties['email'] = $model->getEmail();
        }
    }
    public function __properties() : array
    {
        return ['__token' => &$this->token, 'email' => &$this->email];
    }
}