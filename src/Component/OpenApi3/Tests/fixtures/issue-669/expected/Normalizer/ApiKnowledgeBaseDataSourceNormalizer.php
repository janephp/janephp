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
class ApiKnowledgeBaseDataSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBaseDataSource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBaseDataSource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBaseDataSource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('aws_data_source', $data)) {
            $object->awsDataSource = $this->denormalizer->denormalize($data['aws_data_source'], \Jane\Generated\DigitalOcean\Model\ApiAWSDataSourceDisplay::class, 'json', $context);
            unset($data['aws_data_source']);
        }
        if (\array_key_exists('bucket_name', $data)) {
            $object->bucketName = $data['bucket_name'];
            unset($data['bucket_name']);
        }
        if (\array_key_exists('chunking_algorithm', $data)) {
            $object->chunkingAlgorithm = $data['chunking_algorithm'];
            unset($data['chunking_algorithm']);
        }
        if (\array_key_exists('chunking_options', $data)) {
            $object->chunkingOptions = $this->denormalizer->denormalize($data['chunking_options'], \Jane\Generated\DigitalOcean\Model\ApiChunkingOptions::class, 'json', $context);
            unset($data['chunking_options']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('dropbox_data_source', $data)) {
            $object->dropboxDataSource = $this->denormalizer->denormalize($data['dropbox_data_source'], \Jane\Generated\DigitalOcean\Model\ApiDropboxDataSourceDisplay::class, 'json', $context);
            unset($data['dropbox_data_source']);
        }
        if (\array_key_exists('file_upload_data_source', $data)) {
            $object->fileUploadDataSource = $this->denormalizer->denormalize($data['file_upload_data_source'], \Jane\Generated\DigitalOcean\Model\ApiFileUploadDataSource::class, 'json', $context);
            unset($data['file_upload_data_source']);
        }
        if (\array_key_exists('google_drive_data_source', $data)) {
            $object->googleDriveDataSource = $this->denormalizer->denormalize($data['google_drive_data_source'], \Jane\Generated\DigitalOcean\Model\ApiGoogleDriveDataSourceDisplay::class, 'json', $context);
            unset($data['google_drive_data_source']);
        }
        if (\array_key_exists('item_path', $data)) {
            $object->itemPath = $data['item_path'];
            unset($data['item_path']);
        }
        if (\array_key_exists('last_datasource_indexing_job', $data)) {
            $object->lastDatasourceIndexingJob = $this->denormalizer->denormalize($data['last_datasource_indexing_job'], \Jane\Generated\DigitalOcean\Model\ApiIndexedDataSource::class, 'json', $context);
            unset($data['last_datasource_indexing_job']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('spaces_data_source', $data)) {
            $object->spacesDataSource = $this->denormalizer->denormalize($data['spaces_data_source'], \Jane\Generated\DigitalOcean\Model\ApiSpacesDataSource::class, 'json', $context);
            unset($data['spaces_data_source']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_1;
            unset($data['updated_at']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
            unset($data['uuid']);
        }
        if (\array_key_exists('web_crawler_data_source', $data)) {
            $object->webCrawlerDataSource = $this->denormalizer->denormalize($data['web_crawler_data_source'], \Jane\Generated\DigitalOcean\Model\ApiWebCrawlerDataSource::class, 'json', $context);
            unset($data['web_crawler_data_source']);
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
        if (array_key_exists('awsDataSource', get_object_vars($data)) && null !== ($data->awsDataSource ?? null)) {
            $dataArray['aws_data_source'] = ($data->awsDataSource ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->awsDataSource ?? null, 'json', $context));
        }
        if (array_key_exists('bucketName', get_object_vars($data)) && null !== ($data->bucketName ?? null)) {
            $dataArray['bucket_name'] = $data->bucketName ?? null;
        }
        if (array_key_exists('chunkingAlgorithm', get_object_vars($data)) && null !== ($data->chunkingAlgorithm ?? null)) {
            $dataArray['chunking_algorithm'] = $data->chunkingAlgorithm ?? null;
        }
        if (array_key_exists('chunkingOptions', get_object_vars($data)) && null !== ($data->chunkingOptions ?? null)) {
            $dataArray['chunking_options'] = ($data->chunkingOptions ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->chunkingOptions ?? null, 'json', $context));
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('dropboxDataSource', get_object_vars($data)) && null !== ($data->dropboxDataSource ?? null)) {
            $dataArray['dropbox_data_source'] = ($data->dropboxDataSource ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->dropboxDataSource ?? null, 'json', $context));
        }
        if (array_key_exists('fileUploadDataSource', get_object_vars($data)) && null !== ($data->fileUploadDataSource ?? null)) {
            $dataArray['file_upload_data_source'] = ($data->fileUploadDataSource ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->fileUploadDataSource ?? null, 'json', $context));
        }
        if (array_key_exists('googleDriveDataSource', get_object_vars($data)) && null !== ($data->googleDriveDataSource ?? null)) {
            $dataArray['google_drive_data_source'] = ($data->googleDriveDataSource ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->googleDriveDataSource ?? null, 'json', $context));
        }
        if (array_key_exists('itemPath', get_object_vars($data)) && null !== ($data->itemPath ?? null)) {
            $dataArray['item_path'] = $data->itemPath ?? null;
        }
        if (array_key_exists('lastDatasourceIndexingJob', get_object_vars($data)) && null !== ($data->lastDatasourceIndexingJob ?? null)) {
            $dataArray['last_datasource_indexing_job'] = ($data->lastDatasourceIndexingJob ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->lastDatasourceIndexingJob ?? null, 'json', $context));
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        if (array_key_exists('spacesDataSource', get_object_vars($data)) && null !== ($data->spacesDataSource ?? null)) {
            $dataArray['spaces_data_source'] = ($data->spacesDataSource ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->spacesDataSource ?? null, 'json', $context));
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('uuid', get_object_vars($data)) && null !== ($data->uuid ?? null)) {
            $dataArray['uuid'] = $data->uuid ?? null;
        }
        if (array_key_exists('webCrawlerDataSource', get_object_vars($data)) && null !== ($data->webCrawlerDataSource ?? null)) {
            $dataArray['web_crawler_data_source'] = ($data->webCrawlerDataSource ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->webCrawlerDataSource ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\ApiKnowledgeBaseDataSource::class => false];
    }
}