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
            $object->setCompletedDatasources($data['completed_datasources']);
            unset($data['completed_datasources']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('data_source_jobs', $data)) {
            $values = [];
            foreach ($data['data_source_jobs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiIndexedDataSource::class, 'json', $context);
            }
            $object->setDataSourceJobs($values);
            unset($data['data_source_jobs']);
        }
        if (\array_key_exists('data_source_uuids', $data)) {
            $values_1 = [];
            foreach ($data['data_source_uuids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDataSourceUuids($values_1);
            unset($data['data_source_uuids']);
        }
        if (\array_key_exists('finished_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['finished_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['finished_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setFinishedAt($date_1);
            unset($data['finished_at']);
        }
        if (\array_key_exists('is_report_available', $data)) {
            $object->setIsReportAvailable($data['is_report_available']);
            unset($data['is_report_available']);
        }
        if (\array_key_exists('knowledge_base_uuid', $data)) {
            $object->setKnowledgeBaseUuid($data['knowledge_base_uuid']);
            unset($data['knowledge_base_uuid']);
        }
        if (\array_key_exists('phase', $data)) {
            $object->setPhase($data['phase']);
            unset($data['phase']);
        }
        if (\array_key_exists('started_at', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']);
            if (false === $date_2) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['started_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setStartedAt($date_2);
            unset($data['started_at']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('tokens', $data)) {
            $object->setTokens($data['tokens']);
            unset($data['tokens']);
        }
        if (\array_key_exists('total_datasources', $data)) {
            $object->setTotalDatasources($data['total_datasources']);
            unset($data['total_datasources']);
        }
        if (\array_key_exists('total_tokens', $data)) {
            $object->setTotalTokens($data['total_tokens']);
            unset($data['total_tokens']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_3 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_3) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date_3);
            unset($data['updated_at']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
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
        if ($data->isInitialized('completedDatasources') && null !== $data->getCompletedDatasources()) {
            $dataArray['completed_datasources'] = $data->getCompletedDatasources();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dataSourceJobs') && null !== $data->getDataSourceJobs()) {
            $values = [];
            foreach ($data->getDataSourceJobs() as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['data_source_jobs'] = $values;
        }
        if ($data->isInitialized('dataSourceUuids') && null !== $data->getDataSourceUuids()) {
            $values_1 = [];
            foreach ($data->getDataSourceUuids() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['data_source_uuids'] = $values_1;
        }
        if ($data->isInitialized('finishedAt') && null !== $data->getFinishedAt()) {
            $dataArray['finished_at'] = $data->getFinishedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('isReportAvailable') && null !== $data->getIsReportAvailable()) {
            $dataArray['is_report_available'] = $data->getIsReportAvailable();
        }
        if ($data->isInitialized('knowledgeBaseUuid') && null !== $data->getKnowledgeBaseUuid()) {
            $dataArray['knowledge_base_uuid'] = $data->getKnowledgeBaseUuid();
        }
        if ($data->isInitialized('phase') && null !== $data->getPhase()) {
            $dataArray['phase'] = $data->getPhase();
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['started_at'] = $data->getStartedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('tokens') && null !== $data->getTokens()) {
            $dataArray['tokens'] = $data->getTokens();
        }
        if ($data->isInitialized('totalDatasources') && null !== $data->getTotalDatasources()) {
            $dataArray['total_datasources'] = $data->getTotalDatasources();
        }
        if ($data->isInitialized('totalTokens') && null !== $data->getTotalTokens()) {
            $dataArray['total_tokens'] = $data->getTotalTokens();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('uuid') && null !== $data->getUuid()) {
            $dataArray['uuid'] = $data->getUuid();
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