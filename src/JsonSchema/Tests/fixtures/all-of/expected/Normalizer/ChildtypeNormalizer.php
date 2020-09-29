<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ChildtypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Childtype';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\Childtype;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\JsonSchema\Tests\Expected\Model\Childtype();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('childProperty', $data)) {
            $object->setChildProperty($data['childProperty']);
        }
        if (\array_key_exists('inheritedProperty', $data)) {
            $object->setInheritedProperty($data['inheritedProperty']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getChildProperty()) {
            $data['childProperty'] = $object->getChildProperty();
        }
        if (null !== $object->getInheritedProperty()) {
            $data['inheritedProperty'] = $object->getInheritedProperty();
        }
        return $data;
    }
}