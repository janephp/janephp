<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BazBazNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\BazBaz';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\BazBaz;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\JsonSchema\Tests\Expected\Model\BazBaz();
        if (\array_key_exists('baz', $data)) {
            $object->setBaz($data['baz']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBaz()) {
            $data['baz'] = $object->getBaz();
        }
        return $data;
    }
}