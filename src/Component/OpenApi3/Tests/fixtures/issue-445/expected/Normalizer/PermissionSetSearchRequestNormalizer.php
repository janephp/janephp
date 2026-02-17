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
class PermissionSetSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\PermissionSetSearchRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\PermissionSetSearchRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\PermissionSetSearchRequest();
        if (\array_key_exists('debugMode', $data) && \is_int($data['debugMode'])) {
            $data['debugMode'] = (bool) $data['debugMode'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->setSearchString(null);
        }
        if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
            $values = [];
            foreach ($data['searchBehaviors'] as $value) {
                $values[] = $value;
            }
            $object->setSearchBehaviors($values);
        }
        elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
            $object->setSearchBehaviors(null);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_1 = [];
            foreach ($data['sort'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->setSort($values_1);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
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
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('rightFilter', $data) && $data['rightFilter'] !== null) {
            $object->setRightFilter($data['rightFilter']);
        }
        elseif (\array_key_exists('rightFilter', $data) && $data['rightFilter'] === null) {
            $object->setRightFilter(null);
        }
        if (\array_key_exists('debugMode', $data)) {
            $object->setDebugMode($data['debugMode']);
        }
        if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
            $values_2 = [];
            foreach ($data['searchLanguages'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSearchLanguages($values_2);
        }
        elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
            $object->setSearchLanguages(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('searchString')) {
            $dataArray['searchString'] = $data->getSearchString();
        }
        if ($data->isInitialized('searchBehaviors')) {
            $values = [];
            foreach ($data->getSearchBehaviors() as $value) {
                $values[] = $value;
            }
            $dataArray['searchBehaviors'] = $values;
        }
        if ($data->isInitialized('sort')) {
            $values_1 = [];
            foreach ($data->getSort() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['sort'] = $values_1;
        }
        $dataArray['limit'] = $data->getLimit();
        if ($data->isInitialized('pageToken')) {
            $dataArray['pageToken'] = $data->getPageToken();
        }
        if ($data->isInitialized('filter')) {
            $dataArray['filter'] = $data->getFilter();
        }
        if ($data->isInitialized('rightFilter')) {
            $dataArray['rightFilter'] = $data->getRightFilter();
        }
        $dataArray['debugMode'] = $data->getDebugMode();
        if ($data->isInitialized('searchLanguages')) {
            $values_2 = [];
            foreach ($data->getSearchLanguages() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['searchLanguages'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\PermissionSetSearchRequest::class => false];
    }
}