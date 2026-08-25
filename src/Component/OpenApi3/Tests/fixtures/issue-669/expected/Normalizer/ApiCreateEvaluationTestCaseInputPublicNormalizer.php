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
class ApiCreateEvaluationTestCaseInputPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseInputPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseInputPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('agent_workspace_name', $data)) {
            $object->setAgentWorkspaceName($data['agent_workspace_name']);
            unset($data['agent_workspace_name']);
        }
        if (\array_key_exists('dataset_uuid', $data)) {
            $object->setDatasetUuid($data['dataset_uuid']);
            unset($data['dataset_uuid']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('metrics', $data)) {
            $values = [];
            foreach ($data['metrics'] as $value) {
                $values[] = $value;
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
        if (\array_key_exists('workspace_uuid', $data)) {
            $object->setWorkspaceUuid($data['workspace_uuid']);
            unset($data['workspace_uuid']);
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
        if ($data->isInitialized('agentWorkspaceName') && null !== $data->getAgentWorkspaceName()) {
            $dataArray['agent_workspace_name'] = $data->getAgentWorkspaceName();
        }
        if ($data->isInitialized('datasetUuid') && null !== $data->getDatasetUuid()) {
            $dataArray['dataset_uuid'] = $data->getDatasetUuid();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('metrics') && null !== $data->getMetrics()) {
            $values = [];
            foreach ($data->getMetrics() as $value) {
                $values[] = $value;
            }
            $dataArray['metrics'] = $values;
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('starMetric') && null !== $data->getStarMetric()) {
            $dataArray['star_metric'] = $data->getStarMetric() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getStarMetric(), 'json', $context));
        }
        if ($data->isInitialized('workspaceUuid') && null !== $data->getWorkspaceUuid()) {
            $dataArray['workspace_uuid'] = $data->getWorkspaceUuid();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseInputPublic::class => false];
    }
}