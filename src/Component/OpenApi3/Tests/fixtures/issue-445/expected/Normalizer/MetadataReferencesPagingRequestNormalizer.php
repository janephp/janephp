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
class MetadataReferencesPagingRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\MetadataReferencesPagingRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\MetadataReferencesPagingRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\MetadataReferencesPagingRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('fetchReferencedByRestrictedItem', $data) && \is_int($data['fetchReferencedByRestrictedItem'])) {
            $data['fetchReferencedByRestrictedItem'] = (bool) $data['fetchReferencedByRestrictedItem'];
        }
        if (\array_key_exists('limit', $data)) {
            $object->limit = $data['limit'];
            unset($data['limit']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->pageToken = $data['pageToken'];
            unset($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->pageToken = null;
            unset($data['pageToken']);
        }
        if (\array_key_exists('fetchReferencedByRestrictedItem', $data)) {
            $object->fetchReferencedByRestrictedItem = $data['fetchReferencedByRestrictedItem'];
            unset($data['fetchReferencedByRestrictedItem']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['limit'] = $data->limit ?? null;
        if (array_key_exists('pageToken', get_object_vars($data)) && null !== ($data->pageToken ?? null)) {
            $dataArray['pageToken'] = $data->pageToken ?? null;
        }
        if (array_key_exists('fetchReferencedByRestrictedItem', get_object_vars($data)) && null !== ($data->fetchReferencedByRestrictedItem ?? null)) {
            $dataArray['fetchReferencedByRestrictedItem'] = $data->fetchReferencedByRestrictedItem ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\MetadataReferencesPagingRequest::class => false];
    }
}