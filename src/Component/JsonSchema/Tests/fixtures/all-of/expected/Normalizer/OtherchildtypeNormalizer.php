<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Otherchildtype';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Otherchildtype;
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Otherchildtype();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('inheritedProperty', $data)) {
            $object->setInheritedProperty($data['inheritedProperty']);
        }
        if (\array_key_exists('childProperty', $data)) {
            $object->setChildProperty($data['childProperty']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('inheritedProperty') && null !== $object->getInheritedProperty()) {
            $data['inheritedProperty'] = $object->getInheritedProperty();
        }
        if ($object->isInitialized('childProperty') && null !== $object->getChildProperty()) {
            $data['childProperty'] = $object->getChildProperty();
        }
        return $data;
    }
}