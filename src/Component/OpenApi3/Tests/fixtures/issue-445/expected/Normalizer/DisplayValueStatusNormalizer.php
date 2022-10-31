<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DisplayValueStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\DisplayValueStatus';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DisplayValueStatus';
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
        $object = new \PicturePark\API\Model\DisplayValueStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contentOrLayerSchemaIds', $data) && $data['contentOrLayerSchemaIds'] !== null) {
            $values = array();
            foreach ($data['contentOrLayerSchemaIds'] as $value) {
                $values[] = $value;
            }
            $object->setContentOrLayerSchemaIds($values);
        }
        elseif (\array_key_exists('contentOrLayerSchemaIds', $data) && $data['contentOrLayerSchemaIds'] === null) {
            $object->setContentOrLayerSchemaIds(null);
        }
        if (\array_key_exists('listSchemaIds', $data) && $data['listSchemaIds'] !== null) {
            $values_1 = array();
            foreach ($data['listSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setListSchemaIds($values_1);
        }
        elseif (\array_key_exists('listSchemaIds', $data) && $data['listSchemaIds'] === null) {
            $object->setListSchemaIds(null);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('contentOrLayerSchemaIds') && null !== $object->getContentOrLayerSchemaIds()) {
            $values = array();
            foreach ($object->getContentOrLayerSchemaIds() as $value) {
                $values[] = $value;
            }
            $data['contentOrLayerSchemaIds'] = $values;
        }
        if ($object->isInitialized('listSchemaIds') && null !== $object->getListSchemaIds()) {
            $values_1 = array();
            foreach ($object->getListSchemaIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['listSchemaIds'] = $values_1;
        }
        $data['state'] = $object->getState();
        return $data;
    }
}