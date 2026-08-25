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
class BusinessProcessDetailsDataSchemaImportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('schemaImportResult', $data) && $data['schemaImportResult'] !== null) {
            $value = $data['schemaImportResult'];
            if (is_array($data['schemaImportResult']) and \array_key_exists('importedSchemaCount', $data['schemaImportResult']) and \array_key_exists('skippedSchemaCount', $data['schemaImportResult']) and \array_key_exists('totalSchemaCount', $data['schemaImportResult'])) {
                $value = $this->denormalizer->denormalize($data['schemaImportResult'], \PicturePark\API\Model\SchemaImportResult::class, 'json', $context);
            }
            $object->setSchemaImportResult($value);
            unset($data['schemaImportResult']);
        }
        elseif (\array_key_exists('schemaImportResult', $data) && $data['schemaImportResult'] === null) {
            $object->setSchemaImportResult(null);
            unset($data['schemaImportResult']);
        }
        if (\array_key_exists('listItemImportResult', $data) && $data['listItemImportResult'] !== null) {
            $value_1 = $data['listItemImportResult'];
            if (is_array($data['listItemImportResult']) and \array_key_exists('importedListItemCount', $data['listItemImportResult']) and \array_key_exists('skippedListItemCount', $data['listItemImportResult']) and \array_key_exists('totalListItemCount', $data['listItemImportResult'])) {
                $value_1 = $this->denormalizer->denormalize($data['listItemImportResult'], \PicturePark\API\Model\ListItemImportResult::class, 'json', $context);
            }
            $object->setListItemImportResult($value_1);
            unset($data['listItemImportResult']);
        }
        elseif (\array_key_exists('listItemImportResult', $data) && $data['listItemImportResult'] === null) {
            $object->setListItemImportResult(null);
            unset($data['listItemImportResult']);
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
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('schemaImportResult') && null !== $data->getSchemaImportResult()) {
            $value = $data->getSchemaImportResult();
            if (is_object($data->getSchemaImportResult())) {
                $value = $data->getSchemaImportResult() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getSchemaImportResult(), 'json', $context));
            }
            $dataArray['schemaImportResult'] = $value;
        }
        if ($data->isInitialized('listItemImportResult') && null !== $data->getListItemImportResult()) {
            $value_1 = $data->getListItemImportResult();
            if (is_object($data->getListItemImportResult())) {
                $value_1 = $data->getListItemImportResult() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getListItemImportResult(), 'json', $context));
            }
            $dataArray['listItemImportResult'] = $value_1;
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
        return [\PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport::class => false];
    }
}