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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BusinessRuleTraceLogSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleTraceLogSearchRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleTraceLogSearchRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\BusinessRuleTraceLogSearchRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('debugMode', $data)) {
                $object->setDebugMode($data['debugMode']);
            }
            if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
                $values = [];
                foreach ($data['aggregationFilters'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregationFilter', 'json', $context);
                }
                $object->setAggregationFilters($values);
            }
            elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
                $object->setAggregationFilters(null);
            }
            if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
                $values_1 = [];
                foreach ($data['aggregators'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregators($values_1);
            }
            elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
                $object->setAggregators(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
            }
            if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
                $object->setPageToken($data['pageToken']);
            }
            elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
                $object->setPageToken(null);
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
                $values_2 = [];
                foreach ($data['searchBehaviors'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setSearchBehaviors($values_2);
            }
            elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
                $object->setSearchBehaviors(null);
            }
            if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
                $values_3 = [];
                foreach ($data['sort'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
                }
                $object->setSort($values_3);
            }
            elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
                $object->setSort(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['debugMode'] = $object->getDebugMode();
            if ($object->isInitialized('aggregationFilters') && null !== $object->getAggregationFilters()) {
                $values = [];
                foreach ($object->getAggregationFilters() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['aggregationFilters'] = $values;
            }
            if ($object->isInitialized('aggregators') && null !== $object->getAggregators()) {
                $values_1 = [];
                foreach ($object->getAggregators() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['aggregators'] = $values_1;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['limit'] = $object->getLimit();
            if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
                $data['pageToken'] = $object->getPageToken();
            }
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            if ($object->isInitialized('searchBehaviors') && null !== $object->getSearchBehaviors()) {
                $values_2 = [];
                foreach ($object->getSearchBehaviors() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['searchBehaviors'] = $values_2;
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $values_3 = [];
                foreach ($object->getSort() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['sort'] = $values_3;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleTraceLogSearchRequest' => false];
        }
    }
} else {
    class BusinessRuleTraceLogSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\BusinessRuleTraceLogSearchRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleTraceLogSearchRequest';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\BusinessRuleTraceLogSearchRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('debugMode', $data)) {
                $object->setDebugMode($data['debugMode']);
            }
            if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
                $values = [];
                foreach ($data['aggregationFilters'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AggregationFilter', 'json', $context);
                }
                $object->setAggregationFilters($values);
            }
            elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
                $object->setAggregationFilters(null);
            }
            if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
                $values_1 = [];
                foreach ($data['aggregators'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregators($values_1);
            }
            elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
                $object->setAggregators(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
            }
            if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
                $object->setPageToken($data['pageToken']);
            }
            elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
                $object->setPageToken(null);
            }
            if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
                $object->setSearchString($data['searchString']);
            }
            elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
                $object->setSearchString(null);
            }
            if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
                $values_2 = [];
                foreach ($data['searchBehaviors'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setSearchBehaviors($values_2);
            }
            elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
                $object->setSearchBehaviors(null);
            }
            if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
                $values_3 = [];
                foreach ($data['sort'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
                }
                $object->setSort($values_3);
            }
            elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
                $object->setSort(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['debugMode'] = $object->getDebugMode();
            if ($object->isInitialized('aggregationFilters') && null !== $object->getAggregationFilters()) {
                $values = [];
                foreach ($object->getAggregationFilters() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['aggregationFilters'] = $values;
            }
            if ($object->isInitialized('aggregators') && null !== $object->getAggregators()) {
                $values_1 = [];
                foreach ($object->getAggregators() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['aggregators'] = $values_1;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            $data['limit'] = $object->getLimit();
            if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
                $data['pageToken'] = $object->getPageToken();
            }
            if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
                $data['searchString'] = $object->getSearchString();
            }
            if ($object->isInitialized('searchBehaviors') && null !== $object->getSearchBehaviors()) {
                $values_2 = [];
                foreach ($object->getSearchBehaviors() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['searchBehaviors'] = $values_2;
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $values_3 = [];
                foreach ($object->getSort() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['sort'] = $values_3;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\BusinessRuleTraceLogSearchRequest' => false];
        }
    }
}