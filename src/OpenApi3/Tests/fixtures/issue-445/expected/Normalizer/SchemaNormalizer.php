<?php

namespace PicturePark\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\Schema';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Schema';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\Schema();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] !== null) {
            $object->setParentSchemaId($data['parentSchemaId']);
        }
        elseif (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] === null) {
            $object->setParentSchemaId(null);
        }
        if (\array_key_exists('types', $data) && $data['types'] !== null) {
            $values = array();
            foreach ($data['types'] as $value) {
                $values[] = $value;
            }
            $object->setTypes($values);
        }
        elseif (\array_key_exists('types', $data) && $data['types'] === null) {
            $object->setTypes(null);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $object->setDescriptions($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_1 = array();
            foreach ($data['layerSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLayerSchemaIds($values_1);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('fieldCount', $data)) {
            $object->setFieldCount($data['fieldCount']);
        }
        if (\array_key_exists('childCount', $data)) {
            $object->setChildCount($data['childCount']);
        }
        if (\array_key_exists('level', $data)) {
            $object->setLevel($data['level']);
        }
        if (\array_key_exists('system', $data)) {
            $object->setSystem($data['system']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        if (null !== $object->getParentSchemaId()) {
            $data['parentSchemaId'] = $object->getParentSchemaId();
        }
        if (null !== $object->getTypes()) {
            $values = array();
            foreach ($object->getTypes() as $value) {
                $values[] = $value;
            }
            $data['types'] = $values;
        }
        if (null !== $object->getNames()) {
            $data['names'] = $object->getNames();
        }
        if (null !== $object->getDescriptions()) {
            $data['descriptions'] = $object->getDescriptions();
        }
        if (null !== $object->getLayerSchemaIds()) {
            $values_1 = array();
            foreach ($object->getLayerSchemaIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['layerSchemaIds'] = $values_1;
        }
        $data['fieldCount'] = $object->getFieldCount();
        $data['childCount'] = $object->getChildCount();
        $data['level'] = $object->getLevel();
        $data['system'] = $object->getSystem();
        return $data;
    }
}