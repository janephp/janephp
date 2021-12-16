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
    protected $normalizers = array('Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\EmptySpace' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\EmptySpaceNormalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Schema' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\SchemaNormalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\SchemaObjectProperty' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\SchemaObjectPropertyNormalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Error' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\ErrorNormalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\TestIdGetResponse200' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\TestIdGetResponse200Normalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\TestComplexListGetResponse200Item0' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\TestComplexListGetResponse200Item0Normalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\TestComplexListGetResponse200Item1' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\TestComplexListGetResponse200Item1Normalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\TestComplexListGetResponse200Item2' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\TestComplexListGetResponse200Item2Normalizer', 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\TestComplexListGetResponsedefault' => 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Normalizer\\TestComplexListGetResponsedefaultNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Jane\\Component\\OpenApi2\\Tests\\Expected\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    /**
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
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