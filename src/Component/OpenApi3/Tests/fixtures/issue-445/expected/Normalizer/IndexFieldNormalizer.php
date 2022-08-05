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
class IndexFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\IndexField';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\IndexField';
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
        $object = new \PicturePark\API\Model\IndexField();
        if (\array_key_exists('boost', $data) && \is_int($data['boost'])) {
            $data['boost'] = (double) $data['boost'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('fieldId', $data) && $data['fieldId'] !== null) {
            $object->setFieldId($data['fieldId']);
        }
        elseif (\array_key_exists('fieldId', $data) && $data['fieldId'] === null) {
            $object->setFieldId(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('indexFields', $data) && $data['indexFields'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['indexFields'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setIndexFields($values);
        }
        elseif (\array_key_exists('indexFields', $data) && $data['indexFields'] === null) {
            $object->setIndexFields(null);
        }
        if (\array_key_exists('simpleSearchFields', $data) && $data['simpleSearchFields'] !== null) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['simpleSearchFields'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setSimpleSearchFields($values_1);
        }
        elseif (\array_key_exists('simpleSearchFields', $data) && $data['simpleSearchFields'] === null) {
            $object->setSimpleSearchFields(null);
        }
        if (\array_key_exists('boost', $data)) {
            $object->setBoost($data['boost']);
        }
        if (\array_key_exists('ignoreForSearch', $data)) {
            $object->setIgnoreForSearch($data['ignoreForSearch']);
        }
        if (\array_key_exists('nestedPath', $data) && $data['nestedPath'] !== null) {
            $object->setNestedPath($data['nestedPath']);
        }
        elseif (\array_key_exists('nestedPath', $data) && $data['nestedPath'] === null) {
            $object->setNestedPath(null);
        }
        if (\array_key_exists('sortField', $data) && $data['sortField'] !== null) {
            $object->setSortField($data['sortField']);
        }
        elseif (\array_key_exists('sortField', $data) && $data['sortField'] === null) {
            $object->setSortField(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getFieldId()) {
            $data['fieldId'] = $object->getFieldId();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getIndexFields()) {
            $values = array();
            foreach ($object->getIndexFields() as $key => $value) {
                $values[$key] = $value;
            }
            $data['indexFields'] = $values;
        }
        if (null !== $object->getSimpleSearchFields()) {
            $values_1 = array();
            foreach ($object->getSimpleSearchFields() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $data['simpleSearchFields'] = $values_1;
        }
        $data['boost'] = $object->getBoost();
        $data['ignoreForSearch'] = $object->getIgnoreForSearch();
        if (null !== $object->getNestedPath()) {
            $data['nestedPath'] = $object->getNestedPath();
        }
        if (null !== $object->getSortField()) {
            $data['sortField'] = $object->getSortField();
        }
        return $data;
    }
}