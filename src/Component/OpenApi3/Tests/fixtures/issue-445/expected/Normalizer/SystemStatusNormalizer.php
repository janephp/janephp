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
class SystemStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SystemStatus::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SystemStatus::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\SystemStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('searchIndicesStatus', $data) && $data['searchIndicesStatus'] !== null) {
            $values = [];
            foreach ($data['searchIndicesStatus'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\StatusOfSearchIndexState::class, 'json', $context);
            }
            $object->searchIndicesStatus = $values;
        }
        elseif (\array_key_exists('searchIndicesStatus', $data)) {
            $object->searchIndicesStatus = null;
        }
        if (\array_key_exists('displayValuesStatus', $data) && $data['displayValuesStatus'] !== null) {
            $values_1 = [];
            foreach ($data['displayValuesStatus'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\StatusOfDisplayValuesState::class, 'json', $context);
            }
            $object->displayValuesStatus = $values_1;
        }
        elseif (\array_key_exists('displayValuesStatus', $data)) {
            $object->displayValuesStatus = null;
        }
        if (\array_key_exists('metadataStatus', $data) && $data['metadataStatus'] !== null) {
            $values_2 = [];
            foreach ($data['metadataStatus'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\StatusOfMetadataState::class, 'json', $context);
            }
            $object->metadataStatus = $values_2;
        }
        elseif (\array_key_exists('metadataStatus', $data)) {
            $object->metadataStatus = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('searchIndicesStatus', get_object_vars($data)) && null !== ($data->searchIndicesStatus ?? null)) {
            $values = [];
            foreach ($data->searchIndicesStatus as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['searchIndicesStatus'] = $values;
        }
        if (array_key_exists('displayValuesStatus', get_object_vars($data)) && null !== ($data->displayValuesStatus ?? null)) {
            $values_1 = [];
            foreach ($data->displayValuesStatus as $value_1) {
                $normalized_1 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_1) ? new \PicturePark\API\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['displayValuesStatus'] = $values_1;
        }
        if (array_key_exists('metadataStatus', get_object_vars($data)) && null !== ($data->metadataStatus ?? null)) {
            $values_2 = [];
            foreach ($data->metadataStatus as $value_2) {
                $normalized_2 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized_2) ? new \PicturePark\API\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['metadataStatus'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SystemStatus::class => false];
    }
}