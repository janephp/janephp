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
class ApiIndexingJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiIndexingJob::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiIndexingJob::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiIndexingJob();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_report_available', $data) && \is_int($data['is_report_available'])) {
            $data['is_report_available'] = (bool) $data['is_report_available'];
        }
        if (\array_key_exists('completed_datasources', $data)) {
            $object->completedDatasources = $data['completed_datasources'];
            unset($data['completed_datasources']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('data_source_jobs', $data)) {
            $values = [];
            foreach ($data['data_source_jobs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiIndexedDataSource::class, 'json', $context);
            }
            $object->dataSourceJobs = $values;
            unset($data['data_source_jobs']);
        }
        if (\array_key_exists('data_source_uuids', $data)) {
            $values_1 = [];
            foreach ($data['data_source_uuids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->dataSourceUuids = $values_1;
            unset($data['data_source_uuids']);
        }
        if (\array_key_exists('finished_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['finished_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['finished_at'], 'Y-m-d\TH:i:sP');
            }
            $object->finishedAt = $date_1;
            unset($data['finished_at']);
        }
        if (\array_key_exists('is_report_available', $data)) {
            $object->isReportAvailable = $data['is_report_available'];
            unset($data['is_report_available']);
        }
        if (\array_key_exists('knowledge_base_uuid', $data)) {
            $object->knowledgeBaseUuid = $data['knowledge_base_uuid'];
            unset($data['knowledge_base_uuid']);
        }
        if (\array_key_exists('phase', $data)) {
            $object->phase = $data['phase'];
            unset($data['phase']);
        }
        if (\array_key_exists('started_at', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']);
            if (false === $date_2) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['started_at'], 'Y-m-d\TH:i:sP');
            }
            $object->startedAt = $date_2;
            unset($data['started_at']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('tokens', $data)) {
            $object->tokens = $data['tokens'];
            unset($data['tokens']);
        }
        if (\array_key_exists('total_datasources', $data)) {
            $object->totalDatasources = $data['total_datasources'];
            unset($data['total_datasources']);
        }
        if (\array_key_exists('total_tokens', $data)) {
            $object->totalTokens = $data['total_tokens'];
            unset($data['total_tokens']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_3 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_3) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_3;
            unset($data['updated_at']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
            unset($data['uuid']);
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
        if (array_key_exists('completedDatasources', get_object_vars($data)) && null !== ($data->completedDatasources ?? null)) {
            $dataArray['completed_datasources'] = $data->completedDatasources ?? null;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('dataSourceJobs', get_object_vars($data)) && null !== ($data->dataSourceJobs ?? null)) {
            $values = [];
            foreach ($data->dataSourceJobs ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['data_source_jobs'] = $values;
        }
        if (array_key_exists('dataSourceUuids', get_object_vars($data)) && null !== ($data->dataSourceUuids ?? null)) {
            $values_1 = [];
            foreach ($data->dataSourceUuids ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['data_source_uuids'] = $values_1;
        }
        if (array_key_exists('finishedAt', get_object_vars($data)) && null !== ($data->finishedAt ?? null)) {
            $dataArray['finished_at'] = ($data->finishedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('isReportAvailable', get_object_vars($data)) && null !== ($data->isReportAvailable ?? null)) {
            $dataArray['is_report_available'] = $data->isReportAvailable ?? null;
        }
        if (array_key_exists('knowledgeBaseUuid', get_object_vars($data)) && null !== ($data->knowledgeBaseUuid ?? null)) {
            $dataArray['knowledge_base_uuid'] = $data->knowledgeBaseUuid ?? null;
        }
        if (array_key_exists('phase', get_object_vars($data)) && null !== ($data->phase ?? null)) {
            $dataArray['phase'] = $data->phase ?? null;
        }
        if (array_key_exists('startedAt', get_object_vars($data)) && null !== ($data->startedAt ?? null)) {
            $dataArray['started_at'] = ($data->startedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('tokens', get_object_vars($data)) && null !== ($data->tokens ?? null)) {
            $dataArray['tokens'] = $data->tokens ?? null;
        }
        if (array_key_exists('totalDatasources', get_object_vars($data)) && null !== ($data->totalDatasources ?? null)) {
            $dataArray['total_datasources'] = $data->totalDatasources ?? null;
        }
        if (array_key_exists('totalTokens', get_object_vars($data)) && null !== ($data->totalTokens ?? null)) {
            $dataArray['total_tokens'] = $data->totalTokens ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('uuid', get_object_vars($data)) && null !== ($data->uuid ?? null)) {
            $dataArray['uuid'] = $data->uuid ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiIndexingJob::class => false];
    }
}