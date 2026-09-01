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
class ApiEvaluationTestCaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('archived_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['archived_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['archived_at'], 'Y-m-d\TH:i:sP');
            }
            $object->archivedAt = $date;
            unset($data['archived_at']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date_1;
            unset($data['created_at']);
        }
        if (\array_key_exists('created_by_user_email', $data)) {
            $object->createdByUserEmail = $data['created_by_user_email'];
            unset($data['created_by_user_email']);
        }
        if (\array_key_exists('created_by_user_id', $data)) {
            $object->createdByUserId = $data['created_by_user_id'];
            unset($data['created_by_user_id']);
        }
        if (\array_key_exists('dataset', $data)) {
            $object->dataset = $this->denormalizer->denormalize($data['dataset'], \Jane\Generated\DigitalOcean\Model\ApiEvaluationDataset::class, 'json', $context);
            unset($data['dataset']);
        }
        if (\array_key_exists('dataset_name', $data)) {
            $object->datasetName = $data['dataset_name'];
            unset($data['dataset_name']);
        }
        if (\array_key_exists('dataset_uuid', $data)) {
            $object->datasetUuid = $data['dataset_uuid'];
            unset($data['dataset_uuid']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('latest_version_number_of_runs', $data)) {
            $object->latestVersionNumberOfRuns = $data['latest_version_number_of_runs'];
            unset($data['latest_version_number_of_runs']);
        }
        if (\array_key_exists('metrics', $data)) {
            $values = [];
            foreach ($data['metrics'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetric::class, 'json', $context);
            }
            $object->metrics = $values;
            unset($data['metrics']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('star_metric', $data)) {
            $object->starMetric = $this->denormalizer->denormalize($data['star_metric'], \Jane\Generated\DigitalOcean\Model\ApiStarMetric::class, 'json', $context);
            unset($data['star_metric']);
        }
        if (\array_key_exists('test_case_uuid', $data)) {
            $object->testCaseUuid = $data['test_case_uuid'];
            unset($data['test_case_uuid']);
        }
        if (\array_key_exists('total_runs', $data)) {
            $object->totalRuns = $data['total_runs'];
            unset($data['total_runs']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_2) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_2;
            unset($data['updated_at']);
        }
        if (\array_key_exists('updated_by_user_email', $data)) {
            $object->updatedByUserEmail = $data['updated_by_user_email'];
            unset($data['updated_by_user_email']);
        }
        if (\array_key_exists('updated_by_user_id', $data)) {
            $object->updatedByUserId = $data['updated_by_user_id'];
            unset($data['updated_by_user_id']);
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
            unset($data['version']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('archivedAt', get_object_vars($data)) && null !== ($data->archivedAt ?? null)) {
            $dataArray['archived_at'] = ($data->archivedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('createdByUserEmail', get_object_vars($data)) && null !== ($data->createdByUserEmail ?? null)) {
            $dataArray['created_by_user_email'] = $data->createdByUserEmail ?? null;
        }
        if (array_key_exists('createdByUserId', get_object_vars($data)) && null !== ($data->createdByUserId ?? null)) {
            $dataArray['created_by_user_id'] = $data->createdByUserId ?? null;
        }
        if (array_key_exists('dataset', get_object_vars($data)) && null !== ($data->dataset ?? null)) {
            $dataArray['dataset'] = ($data->dataset ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->dataset ?? null, 'json', $context));
        }
        if (array_key_exists('datasetName', get_object_vars($data)) && null !== ($data->datasetName ?? null)) {
            $dataArray['dataset_name'] = $data->datasetName ?? null;
        }
        if (array_key_exists('datasetUuid', get_object_vars($data)) && null !== ($data->datasetUuid ?? null)) {
            $dataArray['dataset_uuid'] = $data->datasetUuid ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('latestVersionNumberOfRuns', get_object_vars($data)) && null !== ($data->latestVersionNumberOfRuns ?? null)) {
            $dataArray['latest_version_number_of_runs'] = $data->latestVersionNumberOfRuns ?? null;
        }
        if (array_key_exists('metrics', get_object_vars($data)) && null !== ($data->metrics ?? null)) {
            $values = [];
            foreach ($data->metrics ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['metrics'] = $values;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('starMetric', get_object_vars($data)) && null !== ($data->starMetric ?? null)) {
            $dataArray['star_metric'] = ($data->starMetric ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->starMetric ?? null, 'json', $context));
        }
        if (array_key_exists('testCaseUuid', get_object_vars($data)) && null !== ($data->testCaseUuid ?? null)) {
            $dataArray['test_case_uuid'] = $data->testCaseUuid ?? null;
        }
        if (array_key_exists('totalRuns', get_object_vars($data)) && null !== ($data->totalRuns ?? null)) {
            $dataArray['total_runs'] = $data->totalRuns ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('updatedByUserEmail', get_object_vars($data)) && null !== ($data->updatedByUserEmail ?? null)) {
            $dataArray['updated_by_user_email'] = $data->updatedByUserEmail ?? null;
        }
        if (array_key_exists('updatedByUserId', get_object_vars($data)) && null !== ($data->updatedByUserId ?? null)) {
            $dataArray['updated_by_user_id'] = $data->updatedByUserId ?? null;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCase::class => false];
    }
}