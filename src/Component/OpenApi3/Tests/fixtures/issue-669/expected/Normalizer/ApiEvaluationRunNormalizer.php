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
class ApiEvaluationRunNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiEvaluationRun::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiEvaluationRun::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiEvaluationRun();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('agent_deleted', $data) && \is_int($data['agent_deleted'])) {
            $data['agent_deleted'] = (bool) $data['agent_deleted'];
        }
        if (\array_key_exists('pass_status', $data) && \is_int($data['pass_status'])) {
            $data['pass_status'] = (bool) $data['pass_status'];
        }
        if (\array_key_exists('agent_deleted', $data)) {
            $object->setAgentDeleted($data['agent_deleted']);
            unset($data['agent_deleted']);
        }
        if (\array_key_exists('agent_deployment_name', $data)) {
            $object->setAgentDeploymentName($data['agent_deployment_name']);
            unset($data['agent_deployment_name']);
        }
        if (\array_key_exists('agent_name', $data)) {
            $object->setAgentName($data['agent_name']);
            unset($data['agent_name']);
        }
        if (\array_key_exists('agent_uuid', $data)) {
            $object->setAgentUuid($data['agent_uuid']);
            unset($data['agent_uuid']);
        }
        if (\array_key_exists('agent_version_hash', $data)) {
            $object->setAgentVersionHash($data['agent_version_hash']);
            unset($data['agent_version_hash']);
        }
        if (\array_key_exists('agent_workspace_uuid', $data)) {
            $object->setAgentWorkspaceUuid($data['agent_workspace_uuid']);
            unset($data['agent_workspace_uuid']);
        }
        if (\array_key_exists('created_by_user_email', $data)) {
            $object->setCreatedByUserEmail($data['created_by_user_email']);
            unset($data['created_by_user_email']);
        }
        if (\array_key_exists('created_by_user_id', $data)) {
            $object->setCreatedByUserId($data['created_by_user_id']);
            unset($data['created_by_user_id']);
        }
        if (\array_key_exists('error_description', $data)) {
            $object->setErrorDescription($data['error_description']);
            unset($data['error_description']);
        }
        if (\array_key_exists('evaluation_run_uuid', $data)) {
            $object->setEvaluationRunUuid($data['evaluation_run_uuid']);
            unset($data['evaluation_run_uuid']);
        }
        if (\array_key_exists('evaluation_test_case_workspace_uuid', $data)) {
            $object->setEvaluationTestCaseWorkspaceUuid($data['evaluation_test_case_workspace_uuid']);
            unset($data['evaluation_test_case_workspace_uuid']);
        }
        if (\array_key_exists('finished_at', $data)) {
            $object->setFinishedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['finished_at']));
            unset($data['finished_at']);
        }
        if (\array_key_exists('pass_status', $data)) {
            $object->setPassStatus($data['pass_status']);
            unset($data['pass_status']);
        }
        if (\array_key_exists('queued_at', $data)) {
            $object->setQueuedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['queued_at']));
            unset($data['queued_at']);
        }
        if (\array_key_exists('run_level_metric_results', $data)) {
            $values = [];
            foreach ($data['run_level_metric_results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class, 'json', $context);
            }
            $object->setRunLevelMetricResults($values);
            unset($data['run_level_metric_results']);
        }
        if (\array_key_exists('run_name', $data)) {
            $object->setRunName($data['run_name']);
            unset($data['run_name']);
        }
        if (\array_key_exists('star_metric_result', $data)) {
            $object->setStarMetricResult($this->denormalizer->denormalize($data['star_metric_result'], \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class, 'json', $context));
            unset($data['star_metric_result']);
        }
        if (\array_key_exists('started_at', $data)) {
            $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']));
            unset($data['started_at']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('test_case_description', $data)) {
            $object->setTestCaseDescription($data['test_case_description']);
            unset($data['test_case_description']);
        }
        if (\array_key_exists('test_case_name', $data)) {
            $object->setTestCaseName($data['test_case_name']);
            unset($data['test_case_name']);
        }
        if (\array_key_exists('test_case_uuid', $data)) {
            $object->setTestCaseUuid($data['test_case_uuid']);
            unset($data['test_case_uuid']);
        }
        if (\array_key_exists('test_case_version', $data)) {
            $object->setTestCaseVersion($data['test_case_version']);
            unset($data['test_case_version']);
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
        if ($data->isInitialized('agentDeleted') && null !== $data->getAgentDeleted()) {
            $dataArray['agent_deleted'] = $data->getAgentDeleted();
        }
        if ($data->isInitialized('agentDeploymentName') && null !== $data->getAgentDeploymentName()) {
            $dataArray['agent_deployment_name'] = $data->getAgentDeploymentName();
        }
        if ($data->isInitialized('agentName') && null !== $data->getAgentName()) {
            $dataArray['agent_name'] = $data->getAgentName();
        }
        if ($data->isInitialized('agentUuid') && null !== $data->getAgentUuid()) {
            $dataArray['agent_uuid'] = $data->getAgentUuid();
        }
        if ($data->isInitialized('agentVersionHash') && null !== $data->getAgentVersionHash()) {
            $dataArray['agent_version_hash'] = $data->getAgentVersionHash();
        }
        if ($data->isInitialized('agentWorkspaceUuid') && null !== $data->getAgentWorkspaceUuid()) {
            $dataArray['agent_workspace_uuid'] = $data->getAgentWorkspaceUuid();
        }
        if ($data->isInitialized('createdByUserEmail') && null !== $data->getCreatedByUserEmail()) {
            $dataArray['created_by_user_email'] = $data->getCreatedByUserEmail();
        }
        if ($data->isInitialized('createdByUserId') && null !== $data->getCreatedByUserId()) {
            $dataArray['created_by_user_id'] = $data->getCreatedByUserId();
        }
        if ($data->isInitialized('errorDescription') && null !== $data->getErrorDescription()) {
            $dataArray['error_description'] = $data->getErrorDescription();
        }
        if ($data->isInitialized('evaluationRunUuid') && null !== $data->getEvaluationRunUuid()) {
            $dataArray['evaluation_run_uuid'] = $data->getEvaluationRunUuid();
        }
        if ($data->isInitialized('evaluationTestCaseWorkspaceUuid') && null !== $data->getEvaluationTestCaseWorkspaceUuid()) {
            $dataArray['evaluation_test_case_workspace_uuid'] = $data->getEvaluationTestCaseWorkspaceUuid();
        }
        if ($data->isInitialized('finishedAt') && null !== $data->getFinishedAt()) {
            $dataArray['finished_at'] = $data->getFinishedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('passStatus') && null !== $data->getPassStatus()) {
            $dataArray['pass_status'] = $data->getPassStatus();
        }
        if ($data->isInitialized('queuedAt') && null !== $data->getQueuedAt()) {
            $dataArray['queued_at'] = $data->getQueuedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('runLevelMetricResults') && null !== $data->getRunLevelMetricResults()) {
            $values = [];
            foreach ($data->getRunLevelMetricResults() as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['run_level_metric_results'] = $values;
        }
        if ($data->isInitialized('runName') && null !== $data->getRunName()) {
            $dataArray['run_name'] = $data->getRunName();
        }
        if ($data->isInitialized('starMetricResult') && null !== $data->getStarMetricResult()) {
            $dataArray['star_metric_result'] = $data->getStarMetricResult() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getStarMetricResult(), 'json', $context));
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['started_at'] = $data->getStartedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('testCaseDescription') && null !== $data->getTestCaseDescription()) {
            $dataArray['test_case_description'] = $data->getTestCaseDescription();
        }
        if ($data->isInitialized('testCaseName') && null !== $data->getTestCaseName()) {
            $dataArray['test_case_name'] = $data->getTestCaseName();
        }
        if ($data->isInitialized('testCaseUuid') && null !== $data->getTestCaseUuid()) {
            $dataArray['test_case_uuid'] = $data->getTestCaseUuid();
        }
        if ($data->isInitialized('testCaseVersion') && null !== $data->getTestCaseVersion()) {
            $dataArray['test_case_version'] = $data->getTestCaseVersion();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiEvaluationRun::class => false];
    }
}