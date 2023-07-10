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
class ListItemFilterRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ListItemFilterRequest';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ListItemFilterRequest';
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
        $object = new \PicturePark\API\Model\ListItemFilterRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->setSearchString(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('includeAllSchemaChildren', $data)) {
            $object->setIncludeAllSchemaChildren($data['includeAllSchemaChildren']);
        }
        if (\array_key_exists('schemaIds', $data) && $data['schemaIds'] !== null) {
            $values = array();
            foreach ($data['schemaIds'] as $value) {
                $values[] = $value;
            }
            $object->setSchemaIds($values);
        }
        elseif (\array_key_exists('schemaIds', $data) && $data['schemaIds'] === null) {
            $object->setSchemaIds(null);
        }
        if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
            $values_1 = array();
            foreach ($data['searchLanguages'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSearchLanguages($values_1);
        }
        elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
            $object->setSearchLanguages(null);
        }
        if (\array_key_exists('brokenDependenciesFilter', $data)) {
            $object->setBrokenDependenciesFilter($data['brokenDependenciesFilter']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
            $data['searchString'] = $object->getSearchString();
        }
        if ($object->isInitialized('filter') && null !== $object->getFilter()) {
            $data['filter'] = $object->getFilter();
        }
        $data['includeAllSchemaChildren'] = $object->getIncludeAllSchemaChildren();
        if ($object->isInitialized('schemaIds') && null !== $object->getSchemaIds()) {
            $values = array();
            foreach ($object->getSchemaIds() as $value) {
                $values[] = $value;
            }
            $data['schemaIds'] = $values;
        }
        if ($object->isInitialized('searchLanguages') && null !== $object->getSearchLanguages()) {
            $values_1 = array();
            foreach ($object->getSearchLanguages() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['searchLanguages'] = $values_1;
        }
        $data['brokenDependenciesFilter'] = $object->getBrokenDependenciesFilter();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\ListItemFilterRequest' => false);
    }
}