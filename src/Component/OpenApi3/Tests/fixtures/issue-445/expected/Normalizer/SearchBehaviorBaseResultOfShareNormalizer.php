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
class SearchBehaviorBaseResultOfShareNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SearchBehaviorBaseResultOfShare::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SearchBehaviorBaseResultOfShare::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\SearchBehaviorBaseResultOfShare();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isSearchStringRewritten', $data) && \is_int($data['isSearchStringRewritten'])) {
            $data['isSearchStringRewritten'] = (bool) $data['isSearchStringRewritten'];
        }
        if (\array_key_exists('totalResults', $data)) {
            $object->totalResults = $data['totalResults'];
            unset($data['totalResults']);
        }
        if (\array_key_exists('results', $data)) {
            $values = [];
            foreach ($data['results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\Share::class, 'json', $context);
            }
            $object->results = $values;
            unset($data['results']);
        }
        if (\array_key_exists('elapsedMilliseconds', $data)) {
            $object->elapsedMilliseconds = $data['elapsedMilliseconds'];
            unset($data['elapsedMilliseconds']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->pageToken = $data['pageToken'];
            unset($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->pageToken = null;
            unset($data['pageToken']);
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->searchString = $data['searchString'];
            unset($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->searchString = null;
            unset($data['searchString']);
        }
        if (\array_key_exists('isSearchStringRewritten', $data)) {
            $object->isSearchStringRewritten = $data['isSearchStringRewritten'];
            unset($data['isSearchStringRewritten']);
        }
        if (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] !== null) {
            $values_1 = [];
            foreach ($data['queryDebugInformation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\QueryDebugInformation::class, 'json', $context);
            }
            $object->queryDebugInformation = $values_1;
            unset($data['queryDebugInformation']);
        }
        elseif (\array_key_exists('queryDebugInformation', $data) && $data['queryDebugInformation'] === null) {
            $object->queryDebugInformation = null;
            unset($data['queryDebugInformation']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['totalResults'] = $data->totalResults ?? null;
        $values = [];
        foreach ($data->results ?? null as $value) {
            $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['results'] = $values;
        $dataArray['elapsedMilliseconds'] = $data->elapsedMilliseconds ?? null;
        if (array_key_exists('pageToken', get_object_vars($data)) && null !== ($data->pageToken ?? null)) {
            $dataArray['pageToken'] = $data->pageToken ?? null;
        }
        if (array_key_exists('searchString', get_object_vars($data)) && null !== ($data->searchString ?? null)) {
            $dataArray['searchString'] = $data->searchString ?? null;
        }
        if (array_key_exists('isSearchStringRewritten', get_object_vars($data)) && null !== ($data->isSearchStringRewritten ?? null)) {
            $dataArray['isSearchStringRewritten'] = $data->isSearchStringRewritten ?? null;
        }
        if (array_key_exists('queryDebugInformation', get_object_vars($data)) && null !== ($data->queryDebugInformation ?? null)) {
            $values_1 = [];
            foreach ($data->queryDebugInformation ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['queryDebugInformation'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SearchBehaviorBaseResultOfShare::class => false];
    }
}