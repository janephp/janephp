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
            $object->id = $data['id'];
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values = [];
            foreach ($data['sort'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->sort = $values;
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
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
            $value_2 = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values_2 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_3) {
                    $values_2[$key] = $value_3;
                }
                $value_2 = $values_2;
            }
            $object->names = $value_2;
        }
        if (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] !== null) {
            $object->searchIndexId = $data['searchIndexId'];
        }
        elseif (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] === null) {
            $object->searchIndexId = null;
        }
        if (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] !== null) {
            $values_3 = [];
            foreach ($data['grantedUserRoleIds'] as $value_4) {
                $values_3[] = $value_4;
            }
            $object->grantedUserRoleIds = $values_3;
        }
        elseif (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] === null) {
            $object->grantedUserRoleIds = null;
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_4 = [];
            foreach ($data['aggregations'] as $value_5) {
                $values_4[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->aggregations = $values_4;
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->aggregations = null;
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_6 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_6 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value_6;
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
        }
        if (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] !== null) {
            $values_5 = [];
            foreach ($data['extendedSimpleSearchFields'] as $value_7) {
                $values_5[] = $value_7;
            }
            $object->extendedSimpleSearchFields = $values_5;
        }
        elseif (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] === null) {
            $object->extendedSimpleSearchFields = null;
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
            $object->missingResultsDisplayPatterns = $value_8;
        }
        elseif (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] === null) {
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('sort', get_object_vars($data)) && null !== ($data->sort ?? null)) {
            $values = [];
            foreach ($data->sort ?? null as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['sort'] = $values;
        }
        $dataArray['sortOrder'] = $data->sortOrder ?? null;
        $values_1 = [];
        foreach ($data->sortFields ?? null as $value_1) {
            $values_1[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['sortFields'] = $values_1;
        $value_2 = $data->names ?? null;
        if (is_object($data->names ?? null)) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->names ?? null as $key => $value_3) {
                $values_2[$key] = $value_3;
            }
            $value_2 = $values_2;
        }
        $dataArray['names'] = $value_2;
        if (array_key_exists('searchIndexId', get_object_vars($data)) && null !== ($data->searchIndexId ?? null)) {
            $dataArray['searchIndexId'] = $data->searchIndexId ?? null;
        }
        if (array_key_exists('grantedUserRoleIds', get_object_vars($data)) && null !== ($data->grantedUserRoleIds ?? null)) {
            $values_3 = [];
            foreach ($data->grantedUserRoleIds ?? null as $value_4) {
                $values_3[] = $value_4;
            }
            $dataArray['grantedUserRoleIds'] = $values_3;
        }
        if (array_key_exists('aggregations', get_object_vars($data)) && null !== ($data->aggregations ?? null)) {
            $values_4 = [];
            foreach ($data->aggregations ?? null as $value_5) {
                $values_4[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['aggregations'] = $values_4;
        }
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value_6 = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value_6 = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value_6;
        }
        if (array_key_exists('extendedSimpleSearchFields', get_object_vars($data)) && null !== ($data->extendedSimpleSearchFields ?? null)) {
            $values_5 = [];
            foreach ($data->extendedSimpleSearchFields ?? null as $value_7) {
                $values_5[] = $value_7;
            }
            $dataArray['extendedSimpleSearchFields'] = $values_5;
        }
        if (array_key_exists('missingResultsDisplayPatterns', get_object_vars($data)) && null !== ($data->missingResultsDisplayPatterns ?? null)) {
            $value_8 = $data->missingResultsDisplayPatterns ?? null;
            if (is_object($data->missingResultsDisplayPatterns ?? null)) {
                $values_6 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->missingResultsDisplayPatterns ?? null as $key_1 => $value_9) {
                    $values_6[$key_1] = $value_9;
                }
                $value_8 = $values_6;
            }
            $dataArray['missingResultsDisplayPatterns'] = $value_8;
        }
        $dataArray['viewForAll'] = $data->viewForAll ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ChannelCreateRequest::class => false];
    }
}