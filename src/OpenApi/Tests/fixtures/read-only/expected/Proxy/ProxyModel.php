<?php

namespace Jane\OpenApi\Tests\Expected\Proxy;

class ProxyModel extends \Jane\OpenApi\Tests\Expected\Model\Model
{
    public function __construct(\Jane\OpenApi\Tests\Expected\Model\Model $model = null, \Symfony\Component\Serializer\Normalizer\NormalizerInterface $normalizer = null, array $context = null)
    {
        if ($model instanceof \Jane\OpenApi\Tests\Expected\Model\Model) {
            $properties = $this->__properties();
            $properties['foo'] = $model->getFoo();
            $properties['bar'] = $normalizer->normalize($model->getBar(), 'json', $context);
        }
    }
    public function __properties() : array
    {
        return ['foo' => &$this->foo, 'bar' => &$this->bar];
    }
}