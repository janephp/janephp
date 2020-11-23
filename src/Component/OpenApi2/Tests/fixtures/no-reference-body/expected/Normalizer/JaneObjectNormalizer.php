<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Foo' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\FooNormalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Bar' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\BarNormalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\TestGetBody' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\TestGetBodyNormalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\TestGetBodyBaz' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\TestGetBodyBazNormalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\TestPostBody' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\TestPostBodyNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Jane\\Component\\OpenApi2\\Tests\\Expected\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}