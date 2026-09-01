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
class MetadataReferenceResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\MetadataReferenceResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\MetadataReferenceResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\MetadataReferenceResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isReferencedByRestrictedItem', $data) && \is_int($data['isReferencedByRestrictedItem'])) {
            $data['isReferencedByRestrictedItem'] = (bool) $data['isReferencedByRestrictedItem'];
        }
        if (\array_key_exists('totalResults', $data)) {
            $object->totalResults = $data['totalResults'];
            unset($data['totalResults']);
        }
        if (\array_key_exists('results', $data)) {
            $values = [];
            foreach ($data['results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\MetadataReference::class, 'json', $context);
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
        if (\array_key_exists('isReferencedByRestrictedItem', $data) && $data['isReferencedByRestrictedItem'] !== null) {
            $object->isReferencedByRestrictedItem = $data['isReferencedByRestrictedItem'];
            unset($data['isReferencedByRestrictedItem']);
        }
        elseif (\array_key_exists('isReferencedByRestrictedItem', $data) && $data['isReferencedByRestrictedItem'] === null) {
            $object->isReferencedByRestrictedItem = null;
            unset($data['isReferencedByRestrictedItem']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if (array_key_exists('isReferencedByRestrictedItem', get_object_vars($data)) && null !== ($data->isReferencedByRestrictedItem ?? null)) {
            $dataArray['isReferencedByRestrictedItem'] = $data->isReferencedByRestrictedItem ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\MetadataReferenceResult::class => false];
    }
}