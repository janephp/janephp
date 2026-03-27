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
            $object->setArchivedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['archived_at']));
            unset($data['archived_at']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('created_by_user_email', $data)) {
            $object->setCreatedByUserEmail($data['created_by_user_email']);
            unset($data['created_by_user_email']);
        }
        if (\array_key_exists('created_by_user_id', $data)) {
            $object->setCreatedByUserId($data['created_by_user_id']);
            unset($data['created_by_user_id']);
        }
        if (\array_key_exists('dataset', $data)) {
            $object->setDataset($this->denormalizer->denormalize($data['dataset'], \Jane\Generated\DigitalOcean\Model\ApiEvaluationDataset::class, 'json', $context));
            unset($data['dataset']);
        }
        if (\array_key_exists('dataset_name', $data)) {
            $object->setDatasetName($data['dataset_name']);
            unset($data['dataset_name']);
        }
        if (\array_key_exists('dataset_uuid', $data)) {
            $object->setDatasetUuid($data['dataset_uuid']);
            unset($data['dataset_uuid']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('latest_version_number_of_runs', $data)) {
            $object->setLatestVersionNumberOfRuns($data['latest_version_number_of_runs']);
            unset($data['latest_version_number_of_runs']);
        }
        if (\array_key_exists('metrics', $data)) {
            $values = [];
            foreach ($data['metrics'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetric::class, 'json', $context);
            }
            $object->setMetrics($values);
            unset($data['metrics']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('star_metric', $data)) {
            $object->setStarMetric($this->denormalizer->denormalize($data['star_metric'], \Jane\Generated\DigitalOcean\Model\ApiStarMetric::class, 'json', $context));
            unset($data['star_metric']);
        }
        if (\array_key_exists('test_case_uuid', $data)) {
            $object->setTestCaseUuid($data['test_case_uuid']);
            unset($data['test_case_uuid']);
        }
        if (\array_key_exists('total_runs', $data)) {
            $object->setTotalRuns($data['total_runs']);
            unset($data['total_runs']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('updated_by_user_email', $data)) {
            $object->setUpdatedByUserEmail($data['updated_by_user_email']);
            unset($data['updated_by_user_email']);
        }
        if (\array_key_exists('updated_by_user_id', $data)) {
            $object->setUpdatedByUserId($data['updated_by_user_id']);
            unset($data['updated_by_user_id']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
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
        if ($data->isInitialized('archivedAt') && null !== $data->getArchivedAt()) {
            $dataArray['archived_at'] = $data->getArchivedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('createdByUserEmail') && null !== $data->getCreatedByUserEmail()) {
            $dataArray['created_by_user_email'] = $data->getCreatedByUserEmail();
        }
        if ($data->isInitialized('createdByUserId') && null !== $data->getCreatedByUserId()) {
            $dataArray['created_by_user_id'] = $data->getCreatedByUserId();
        }
        if ($data->isInitialized('dataset') && null !== $data->getDataset()) {
            $dataArray['dataset'] = $this->normalizer->normalize($data->getDataset(), 'json', $context);
        }
        if ($data->isInitialized('datasetName') && null !== $data->getDatasetName()) {
            $dataArray['dataset_name'] = $data->getDatasetName();
        }
        if ($data->isInitialized('datasetUuid') && null !== $data->getDatasetUuid()) {
            $dataArray['dataset_uuid'] = $data->getDatasetUuid();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('latestVersionNumberOfRuns') && null !== $data->getLatestVersionNumberOfRuns()) {
            $dataArray['latest_version_number_of_runs'] = $data->getLatestVersionNumberOfRuns();
        }
        if ($data->isInitialized('metrics') && null !== $data->getMetrics()) {
            $values = [];
            foreach ($data->getMetrics() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['metrics'] = $values;
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('starMetric') && null !== $data->getStarMetric()) {
            $dataArray['star_metric'] = $this->normalizer->normalize($data->getStarMetric(), 'json', $context);
        }
        if ($data->isInitialized('testCaseUuid') && null !== $data->getTestCaseUuid()) {
            $dataArray['test_case_uuid'] = $data->getTestCaseUuid();
        }
        if ($data->isInitialized('totalRuns') && null !== $data->getTotalRuns()) {
            $dataArray['total_runs'] = $data->getTotalRuns();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('updatedByUserEmail') && null !== $data->getUpdatedByUserEmail()) {
            $dataArray['updated_by_user_email'] = $data->getUpdatedByUserEmail();
        }
        if ($data->isInitialized('updatedByUserId') && null !== $data->getUpdatedByUserId()) {
            $dataArray['updated_by_user_id'] = $data->getUpdatedByUserId();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        foreach ($data as $key => $value_1) {
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