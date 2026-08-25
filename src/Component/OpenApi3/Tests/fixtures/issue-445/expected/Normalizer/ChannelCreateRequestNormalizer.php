<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ChannelCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ChannelCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ChannelCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ChannelCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('viewForAll', $data) && \is_int($data['viewForAll'])) {
            $data['viewForAll'] = (bool) $data['viewForAll'];
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
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\SortInfo::class, 'json', $context);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\SortField::class, 'json', $context);
            }
            $object->setSortFields($values_1);
        }
        if (\array_key_exists('names', $data)) {
            $value_2 = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values_2 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_3) {
                    $values_2[$key] = $value_3;
                }
                $value_2 = $values_2;
            }
            $object->setNames($value_2);
        }
        if (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] !== null) {
            $object->setSearchIndexId($data['searchIndexId']);
        }
        elseif (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] === null) {
            $object->setSearchIndexId(null);
        }
        if (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] !== null) {
            $values_3 = [];
            foreach ($data['grantedUserRoleIds'] as $value_4) {
                $values_3[] = $value_4;
            }
            $object->setGrantedUserRoleIds($values_3);
        }
        elseif (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] === null) {
            $object->setGrantedUserRoleIds(null);
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_4 = [];
            foreach ($data['aggregations'] as $value_5) {
                $values_4[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregations($values_4);
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->setAggregations(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_6 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_6 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->setFilter($value_6);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] !== null) {
            $values_5 = [];
            foreach ($data['extendedSimpleSearchFields'] as $value_7) {
                $values_5[] = $value_7;
            }
            $object->setExtendedSimpleSearchFields($values_5);
        }
        elseif (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] === null) {
            $object->setExtendedSimpleSearchFields(null);
        }
        if (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] !== null) {
            $value_8 = $data['missingResultsDisplayPatterns'];
            if (is_array($data['missingResultsDisplayPatterns']) && $this->isOnlyNumericKeys($data['missingResultsDisplayPatterns'])) {
                $values_6 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['missingResultsDisplayPatterns'] as $key_1 => $value_9) {
                    $values_6[$key_1] = $value_9;
                }
                $value_8 = $values_6;
            }
            $object->setMissingResultsDisplayPatterns($value_8);
        }
        elseif (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] === null) {
            $object->setMissingResultsDisplayPatterns(null);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('sort') && null !== $data->getSort()) {
            $values = [];
            foreach ($data->getSort() as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['sort'] = $values;
        }
        $dataArray['sortOrder'] = $data->getSortOrder();
        $values_1 = [];
        foreach ($data->getSortFields() as $value_1) {
            $values_1[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['sortFields'] = $values_1;
        $value_2 = $data->getNames();
        if (is_object($data->getNames())) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getNames() as $key => $value_3) {
                $values_2[$key] = $value_3;
            }
            $value_2 = $values_2;
        }
        $dataArray['names'] = $value_2;
        if ($data->isInitialized('searchIndexId') && null !== $data->getSearchIndexId()) {
            $dataArray['searchIndexId'] = $data->getSearchIndexId();
        }
        if ($data->isInitialized('grantedUserRoleIds') && null !== $data->getGrantedUserRoleIds()) {
            $values_3 = [];
            foreach ($data->getGrantedUserRoleIds() as $value_4) {
                $values_3[] = $value_4;
            }
            $dataArray['grantedUserRoleIds'] = $values_3;
        }
        if ($data->isInitialized('aggregations') && null !== $data->getAggregations()) {
            $values_4 = [];
            foreach ($data->getAggregations() as $value_5) {
                $values_4[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['aggregations'] = $values_4;
        }
        if ($data->isInitialized('filter') && null !== $data->getFilter()) {
            $value_6 = $data->getFilter();
            if (is_object($data->getFilter())) {
                $value_6 = $data->getFilter() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getFilter(), 'json', $context));
            }
            $dataArray['filter'] = $value_6;
        }
        if ($data->isInitialized('extendedSimpleSearchFields') && null !== $data->getExtendedSimpleSearchFields()) {
            $values_5 = [];
            foreach ($data->getExtendedSimpleSearchFields() as $value_7) {
                $values_5[] = $value_7;
            }
            $dataArray['extendedSimpleSearchFields'] = $values_5;
        }
        if ($data->isInitialized('missingResultsDisplayPatterns') && null !== $data->getMissingResultsDisplayPatterns()) {
            $value_8 = $data->getMissingResultsDisplayPatterns();
            if (is_object($data->getMissingResultsDisplayPatterns())) {
                $values_6 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getMissingResultsDisplayPatterns() as $key_1 => $value_9) {
                    $values_6[$key_1] = $value_9;
                }
                $value_8 = $values_6;
            }
            $dataArray['missingResultsDisplayPatterns'] = $value_8;
        }
        $dataArray['viewForAll'] = $data->getViewForAll();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ChannelCreateRequest::class => false];
    }
}