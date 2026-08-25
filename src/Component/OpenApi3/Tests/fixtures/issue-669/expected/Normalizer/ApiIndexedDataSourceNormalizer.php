<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApiIndexedDataSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiIndexedDataSource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiIndexedDataSource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiIndexedDataSource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('completed_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completed_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['completed_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCompletedAt($date);
            unset($data['completed_at']);
        }
        if (\array_key_exists('data_source_uuid', $data)) {
            $object->setDataSourceUuid($data['data_source_uuid']);
            unset($data['data_source_uuid']);
        }
        if (\array_key_exists('error_details', $data)) {
            $object->setErrorDetails($data['error_details']);
            unset($data['error_details']);
        }
        if (\array_key_exists('error_msg', $data)) {
            $object->setErrorMsg($data['error_msg']);
            unset($data['error_msg']);
        }
        if (\array_key_exists('failed_item_count', $data)) {
            $object->setFailedItemCount($data['failed_item_count']);
            unset($data['failed_item_count']);
        }
        if (\array_key_exists('indexed_file_count', $data)) {
            $object->setIndexedFileCount($data['indexed_file_count']);
            unset($data['indexed_file_count']);
        }
        if (\array_key_exists('indexed_item_count', $data)) {
            $object->setIndexedItemCount($data['indexed_item_count']);
            unset($data['indexed_item_count']);
        }
        if (\array_key_exists('removed_item_count', $data)) {
            $object->setRemovedItemCount($data['removed_item_count']);
            unset($data['removed_item_count']);
        }
        if (\array_key_exists('skipped_item_count', $data)) {
            $object->setSkippedItemCount($data['skipped_item_count']);
            unset($data['skipped_item_count']);
        }
        if (\array_key_exists('started_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['started_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setStartedAt($date_1);
            unset($data['started_at']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('total_bytes', $data)) {
            $object->setTotalBytes($data['total_bytes']);
            unset($data['total_bytes']);
        }
        if (\array_key_exists('total_bytes_indexed', $data)) {
            $object->setTotalBytesIndexed($data['total_bytes_indexed']);
            unset($data['total_bytes_indexed']);
        }
        if (\array_key_exists('total_file_count', $data)) {
            $object->setTotalFileCount($data['total_file_count']);
            unset($data['total_file_count']);
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
        if ($data->isInitialized('completedAt') && null !== $data->getCompletedAt()) {
            $dataArray['completed_at'] = $data->getCompletedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dataSourceUuid') && null !== $data->getDataSourceUuid()) {
            $dataArray['data_source_uuid'] = $data->getDataSourceUuid();
        }
        if ($data->isInitialized('errorDetails') && null !== $data->getErrorDetails()) {
            $dataArray['error_details'] = $data->getErrorDetails();
        }
        if ($data->isInitialized('errorMsg') && null !== $data->getErrorMsg()) {
            $dataArray['error_msg'] = $data->getErrorMsg();
        }
        if ($data->isInitialized('failedItemCount') && null !== $data->getFailedItemCount()) {
            $dataArray['failed_item_count'] = $data->getFailedItemCount();
        }
        if ($data->isInitialized('indexedFileCount') && null !== $data->getIndexedFileCount()) {
            $dataArray['indexed_file_count'] = $data->getIndexedFileCount();
        }
        if ($data->isInitialized('indexedItemCount') && null !== $data->getIndexedItemCount()) {
            $dataArray['indexed_item_count'] = $data->getIndexedItemCount();
        }
        if ($data->isInitialized('removedItemCount') && null !== $data->getRemovedItemCount()) {
            $dataArray['removed_item_count'] = $data->getRemovedItemCount();
        }
        if ($data->isInitialized('skippedItemCount') && null !== $data->getSkippedItemCount()) {
            $dataArray['skipped_item_count'] = $data->getSkippedItemCount();
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['started_at'] = $data->getStartedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('totalBytes') && null !== $data->getTotalBytes()) {
            $dataArray['total_bytes'] = $data->getTotalBytes();
        }
        if ($data->isInitialized('totalBytesIndexed') && null !== $data->getTotalBytesIndexed()) {
            $dataArray['total_bytes_indexed'] = $data->getTotalBytesIndexed();
        }
        if ($data->isInitialized('totalFileCount') && null !== $data->getTotalFileCount()) {
            $dataArray['total_file_count'] = $data->getTotalFileCount();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiIndexedDataSource::class => false];
    }
}