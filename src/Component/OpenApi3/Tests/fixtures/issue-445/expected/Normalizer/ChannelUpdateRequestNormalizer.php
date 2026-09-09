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
class ChannelUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ChannelUpdateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ChannelUpdateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ChannelUpdateRequest();
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
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values = [];
            foreach ($data['sort'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->sort = $values;
        }
        elseif (\array_key_exists('sort', $data)) {
            $object->sort = null;
        }
        if (\array_key_exists('sortOrder', $data)) {
            $object->sortOrder = $data['sortOrder'];
        }
        if (\array_key_exists('sortFields', $data)) {
            $values_1 = [];
            foreach ($data['sortFields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\SortField::class, 'json', $context);
            }
            $object->sortFields = $values_1;
        }
        if (\array_key_exists('names', $data)) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['names'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->names = $values_2;
        }
        if (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] !== null) {
            $object->searchIndexId = $data['searchIndexId'];
        }
        elseif (\array_key_exists('searchIndexId', $data)) {
            $object->searchIndexId = null;
        }
        if (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] !== null) {
            $values_3 = [];
            foreach ($data['grantedUserRoleIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->grantedUserRoleIds = $values_3;
        }
        elseif (\array_key_exists('grantedUserRoleIds', $data)) {
            $object->grantedUserRoleIds = null;
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_4 = [];
            foreach ($data['aggregations'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->aggregations = $values_4;
        }
        elseif (\array_key_exists('aggregations', $data)) {
            $object->aggregations = null;
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_5 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_5 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value_5;
        }
        elseif (\array_key_exists('filter', $data)) {
            $object->filter = null;
        }
        if (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] !== null) {
            $values_5 = [];
            foreach ($data['extendedSimpleSearchFields'] as $value_6) {
                $values_5[] = $value_6;
            }
            $object->extendedSimpleSearchFields = $values_5;
        }
        elseif (\array_key_exists('extendedSimpleSearchFields', $data)) {
            $object->extendedSimpleSearchFields = null;
        }
        if (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] !== null) {
            $value_7 = $data['missingResultsDisplayPatterns'];
            if (is_array($data['missingResultsDisplayPatterns']) && $this->isOnlyNumericKeys($data['missingResultsDisplayPatterns'])) {
                $values_6 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['missingResultsDisplayPatterns'] as $key_1 => $value_8) {
                    $values_6[$key_1] = $value_8;
                }
                $value_7 = $values_6;
            }
            $object->missingResultsDisplayPatterns = $value_7;
        }
        elseif (\array_key_exists('missingResultsDisplayPatterns', $data)) {
            $object->missingResultsDisplayPatterns = null;
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->viewForAll = $data['viewForAll'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('sort', get_object_vars($data)) && null !== ($data->sort ?? null)) {
            $values = [];
            foreach ($data->sort as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['sort'] = $values;
        }
        $dataArray['sortOrder'] = $data->sortOrder;
        $values_1 = [];
        foreach ($data->sortFields as $value_1) {
            $normalized_1 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
            $values_1[] = \is_iterable($normalized_1) ? new \PicturePark\API\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $dataArray['sortFields'] = $values_1;
        $values_2 = new \PicturePark\API\Runtime\JsonObject();
        foreach ($data->names as $key => $value_2) {
            $values_2[$key] = $value_2;
        }
        $dataArray['names'] = $values_2;
        if (array_key_exists('searchIndexId', get_object_vars($data)) && null !== ($data->searchIndexId ?? null)) {
            $dataArray['searchIndexId'] = $data->searchIndexId;
        }
        if (array_key_exists('grantedUserRoleIds', get_object_vars($data)) && null !== ($data->grantedUserRoleIds ?? null)) {
            $values_3 = [];
            foreach ($data->grantedUserRoleIds as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['grantedUserRoleIds'] = $values_3;
        }
        if (array_key_exists('aggregations', get_object_vars($data)) && null !== ($data->aggregations ?? null)) {
            $values_4 = [];
            foreach ($data->aggregations as $value_4) {
                $normalized_2 = $value_4 === null ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[] = \is_iterable($normalized_2) ? new \PicturePark\API\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['aggregations'] = $values_4;
        }
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value_5 = $data->filter;
            if (is_object($data->filter)) {
                $normalized_3 = $this->normalizer->normalize($data->filter, 'json', $context);
                $value_5 = \is_iterable($normalized_3) ? new \PicturePark\API\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['filter'] = $value_5;
        }
        if (array_key_exists('extendedSimpleSearchFields', get_object_vars($data)) && null !== ($data->extendedSimpleSearchFields ?? null)) {
            $values_5 = [];
            foreach ($data->extendedSimpleSearchFields as $value_6) {
                $values_5[] = $value_6;
            }
            $dataArray['extendedSimpleSearchFields'] = $values_5;
        }
        if (array_key_exists('missingResultsDisplayPatterns', get_object_vars($data)) && null !== ($data->missingResultsDisplayPatterns ?? null)) {
            $value_7 = $data->missingResultsDisplayPatterns;
            if (is_object($data->missingResultsDisplayPatterns)) {
                $values_6 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->missingResultsDisplayPatterns as $key_1 => $value_8) {
                    $values_6[$key_1] = $value_8;
                }
                $value_7 = $values_6;
            }
            $dataArray['missingResultsDisplayPatterns'] = $value_7;
        }
        $dataArray['viewForAll'] = $data->viewForAll;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ChannelUpdateRequest::class => false];
    }
}