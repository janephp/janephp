<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Model
{
    /**
     * 
     *
     * @var string
     */
    protected $foo;
    /**
     * 
     *
     * @var SubModel
     */
    protected $bar;
    public function __construct(\Jane\OpenApi\Tests\Expected\Proxy\ProxyModel $proxy = null, \Symfony\Component\Serializer\Normalizer\NormalizerInterface $normalizer = null, array $context = null)
    {
        if ($proxy instanceof \Jane\OpenApi\Tests\Expected\Proxy\ProxyModel) {
            $properties = $proxy->__properties();
            $this->{'foo'} = $properties['foo'];
            $this->{'bar'} = $normalizer->normalize($properties['bar'], 'json', $context);
        }
    }
    /**
     * 
     *
     * @return string
     */
    public function getFoo() : string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @return SubModel
     */
    public function getBar() : SubModel
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param SubModel $bar
     *
     * @return self
     */
    public function setBar(SubModel $bar) : self
    {
        $this->bar = $bar;
        return $this;
    }
}