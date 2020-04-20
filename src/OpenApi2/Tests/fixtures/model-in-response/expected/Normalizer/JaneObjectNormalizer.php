<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
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
    protected $normalizers = array('Jane\\OpenApi2\\Tests\\Expected\\Model\\EmptySpace' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\EmptySpaceNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Schema' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\SchemaNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\SchemaObjectProperty' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\SchemaObjectPropertyNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ErrorNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TestIdGetResponse200' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TestIdGetResponse200Normalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TestComplexListGetResponse200Item0' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TestComplexListGetResponse200Item0Normalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TestComplexListGetResponse200Item1' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TestComplexListGetResponse200Item1Normalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TestComplexListGetResponse200Item2' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TestComplexListGetResponse200Item2Normalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TestComplexListGetResponsedefault' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TestComplexListGetResponsedefaultNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Jane\\JsonSchemaRuntime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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