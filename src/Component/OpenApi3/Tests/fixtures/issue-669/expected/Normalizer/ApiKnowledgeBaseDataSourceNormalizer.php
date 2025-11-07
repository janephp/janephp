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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBaseDataSource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('aws_data_source', $data)) {
            $object->setAwsDataSource($this->denormalizer->denormalize($data['aws_data_source'], \Jane\Generated\DigitalOcean\Model\ApiAWSDataSourceDisplay::class, 'json', $context));
            unset($data['aws_data_source']);
        }
        if (\array_key_exists('bucket_name', $data)) {
            $object->setBucketName($data['bucket_name']);
            unset($data['bucket_name']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('dropbox_data_source', $data)) {
            $object->setDropboxDataSource($this->denormalizer->denormalize($data['dropbox_data_source'], \Jane\Generated\DigitalOcean\Model\ApiDropboxDataSourceDisplay::class, 'json', $context));
            unset($data['dropbox_data_source']);
        }
        if (\array_key_exists('file_upload_data_source', $data)) {
            $object->setFileUploadDataSource($this->denormalizer->denormalize($data['file_upload_data_source'], \Jane\Generated\DigitalOcean\Model\ApiFileUploadDataSource::class, 'json', $context));
            unset($data['file_upload_data_source']);
        }
        if (\array_key_exists('google_drive_data_source', $data)) {
            $object->setGoogleDriveDataSource($this->denormalizer->denormalize($data['google_drive_data_source'], \Jane\Generated\DigitalOcean\Model\ApiGoogleDriveDataSourceDisplay::class, 'json', $context));
            unset($data['google_drive_data_source']);
        }
        if (\array_key_exists('item_path', $data)) {
            $object->setItemPath($data['item_path']);
            unset($data['item_path']);
        }
        if (\array_key_exists('last_datasource_indexing_job', $data)) {
            $object->setLastDatasourceIndexingJob($this->denormalizer->denormalize($data['last_datasource_indexing_job'], \Jane\Generated\DigitalOcean\Model\ApiIndexedDataSource::class, 'json', $context));
            unset($data['last_datasource_indexing_job']);
        }
        if (\array_key_exists('last_indexing_job', $data)) {
            $object->setLastIndexingJob($this->denormalizer->denormalize($data['last_indexing_job'], \Jane\Generated\DigitalOcean\Model\ApiIndexingJob::class, 'json', $context));
            unset($data['last_indexing_job']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
            unset($data['region']);
        }
        if (\array_key_exists('spaces_data_source', $data)) {
            $object->setSpacesDataSource($this->denormalizer->denormalize($data['spaces_data_source'], \Jane\Generated\DigitalOcean\Model\ApiSpacesDataSource::class, 'json', $context));
            unset($data['spaces_data_source']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
            unset($data['uuid']);
        }
        if (\array_key_exists('web_crawler_data_source', $data)) {
            $object->setWebCrawlerDataSource($this->denormalizer->denormalize($data['web_crawler_data_source'], \Jane\Generated\DigitalOcean\Model\ApiWebCrawlerDataSource::class, 'json', $context));
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
        if ($data->isInitialized('awsDataSource') && null !== $data->getAwsDataSource()) {
            $dataArray['aws_data_source'] = $this->normalizer->normalize($data->getAwsDataSource(), 'json', $context);
        }
        if ($data->isInitialized('bucketName') && null !== $data->getBucketName()) {
            $dataArray['bucket_name'] = $data->getBucketName();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dropboxDataSource') && null !== $data->getDropboxDataSource()) {
            $dataArray['dropbox_data_source'] = $this->normalizer->normalize($data->getDropboxDataSource(), 'json', $context);
        }
        if ($data->isInitialized('fileUploadDataSource') && null !== $data->getFileUploadDataSource()) {
            $dataArray['file_upload_data_source'] = $this->normalizer->normalize($data->getFileUploadDataSource(), 'json', $context);
        }
        if ($data->isInitialized('googleDriveDataSource') && null !== $data->getGoogleDriveDataSource()) {
            $dataArray['google_drive_data_source'] = $this->normalizer->normalize($data->getGoogleDriveDataSource(), 'json', $context);
        }
        if ($data->isInitialized('itemPath') && null !== $data->getItemPath()) {
            $dataArray['item_path'] = $data->getItemPath();
        }
        if ($data->isInitialized('lastDatasourceIndexingJob') && null !== $data->getLastDatasourceIndexingJob()) {
            $dataArray['last_datasource_indexing_job'] = $this->normalizer->normalize($data->getLastDatasourceIndexingJob(), 'json', $context);
        }
        if ($data->isInitialized('lastIndexingJob') && null !== $data->getLastIndexingJob()) {
            $dataArray['last_indexing_job'] = $this->normalizer->normalize($data->getLastIndexingJob(), 'json', $context);
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $data->getRegion();
        }
        if ($data->isInitialized('spacesDataSource') && null !== $data->getSpacesDataSource()) {
            $dataArray['spaces_data_source'] = $this->normalizer->normalize($data->getSpacesDataSource(), 'json', $context);
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('uuid') && null !== $data->getUuid()) {
            $dataArray['uuid'] = $data->getUuid();
        }
        if ($data->isInitialized('webCrawlerDataSource') && null !== $data->getWebCrawlerDataSource()) {
            $dataArray['web_crawler_data_source'] = $this->normalizer->normalize($data->getWebCrawlerDataSource(), 'json', $context);
        }
        foreach ($data as $key => $value) {
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