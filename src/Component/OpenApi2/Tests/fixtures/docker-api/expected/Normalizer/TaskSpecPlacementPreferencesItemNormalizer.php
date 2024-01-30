<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TaskSpecPlacementPreferencesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItem';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\TaskSpecPlacementPreferencesItem();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\TaskSpecPlacementPreferencesItemConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Spread', $data)) {
            $object->setSpread($this->denormalizer->denormalize($data['Spread'], 'Docker\\Api\\Model\\TaskSpecPlacementPreferencesItemSpread', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('spread') && null !== $object->getSpread()) {
            $data['Spread'] = $object->getSpread() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getSpread(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\TaskSpecPlacementPreferencesItemConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Docker\\Api\\Model\\TaskSpecPlacementPreferencesItem' => false);
    }
}