<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OtherchildtypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Otherchildtype';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\Otherchildtype;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Jane\JsonSchema\Tests\Expected\Model\Otherchildtype();
        if (property_exists($data, 'inheritedProperty')) {
            $object->setInheritedProperty($data->{'inheritedProperty'});
        }
        if (property_exists($data, 'childProperty')) {
            $object->setChildProperty($data->{'childProperty'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'inheritedProperty'} = $object->getInheritedProperty();
        $data->{'childProperty'} = $object->getChildProperty();
        return $data;
    }
}