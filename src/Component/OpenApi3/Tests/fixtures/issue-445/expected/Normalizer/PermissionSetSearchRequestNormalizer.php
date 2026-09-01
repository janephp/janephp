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
        $object = new \PicturePark\API\Model\PermissionSetSearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('debugMode', $data) && \is_int($data['debugMode'])) {
            $data['debugMode'] = (bool) $data['debugMode'];
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->searchString = $data['searchString'];
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->searchString = null;
        }
        if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
            $values = [];
            foreach ($data['searchBehaviors'] as $value) {
                $values[] = $value;
            }
            $object->searchBehaviors = $values;
        }
        elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
            $object->searchBehaviors = null;
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_1 = [];
            foreach ($data['sort'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->sort = $values_1;
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->sort = null;
        }
        if (\array_key_exists('limit', $data)) {
            $object->limit = $data['limit'];
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->pageToken = $data['pageToken'];
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->pageToken = null;
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_2 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_2 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value_2;
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
        }
        if (\array_key_exists('rightFilter', $data) && $data['rightFilter'] !== null) {
            $value_3 = $data['rightFilter'];
            if (is_string($data['rightFilter'])) {
                $value_3 = $data['rightFilter'];
            }
            $object->rightFilter = $value_3;
        }
        elseif (\array_key_exists('rightFilter', $data) && $data['rightFilter'] === null) {
            $object->rightFilter = null;
        }
        if (\array_key_exists('debugMode', $data)) {
            $object->debugMode = $data['debugMode'];
        }
        if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
            $values_2 = [];
            foreach ($data['searchLanguages'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->searchLanguages = $values_2;
        }
        elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
            $object->searchLanguages = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('searchString', get_object_vars($data)) && null !== ($data->searchString ?? null)) {
            $dataArray['searchString'] = $data->searchString ?? null;
        }
        if (array_key_exists('searchBehaviors', get_object_vars($data)) && null !== ($data->searchBehaviors ?? null)) {
            $values = [];
            foreach ($data->searchBehaviors ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['searchBehaviors'] = $values;
        }
        if (array_key_exists('sort', get_object_vars($data)) && null !== ($data->sort ?? null)) {
            $values_1 = [];
            foreach ($data->sort ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['sort'] = $values_1;
        }
        $dataArray['limit'] = $data->limit ?? null;
        if (array_key_exists('pageToken', get_object_vars($data)) && null !== ($data->pageToken ?? null)) {
            $dataArray['pageToken'] = $data->pageToken ?? null;
        }
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value_2 = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value_2 = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value_2;
        }
        if (array_key_exists('rightFilter', get_object_vars($data)) && null !== ($data->rightFilter ?? null)) {
            $value_3 = $data->rightFilter ?? null;
            if (is_string($data->rightFilter ?? null)) {
                $value_3 = $data->rightFilter ?? null;
            }
            $dataArray['rightFilter'] = $value_3;
        }
        $dataArray['debugMode'] = $data->debugMode ?? null;
        if (array_key_exists('searchLanguages', get_object_vars($data)) && null !== ($data->searchLanguages ?? null)) {
            $values_2 = [];
            foreach ($data->searchLanguages ?? null as $value_4) {
                $values_2[] = $value_4;
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