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
    class ChannelCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ChannelCreateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ChannelCreateRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ChannelCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
                $values = [];
                foreach ($data['sort'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
                }
                $object->setSort($values);
            }
            elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
                $object->setSort(null);
            }
            if (\array_key_exists('sortOrder', $data)) {
                $object->setSortOrder($data['sortOrder']);
            }
            if (\array_key_exists('sortFields', $data)) {
                $values_1 = [];
                foreach ($data['sortFields'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\SortField', 'json', $context);
                }
                $object->setSortFields($values_1);
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
            }
            if (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] !== null) {
                $object->setSearchIndexId($data['searchIndexId']);
            }
            elseif (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] === null) {
                $object->setSearchIndexId(null);
            }
            if (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] !== null) {
                $values_2 = [];
                foreach ($data['grantedUserRoleIds'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setGrantedUserRoleIds($values_2);
            }
            elseif (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] === null) {
                $object->setGrantedUserRoleIds(null);
            }
            if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
                $values_3 = [];
                foreach ($data['aggregations'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregations($values_3);
            }
            elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
                $object->setAggregations(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] !== null) {
                $values_4 = [];
                foreach ($data['extendedSimpleSearchFields'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setExtendedSimpleSearchFields($values_4);
            }
            elseif (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] === null) {
                $object->setExtendedSimpleSearchFields(null);
            }
            if (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] !== null) {
                $object->setMissingResultsDisplayPatterns($data['missingResultsDisplayPatterns']);
            }
            elseif (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] === null) {
                $object->setMissingResultsDisplayPatterns(null);
            }
            if (\array_key_exists('viewForAll', $data)) {
                $object->setViewForAll($data['viewForAll']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $values = [];
                foreach ($object->getSort() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sort'] = $values;
            }
            $data['sortOrder'] = $object->getSortOrder();
            $values_1 = [];
            foreach ($object->getSortFields() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['sortFields'] = $values_1;
            $data['names'] = $object->getNames();
            if ($object->isInitialized('searchIndexId') && null !== $object->getSearchIndexId()) {
                $data['searchIndexId'] = $object->getSearchIndexId();
            }
            if ($object->isInitialized('grantedUserRoleIds') && null !== $object->getGrantedUserRoleIds()) {
                $values_2 = [];
                foreach ($object->getGrantedUserRoleIds() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['grantedUserRoleIds'] = $values_2;
            }
            if ($object->isInitialized('aggregations') && null !== $object->getAggregations()) {
                $values_3 = [];
                foreach ($object->getAggregations() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['aggregations'] = $values_3;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            if ($object->isInitialized('extendedSimpleSearchFields') && null !== $object->getExtendedSimpleSearchFields()) {
                $values_4 = [];
                foreach ($object->getExtendedSimpleSearchFields() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['extendedSimpleSearchFields'] = $values_4;
            }
            if ($object->isInitialized('missingResultsDisplayPatterns') && null !== $object->getMissingResultsDisplayPatterns()) {
                $data['missingResultsDisplayPatterns'] = $object->getMissingResultsDisplayPatterns();
            }
            $data['viewForAll'] = $object->getViewForAll();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ChannelCreateRequest' => false];
        }
    }
} else {
    class ChannelCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ChannelCreateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ChannelCreateRequest';
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
            $object = new \PicturePark\API\Model\ChannelCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
                $values = [];
                foreach ($data['sort'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
                }
                $object->setSort($values);
            }
            elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
                $object->setSort(null);
            }
            if (\array_key_exists('sortOrder', $data)) {
                $object->setSortOrder($data['sortOrder']);
            }
            if (\array_key_exists('sortFields', $data)) {
                $values_1 = [];
                foreach ($data['sortFields'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\SortField', 'json', $context);
                }
                $object->setSortFields($values_1);
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
            }
            if (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] !== null) {
                $object->setSearchIndexId($data['searchIndexId']);
            }
            elseif (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] === null) {
                $object->setSearchIndexId(null);
            }
            if (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] !== null) {
                $values_2 = [];
                foreach ($data['grantedUserRoleIds'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setGrantedUserRoleIds($values_2);
            }
            elseif (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] === null) {
                $object->setGrantedUserRoleIds(null);
            }
            if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
                $values_3 = [];
                foreach ($data['aggregations'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
                }
                $object->setAggregations($values_3);
            }
            elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
                $object->setAggregations(null);
            }
            if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
                $object->setFilter($data['filter']);
            }
            elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] !== null) {
                $values_4 = [];
                foreach ($data['extendedSimpleSearchFields'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setExtendedSimpleSearchFields($values_4);
            }
            elseif (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] === null) {
                $object->setExtendedSimpleSearchFields(null);
            }
            if (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] !== null) {
                $object->setMissingResultsDisplayPatterns($data['missingResultsDisplayPatterns']);
            }
            elseif (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] === null) {
                $object->setMissingResultsDisplayPatterns(null);
            }
            if (\array_key_exists('viewForAll', $data)) {
                $object->setViewForAll($data['viewForAll']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('sort') && null !== $object->getSort()) {
                $values = [];
                foreach ($object->getSort() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sort'] = $values;
            }
            $data['sortOrder'] = $object->getSortOrder();
            $values_1 = [];
            foreach ($object->getSortFields() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['sortFields'] = $values_1;
            $data['names'] = $object->getNames();
            if ($object->isInitialized('searchIndexId') && null !== $object->getSearchIndexId()) {
                $data['searchIndexId'] = $object->getSearchIndexId();
            }
            if ($object->isInitialized('grantedUserRoleIds') && null !== $object->getGrantedUserRoleIds()) {
                $values_2 = [];
                foreach ($object->getGrantedUserRoleIds() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['grantedUserRoleIds'] = $values_2;
            }
            if ($object->isInitialized('aggregations') && null !== $object->getAggregations()) {
                $values_3 = [];
                foreach ($object->getAggregations() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['aggregations'] = $values_3;
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['filter'] = $object->getFilter();
            }
            if ($object->isInitialized('extendedSimpleSearchFields') && null !== $object->getExtendedSimpleSearchFields()) {
                $values_4 = [];
                foreach ($object->getExtendedSimpleSearchFields() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['extendedSimpleSearchFields'] = $values_4;
            }
            if ($object->isInitialized('missingResultsDisplayPatterns') && null !== $object->getMissingResultsDisplayPatterns()) {
                $data['missingResultsDisplayPatterns'] = $object->getMissingResultsDisplayPatterns();
            }
            $data['viewForAll'] = $object->getViewForAll();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ChannelCreateRequest' => false];
        }
    }
}