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
class SchemaUpdateItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\SchemaUpdateItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SchemaUpdateItem';
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
        $object = new \PicturePark\API\Model\SchemaUpdateItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $object->setDescriptions($data['descriptions']);
            unset($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
        }
        if (\array_key_exists('displayPatterns', $data) && $data['displayPatterns'] !== null) {
            $values = array();
            foreach ($data['displayPatterns'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\DisplayPattern', 'json', $context);
            }
            $object->setDisplayPatterns($values);
            unset($data['displayPatterns']);
        }
        elseif (\array_key_exists('displayPatterns', $data) && $data['displayPatterns'] === null) {
            $object->setDisplayPatterns(null);
        }
        if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
            $values_1 = array();
            foreach ($data['fields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\FieldBase', 'json', $context);
            }
            $object->setFields($values_1);
            unset($data['fields']);
        }
        elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
            $object->setFields(null);
        }
        if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
            $values_2 = array();
            foreach ($data['fieldsOverwrite'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\FieldOverwriteBase', 'json', $context);
            }
            $object->setFieldsOverwrite($values_2);
            unset($data['fieldsOverwrite']);
        }
        elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
            $object->setFieldsOverwrite(null);
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_3 = array();
            foreach ($data['aggregations'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
            }
            $object->setAggregations($values_3);
            unset($data['aggregations']);
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->setAggregations(null);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_4 = array();
            foreach ($data['sort'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
            }
            $object->setSort($values_4);
            unset($data['sort']);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
            unset($data['viewForAll']);
        }
        if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
            $values_5 = array();
            foreach ($data['schemaPermissionSetIds'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setSchemaPermissionSetIds($values_5);
            unset($data['schemaPermissionSetIds']);
        }
        elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
            $object->setSchemaPermissionSetIds(null);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_6 = array();
            foreach ($data['layerSchemaIds'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setLayerSchemaIds($values_6);
            unset($data['layerSchemaIds']);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] !== null) {
            $values_7 = array();
            foreach ($data['referencedInContentSchemaIds'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setReferencedInContentSchemaIds($values_7);
            unset($data['referencedInContentSchemaIds']);
        }
        elseif (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] === null) {
            $object->setReferencedInContentSchemaIds(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('names') && null !== $object->getNames()) {
            $data['names'] = $object->getNames();
        }
        if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
            $data['descriptions'] = $object->getDescriptions();
        }
        if ($object->isInitialized('displayPatterns') && null !== $object->getDisplayPatterns()) {
            $values = array();
            foreach ($object->getDisplayPatterns() as $value) {
                $values[] = $value == null ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['displayPatterns'] = $values;
        }
        if ($object->isInitialized('fields') && null !== $object->getFields()) {
            $values_1 = array();
            foreach ($object->getFields() as $value_1) {
                $values_1[] = $value_1 == null ? null : new \ArrayObject($this->normalizer->normalize($value_1, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['fields'] = $values_1;
        }
        if ($object->isInitialized('fieldsOverwrite') && null !== $object->getFieldsOverwrite()) {
            $values_2 = array();
            foreach ($object->getFieldsOverwrite() as $value_2) {
                $values_2[] = $value_2 == null ? null : new \ArrayObject($this->normalizer->normalize($value_2, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['fieldsOverwrite'] = $values_2;
        }
        if ($object->isInitialized('aggregations') && null !== $object->getAggregations()) {
            $values_3 = array();
            foreach ($object->getAggregations() as $value_3) {
                $values_3[] = $value_3 == null ? null : new \ArrayObject($this->normalizer->normalize($value_3, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['aggregations'] = $values_3;
        }
        if ($object->isInitialized('sort') && null !== $object->getSort()) {
            $values_4 = array();
            foreach ($object->getSort() as $value_4) {
                $values_4[] = $value_4 == null ? null : new \ArrayObject($this->normalizer->normalize($value_4, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['sort'] = $values_4;
        }
        $data['viewForAll'] = $object->getViewForAll();
        if ($object->isInitialized('schemaPermissionSetIds') && null !== $object->getSchemaPermissionSetIds()) {
            $values_5 = array();
            foreach ($object->getSchemaPermissionSetIds() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['schemaPermissionSetIds'] = $values_5;
        }
        if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
            $values_6 = array();
            foreach ($object->getLayerSchemaIds() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['layerSchemaIds'] = $values_6;
        }
        if ($object->isInitialized('referencedInContentSchemaIds') && null !== $object->getReferencedInContentSchemaIds()) {
            $values_7 = array();
            foreach ($object->getReferencedInContentSchemaIds() as $value_7) {
                $values_7[] = $value_7;
            }
            $data['referencedInContentSchemaIds'] = $values_7;
        }
        $data['id'] = $object->getId();
        foreach ($object as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_8;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\SchemaUpdateItem' => false);
    }
}