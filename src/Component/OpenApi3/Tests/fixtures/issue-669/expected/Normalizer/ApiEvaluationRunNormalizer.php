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
            $object->agentDeleted = $data['agent_deleted'];
            unset($data['agent_deleted']);
        }
        if (\array_key_exists('agent_deployment_name', $data)) {
            $object->agentDeploymentName = $data['agent_deployment_name'];
            unset($data['agent_deployment_name']);
        }
        if (\array_key_exists('agent_name', $data)) {
            $object->agentName = $data['agent_name'];
            unset($data['agent_name']);
        }
        if (\array_key_exists('agent_uuid', $data)) {
            $object->agentUuid = $data['agent_uuid'];
            unset($data['agent_uuid']);
        }
        if (\array_key_exists('agent_version_hash', $data)) {
            $object->agentVersionHash = $data['agent_version_hash'];
            unset($data['agent_version_hash']);
        }
        if (\array_key_exists('agent_workspace_uuid', $data)) {
            $object->agentWorkspaceUuid = $data['agent_workspace_uuid'];
            unset($data['agent_workspace_uuid']);
        }
        if (\array_key_exists('created_by_user_email', $data)) {
            $object->createdByUserEmail = $data['created_by_user_email'];
            unset($data['created_by_user_email']);
        }
        if (\array_key_exists('created_by_user_id', $data)) {
            $object->createdByUserId = $data['created_by_user_id'];
            unset($data['created_by_user_id']);
        }
        if (\array_key_exists('error_description', $data)) {
            $object->errorDescription = $data['error_description'];
            unset($data['error_description']);
        }
        if (\array_key_exists('evaluation_run_uuid', $data)) {
            $object->evaluationRunUuid = $data['evaluation_run_uuid'];
            unset($data['evaluation_run_uuid']);
        }
        if (\array_key_exists('evaluation_test_case_workspace_uuid', $data)) {
            $object->evaluationTestCaseWorkspaceUuid = $data['evaluation_test_case_workspace_uuid'];
            unset($data['evaluation_test_case_workspace_uuid']);
        }
        if (\array_key_exists('finished_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['finished_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['finished_at'], 'Y-m-d\TH:i:sP');
            }
            $object->finishedAt = $date;
            unset($data['finished_at']);
        }
        if (\array_key_exists('pass_status', $data)) {
            $object->passStatus = $data['pass_status'];
            unset($data['pass_status']);
        }
        if (\array_key_exists('queued_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['queued_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['queued_at'], 'Y-m-d\TH:i:sP');
            }
            $object->queuedAt = $date_1;
            unset($data['queued_at']);
        }
        if (\array_key_exists('run_level_metric_results', $data)) {
            $values = [];
            foreach ($data['run_level_metric_results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class, 'json', $context);
            }
            $object->runLevelMetricResults = $values;
            unset($data['run_level_metric_results']);
        }
        if (\array_key_exists('run_name', $data)) {
            $object->runName = $data['run_name'];
            unset($data['run_name']);
        }
        if (\array_key_exists('star_metric_result', $data)) {
            $object->starMetricResult = $this->denormalizer->denormalize($data['star_metric_result'], \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class, 'json', $context);
            unset($data['star_metric_result']);
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
        if (\array_key_exists('test_case_description', $data)) {
            $object->testCaseDescription = $data['test_case_description'];
            unset($data['test_case_description']);
        }
        if (\array_key_exists('test_case_name', $data)) {
            $object->testCaseName = $data['test_case_name'];
            unset($data['test_case_name']);
        }
        if (\array_key_exists('test_case_uuid', $data)) {
            $object->testCaseUuid = $data['test_case_uuid'];
            unset($data['test_case_uuid']);
        }
        if (\array_key_exists('test_case_version', $data)) {
            $object->testCaseVersion = $data['test_case_version'];
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
        if (array_key_exists('agentDeleted', get_object_vars($data)) && null !== ($data->agentDeleted ?? null)) {
            $dataArray['agent_deleted'] = $data->agentDeleted ?? null;
        }
        if (array_key_exists('agentDeploymentName', get_object_vars($data)) && null !== ($data->agentDeploymentName ?? null)) {
            $dataArray['agent_deployment_name'] = $data->agentDeploymentName ?? null;
        }
        if (array_key_exists('agentName', get_object_vars($data)) && null !== ($data->agentName ?? null)) {
            $dataArray['agent_name'] = $data->agentName ?? null;
        }
        if (array_key_exists('agentUuid', get_object_vars($data)) && null !== ($data->agentUuid ?? null)) {
            $dataArray['agent_uuid'] = $data->agentUuid ?? null;
        }
        if (array_key_exists('agentVersionHash', get_object_vars($data)) && null !== ($data->agentVersionHash ?? null)) {
            $dataArray['agent_version_hash'] = $data->agentVersionHash ?? null;
        }
        if (array_key_exists('agentWorkspaceUuid', get_object_vars($data)) && null !== ($data->agentWorkspaceUuid ?? null)) {
            $dataArray['agent_workspace_uuid'] = $data->agentWorkspaceUuid ?? null;
        }
        if (array_key_exists('createdByUserEmail', get_object_vars($data)) && null !== ($data->createdByUserEmail ?? null)) {
            $dataArray['created_by_user_email'] = $data->createdByUserEmail ?? null;
        }
        if (array_key_exists('createdByUserId', get_object_vars($data)) && null !== ($data->createdByUserId ?? null)) {
            $dataArray['created_by_user_id'] = $data->createdByUserId ?? null;
        }
        if (array_key_exists('errorDescription', get_object_vars($data)) && null !== ($data->errorDescription ?? null)) {
            $dataArray['error_description'] = $data->errorDescription ?? null;
        }
        if (array_key_exists('evaluationRunUuid', get_object_vars($data)) && null !== ($data->evaluationRunUuid ?? null)) {
            $dataArray['evaluation_run_uuid'] = $data->evaluationRunUuid ?? null;
        }
        if (array_key_exists('evaluationTestCaseWorkspaceUuid', get_object_vars($data)) && null !== ($data->evaluationTestCaseWorkspaceUuid ?? null)) {
            $dataArray['evaluation_test_case_workspace_uuid'] = $data->evaluationTestCaseWorkspaceUuid ?? null;
        }
        if (array_key_exists('finishedAt', get_object_vars($data)) && null !== ($data->finishedAt ?? null)) {
            $dataArray['finished_at'] = ($data->finishedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('passStatus', get_object_vars($data)) && null !== ($data->passStatus ?? null)) {
            $dataArray['pass_status'] = $data->passStatus ?? null;
        }
        if (array_key_exists('queuedAt', get_object_vars($data)) && null !== ($data->queuedAt ?? null)) {
            $dataArray['queued_at'] = ($data->queuedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('runLevelMetricResults', get_object_vars($data)) && null !== ($data->runLevelMetricResults ?? null)) {
            $values = [];
            foreach ($data->runLevelMetricResults ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['run_level_metric_results'] = $values;
        }
        if (array_key_exists('runName', get_object_vars($data)) && null !== ($data->runName ?? null)) {
            $dataArray['run_name'] = $data->runName ?? null;
        }
        if (array_key_exists('starMetricResult', get_object_vars($data)) && null !== ($data->starMetricResult ?? null)) {
            $dataArray['star_metric_result'] = ($data->starMetricResult ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->starMetricResult ?? null, 'json', $context));
        }
        if (array_key_exists('startedAt', get_object_vars($data)) && null !== ($data->startedAt ?? null)) {
            $dataArray['started_at'] = ($data->startedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('testCaseDescription', get_object_vars($data)) && null !== ($data->testCaseDescription ?? null)) {
            $dataArray['test_case_description'] = $data->testCaseDescription ?? null;
        }
        if (array_key_exists('testCaseName', get_object_vars($data)) && null !== ($data->testCaseName ?? null)) {
            $dataArray['test_case_name'] = $data->testCaseName ?? null;
        }
        if (array_key_exists('testCaseUuid', get_object_vars($data)) && null !== ($data->testCaseUuid ?? null)) {
            $dataArray['test_case_uuid'] = $data->testCaseUuid ?? null;
        }
        if (array_key_exists('testCaseVersion', get_object_vars($data)) && null !== ($data->testCaseVersion ?? null)) {
            $dataArray['test_case_version'] = $data->testCaseVersion ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiEvaluationRun::class => false];
    }
}