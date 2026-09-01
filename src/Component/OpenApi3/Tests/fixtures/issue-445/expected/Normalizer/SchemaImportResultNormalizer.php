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
class SchemaImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SchemaImportResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SchemaImportResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\SchemaImportResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('importedSchemaCount', $data)) {
            $object->importedSchemaCount = $data['importedSchemaCount'];
        }
        if (\array_key_exists('skippedSchemaCount', $data)) {
            $object->skippedSchemaCount = $data['skippedSchemaCount'];
        }
        if (\array_key_exists('totalSchemaCount', $data)) {
            $object->totalSchemaCount = $data['totalSchemaCount'];
        }
        if (\array_key_exists('skippedSchemaIds', $data) && $data['skippedSchemaIds'] !== null) {
            $values = [];
            foreach ($data['skippedSchemaIds'] as $value) {
                $values[] = $value;
            }
            $object->skippedSchemaIds = $values;
        }
        elseif (\array_key_exists('skippedSchemaIds', $data) && $data['skippedSchemaIds'] === null) {
            $object->skippedSchemaIds = null;
        }
        if (\array_key_exists('importedSchemaIds', $data) && $data['importedSchemaIds'] !== null) {
            $values_1 = [];
            foreach ($data['importedSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->importedSchemaIds = $values_1;
        }
        elseif (\array_key_exists('importedSchemaIds', $data) && $data['importedSchemaIds'] === null) {
            $object->importedSchemaIds = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['importedSchemaCount'] = $data->importedSchemaCount ?? null;
        $dataArray['skippedSchemaCount'] = $data->skippedSchemaCount ?? null;
        $dataArray['totalSchemaCount'] = $data->totalSchemaCount ?? null;
        if (array_key_exists('skippedSchemaIds', get_object_vars($data)) && null !== ($data->skippedSchemaIds ?? null)) {
            $values = [];
            foreach ($data->skippedSchemaIds ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['skippedSchemaIds'] = $values;
        }
        if (array_key_exists('importedSchemaIds', get_object_vars($data)) && null !== ($data->importedSchemaIds ?? null)) {
            $values_1 = [];
            foreach ($data->importedSchemaIds ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['importedSchemaIds'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SchemaImportResult::class => false];
    }
}