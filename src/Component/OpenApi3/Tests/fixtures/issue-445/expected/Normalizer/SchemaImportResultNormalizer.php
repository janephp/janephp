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
            $object->setImportedSchemaCount($data['importedSchemaCount']);
        }
        if (\array_key_exists('skippedSchemaCount', $data)) {
            $object->setSkippedSchemaCount($data['skippedSchemaCount']);
        }
        if (\array_key_exists('totalSchemaCount', $data)) {
            $object->setTotalSchemaCount($data['totalSchemaCount']);
        }
        if (\array_key_exists('skippedSchemaIds', $data) && $data['skippedSchemaIds'] !== null) {
            $values = [];
            foreach ($data['skippedSchemaIds'] as $value) {
                $values[] = $value;
            }
            $object->setSkippedSchemaIds($values);
        }
        elseif (\array_key_exists('skippedSchemaIds', $data) && $data['skippedSchemaIds'] === null) {
            $object->setSkippedSchemaIds(null);
        }
        if (\array_key_exists('importedSchemaIds', $data) && $data['importedSchemaIds'] !== null) {
            $values_1 = [];
            foreach ($data['importedSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setImportedSchemaIds($values_1);
        }
        elseif (\array_key_exists('importedSchemaIds', $data) && $data['importedSchemaIds'] === null) {
            $object->setImportedSchemaIds(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['importedSchemaCount'] = $data->getImportedSchemaCount();
        $dataArray['skippedSchemaCount'] = $data->getSkippedSchemaCount();
        $dataArray['totalSchemaCount'] = $data->getTotalSchemaCount();
        if ($data->isInitialized('skippedSchemaIds')) {
            $values = [];
            foreach ($data->getSkippedSchemaIds() as $value) {
                $values[] = $value;
            }
            $dataArray['skippedSchemaIds'] = $values;
        }
        if ($data->isInitialized('importedSchemaIds')) {
            $values_1 = [];
            foreach ($data->getImportedSchemaIds() as $value_1) {
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