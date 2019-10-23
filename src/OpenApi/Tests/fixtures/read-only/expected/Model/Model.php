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
    /**
     * 
     *
     * @var ModelTranslationsItem[]
     */
    protected $translations;
    public function __construct(\Jane\OpenApi\Tests\Expected\Proxy\ProxyModel $proxy = null, \Symfony\Component\Serializer\Normalizer\DenormalizerInterface $denormalizer = null, array $context = null)
    {
        if ($proxy instanceof \Jane\OpenApi\Tests\Expected\Proxy\ProxyModel) {
            $properties = $proxy->__properties();
            $this->{'foo'} = $properties['foo'];
            $this->{'bar'} = $denormalizer->denormalize($properties['bar'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\SubModel', 'json', $context);
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($properties['translations'] as $key => $value) {
                $values[$key] = $denormalizer->denormalize($value, 'Jane\\OpenApi\\Tests\\Expected\\Model\\ModelTranslationsItem', 'json', $context);
            }
            $this->{'translations'} = $values;
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
    /**
     * 
     *
     * @return ModelTranslationsItem[]
     */
    public function getTranslations() : \ArrayObject
    {
        return $this->translations;
    }
    /**
     * 
     *
     * @param ModelTranslationsItem[] $translations
     *
     * @return self
     */
    public function setTranslations(\ArrayObject $translations) : self
    {
        $this->translations = $translations;
        return $this;
    }
}