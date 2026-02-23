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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('schemaImportResult', $data) && $data['schemaImportResult'] !== null) {
            $value = $data['schemaImportResult'];
            if (is_array($data['schemaImportResult']) and isset($data['schemaImportResult']['importedSchemaCount']) and isset($data['schemaImportResult']['skippedSchemaCount']) and isset($data['schemaImportResult']['totalSchemaCount'])) {
                $value = $this->denormalizer->denormalize($data['schemaImportResult'], \PicturePark\API\Model\SchemaImportResult::class, 'json', $context);
            }
            $object->setSchemaImportResult($value);
            unset($data['schemaImportResult']);
        }
        elseif (\array_key_exists('schemaImportResult', $data) && $data['schemaImportResult'] === null) {
            $object->setSchemaImportResult(null);
        }
        if (\array_key_exists('listItemImportResult', $data) && $data['listItemImportResult'] !== null) {
            $value_1 = $data['listItemImportResult'];
            if (is_array($data['listItemImportResult']) and isset($data['listItemImportResult']['importedListItemCount']) and isset($data['listItemImportResult']['skippedListItemCount']) and isset($data['listItemImportResult']['totalListItemCount'])) {
                $value_1 = $this->denormalizer->denormalize($data['listItemImportResult'], \PicturePark\API\Model\ListItemImportResult::class, 'json', $context);
            }
            $object->setListItemImportResult($value_1);
            unset($data['listItemImportResult']);
        }
        elseif (\array_key_exists('listItemImportResult', $data) && $data['listItemImportResult'] === null) {
            $object->setListItemImportResult(null);
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
        if ($data->isInitialized('schemaImportResult')) {
            $value = $data->getSchemaImportResult();
            if (is_object($data->getSchemaImportResult())) {
                $value = $this->normalizer->normalize($data->getSchemaImportResult(), 'json', $context);
            }
            $dataArray['schemaImportResult'] = $value;
        }
        if ($data->isInitialized('listItemImportResult')) {
            $value_1 = $data->getListItemImportResult();
            if (is_object($data->getListItemImportResult())) {
                $value_1 = $this->normalizer->normalize($data->getListItemImportResult(), 'json', $context);
            }
            $dataArray['listItemImportResult'] = $value_1;
        }
        foreach ($data as $key => $value_2) {
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