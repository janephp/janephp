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
            $object->completedAt = $date;
            unset($data['completed_at']);
        }
        if (\array_key_exists('data_source_uuid', $data)) {
            $object->dataSourceUuid = $data['data_source_uuid'];
            unset($data['data_source_uuid']);
        }
        if (\array_key_exists('error_details', $data)) {
            $object->errorDetails = $data['error_details'];
            unset($data['error_details']);
        }
        if (\array_key_exists('error_msg', $data)) {
            $object->errorMsg = $data['error_msg'];
            unset($data['error_msg']);
        }
        if (\array_key_exists('failed_item_count', $data)) {
            $object->failedItemCount = $data['failed_item_count'];
            unset($data['failed_item_count']);
        }
        if (\array_key_exists('indexed_file_count', $data)) {
            $object->indexedFileCount = $data['indexed_file_count'];
            unset($data['indexed_file_count']);
        }
        if (\array_key_exists('indexed_item_count', $data)) {
            $object->indexedItemCount = $data['indexed_item_count'];
            unset($data['indexed_item_count']);
        }
        if (\array_key_exists('removed_item_count', $data)) {
            $object->removedItemCount = $data['removed_item_count'];
            unset($data['removed_item_count']);
        }
        if (\array_key_exists('skipped_item_count', $data)) {
            $object->skippedItemCount = $data['skipped_item_count'];
            unset($data['skipped_item_count']);
        }
        if (\array_key_exists('started_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['started_at'], 'Y-m-d\TH:i:sP');
            }
            $object->startedAt = $date_1;
            unset($data['started_at']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('total_bytes', $data)) {
            $object->totalBytes = $data['total_bytes'];
            unset($data['total_bytes']);
        }
        if (\array_key_exists('total_bytes_indexed', $data)) {
            $object->totalBytesIndexed = $data['total_bytes_indexed'];
            unset($data['total_bytes_indexed']);
        }
        if (\array_key_exists('total_file_count', $data)) {
            $object->totalFileCount = $data['total_file_count'];
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
        if (array_key_exists('completedAt', get_object_vars($data)) && null !== ($data->completedAt ?? null)) {
            $dataArray['completed_at'] = ($data->completedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('dataSourceUuid', get_object_vars($data)) && null !== ($data->dataSourceUuid ?? null)) {
            $dataArray['data_source_uuid'] = $data->dataSourceUuid ?? null;
        }
        if (array_key_exists('errorDetails', get_object_vars($data)) && null !== ($data->errorDetails ?? null)) {
            $dataArray['error_details'] = $data->errorDetails ?? null;
        }
        if (array_key_exists('errorMsg', get_object_vars($data)) && null !== ($data->errorMsg ?? null)) {
            $dataArray['error_msg'] = $data->errorMsg ?? null;
        }
        if (array_key_exists('failedItemCount', get_object_vars($data)) && null !== ($data->failedItemCount ?? null)) {
            $dataArray['failed_item_count'] = $data->failedItemCount ?? null;
        }
        if (array_key_exists('indexedFileCount', get_object_vars($data)) && null !== ($data->indexedFileCount ?? null)) {
            $dataArray['indexed_file_count'] = $data->indexedFileCount ?? null;
        }
        if (array_key_exists('indexedItemCount', get_object_vars($data)) && null !== ($data->indexedItemCount ?? null)) {
            $dataArray['indexed_item_count'] = $data->indexedItemCount ?? null;
        }
        if (array_key_exists('removedItemCount', get_object_vars($data)) && null !== ($data->removedItemCount ?? null)) {
            $dataArray['removed_item_count'] = $data->removedItemCount ?? null;
        }
        if (array_key_exists('skippedItemCount', get_object_vars($data)) && null !== ($data->skippedItemCount ?? null)) {
            $dataArray['skipped_item_count'] = $data->skippedItemCount ?? null;
        }
        if (array_key_exists('startedAt', get_object_vars($data)) && null !== ($data->startedAt ?? null)) {
            $dataArray['started_at'] = ($data->startedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('totalBytes', get_object_vars($data)) && null !== ($data->totalBytes ?? null)) {
            $dataArray['total_bytes'] = $data->totalBytes ?? null;
        }
        if (array_key_exists('totalBytesIndexed', get_object_vars($data)) && null !== ($data->totalBytesIndexed ?? null)) {
            $dataArray['total_bytes_indexed'] = $data->totalBytesIndexed ?? null;
        }
        if (array_key_exists('totalFileCount', get_object_vars($data)) && null !== ($data->totalFileCount ?? null)) {
            $dataArray['total_file_count'] = $data->totalFileCount ?? null;
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