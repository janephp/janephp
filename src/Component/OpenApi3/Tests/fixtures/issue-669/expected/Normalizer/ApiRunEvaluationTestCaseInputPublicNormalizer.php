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
class ApiRunEvaluationTestCaseInputPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseInputPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseInputPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('agent_deployment_names', $data)) {
            $values = [];
            foreach ($data['agent_deployment_names'] as $value) {
                $values[] = $value;
            }
            $object->setAgentDeploymentNames($values);
            unset($data['agent_deployment_names']);
        }
        if (\array_key_exists('agent_uuids', $data)) {
            $values_1 = [];
            foreach ($data['agent_uuids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAgentUuids($values_1);
            unset($data['agent_uuids']);
        }
        if (\array_key_exists('run_name', $data)) {
            $object->setRunName($data['run_name']);
            unset($data['run_name']);
        }
        if (\array_key_exists('test_case_uuid', $data)) {
            $object->setTestCaseUuid($data['test_case_uuid']);
            unset($data['test_case_uuid']);
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
        if ($data->isInitialized('agentDeploymentNames') && null !== $data->getAgentDeploymentNames()) {
            $values = [];
            foreach ($data->getAgentDeploymentNames() as $value) {
                $values[] = $value;
            }
            $dataArray['agent_deployment_names'] = $values;
        }
        if ($data->isInitialized('agentUuids') && null !== $data->getAgentUuids()) {
            $values_1 = [];
            foreach ($data->getAgentUuids() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['agent_uuids'] = $values_1;
        }
        if ($data->isInitialized('runName') && null !== $data->getRunName()) {
            $dataArray['run_name'] = $data->getRunName();
        }
        if ($data->isInitialized('testCaseUuid') && null !== $data->getTestCaseUuid()) {
            $dataArray['test_case_uuid'] = $data->getTestCaseUuid();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseInputPublic::class => false];
    }
}