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
class SearchBehaviorWithAggregationBaseResultOfXmpMappingEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\SearchBehaviorWithAggregationBaseResultOfXmpMappingEntry';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SearchBehaviorWithAggregationBaseResultOfXmpMappingEntry';
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
        $object = new \PicturePark\API\Model\SearchBehaviorWithAggregationBaseResultOfXmpMappingEntry();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('totalResults', $data)) {
            $object->setTotalResults($data['totalResults']);
            unset($data['totalResults']);
        }
        if (\array_key_exists('results', $data)) {
            $values = array();
            foreach ($data['results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\XmpMappingEntry', 'json', $context);
            }
            $object->setResults($values);
            unset($data['results']);
        }
        if (\array_key_exists('elapsedMilliseconds', $data)) {
            $object->setElapsedMilliseconds($data['elapsedMilliseconds']);
            unset($data['elapsedMilliseconds']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->setPageToken($data['pageToken']);
            unset($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->setPageToken(null);
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
            unset($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->setSearchString(null);
        }
        if (\array_key_exists('isSearchStringRewritten', $data)) {
            $object->setIsSearchStringRewritten($data['isSearchStringRewritten']);
            unset($data['isSearchStringRewritten']);
        }
        if (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] !== null) {
            $values_1 = array();
            foreach ($data['queryDebugInformation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\QueryDebugInformation', 'json', $context);
            }
            $object->setQueryDebugInformation($values_1);
            unset($data['queryDebugInformation']);
        }
        elseif (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] === null) {
            $object->setQueryDebugInformation(null);
        }
        if (\array_key_exists('aggregationResults', $data) && $data['aggregationResults'] !== null) {
            $values_2 = array();
            foreach ($data['aggregationResults'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\AggregationResult', 'json', $context);
            }
            $object->setAggregationResults($values_2);
            unset($data['aggregationResults']);
        }
        elseif (\array_key_exists('aggregationResults', $data) && $data['aggregationResults'] === null) {
            $object->setAggregationResults(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        $data['totalResults'] = $object->getTotalResults();
        $values = array();
        foreach ($object->getResults() as $value) {
            $values[] = $value == null ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['results'] = $values;
        $data['elapsedMilliseconds'] = $object->getElapsedMilliseconds();
        if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
            $data['pageToken'] = $object->getPageToken();
        }
        if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
            $data['searchString'] = $object->getSearchString();
        }
        if ($object->isInitialized('isSearchStringRewritten') && null !== $object->getIsSearchStringRewritten()) {
            $data['isSearchStringRewritten'] = $object->getIsSearchStringRewritten();
        }
        if ($object->isInitialized('queryDebugInformation') && null !== $object->getQueryDebugInformation()) {
            $values_1 = array();
            foreach ($object->getQueryDebugInformation() as $value_1) {
                $values_1[] = $value_1 == null ? null : new \ArrayObject($this->normalizer->normalize($value_1, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['queryDebugInformation'] = $values_1;
        }
        if ($object->isInitialized('aggregationResults') && null !== $object->getAggregationResults()) {
            $values_2 = array();
            foreach ($object->getAggregationResults() as $value_2) {
                $values_2[] = $value_2 == null ? null : new \ArrayObject($this->normalizer->normalize($value_2, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['aggregationResults'] = $values_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\SearchBehaviorWithAggregationBaseResultOfXmpMappingEntry' => false);
    }
}