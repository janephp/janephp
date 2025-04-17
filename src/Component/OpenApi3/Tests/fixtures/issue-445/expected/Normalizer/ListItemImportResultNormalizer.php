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
class ListItemImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ListItemImportResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItemImportResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ListItemImportResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('importedListItemCount', $data)) {
            $object->setImportedListItemCount($data['importedListItemCount']);
        }
        if (\array_key_exists('skippedListItemCount', $data)) {
            $object->setSkippedListItemCount($data['skippedListItemCount']);
        }
        if (\array_key_exists('totalListItemCount', $data)) {
            $object->setTotalListItemCount($data['totalListItemCount']);
        }
        if (\array_key_exists('skippedListItemIds', $data) && $data['skippedListItemIds'] !== null) {
            $values = [];
            foreach ($data['skippedListItemIds'] as $value) {
                $values[] = $value;
            }
            $object->setSkippedListItemIds($values);
        }
        elseif (\array_key_exists('skippedListItemIds', $data) && $data['skippedListItemIds'] === null) {
            $object->setSkippedListItemIds(null);
        }
        if (\array_key_exists('importedListItemIds', $data) && $data['importedListItemIds'] !== null) {
            $values_1 = [];
            foreach ($data['importedListItemIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setImportedListItemIds($values_1);
        }
        elseif (\array_key_exists('importedListItemIds', $data) && $data['importedListItemIds'] === null) {
            $object->setImportedListItemIds(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['importedListItemCount'] = $data->getImportedListItemCount();
        $dataArray['skippedListItemCount'] = $data->getSkippedListItemCount();
        $dataArray['totalListItemCount'] = $data->getTotalListItemCount();
        if ($data->isInitialized('skippedListItemIds') && null !== $data->getSkippedListItemIds()) {
            $values = [];
            foreach ($data->getSkippedListItemIds() as $value) {
                $values[] = $value;
            }
            $dataArray['skippedListItemIds'] = $values;
        }
        if ($data->isInitialized('importedListItemIds') && null !== $data->getImportedListItemIds()) {
            $values_1 = [];
            foreach ($data->getImportedListItemIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['importedListItemIds'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ListItemImportResult::class => false];
    }
}