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
class ApiCreateAgentInputPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiCreateAgentInputPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiCreateAgentInputPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiCreateAgentInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('anthropic_key_uuid', $data)) {
            $object->setAnthropicKeyUuid($data['anthropic_key_uuid']);
            unset($data['anthropic_key_uuid']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('instruction', $data)) {
            $object->setInstruction($data['instruction']);
            unset($data['instruction']);
        }
        if (\array_key_exists('knowledge_base_uuid', $data)) {
            $values = [];
            foreach ($data['knowledge_base_uuid'] as $value) {
                $values[] = $value;
            }
            $object->setKnowledgeBaseUuid($values);
            unset($data['knowledge_base_uuid']);
        }
        if (\array_key_exists('model_provider_key_uuid', $data)) {
            $object->setModelProviderKeyUuid($data['model_provider_key_uuid']);
            unset($data['model_provider_key_uuid']);
        }
        if (\array_key_exists('model_uuid', $data)) {
            $object->setModelUuid($data['model_uuid']);
            unset($data['model_uuid']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('open_ai_key_uuid', $data)) {
            $object->setOpenAiKeyUuid($data['open_ai_key_uuid']);
            unset($data['open_ai_key_uuid']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
            unset($data['project_id']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
            unset($data['region']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTags($values_1);
            unset($data['tags']);
        }
        if (\array_key_exists('workspace_uuid', $data)) {
            $object->setWorkspaceUuid($data['workspace_uuid']);
            unset($data['workspace_uuid']);
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
        if ($data->isInitialized('anthropicKeyUuid') && null !== $data->getAnthropicKeyUuid()) {
            $dataArray['anthropic_key_uuid'] = $data->getAnthropicKeyUuid();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('instruction') && null !== $data->getInstruction()) {
            $dataArray['instruction'] = $data->getInstruction();
        }
        if ($data->isInitialized('knowledgeBaseUuid') && null !== $data->getKnowledgeBaseUuid()) {
            $values = [];
            foreach ($data->getKnowledgeBaseUuid() as $value) {
                $values[] = $value;
            }
            $dataArray['knowledge_base_uuid'] = $values;
        }
        if ($data->isInitialized('modelProviderKeyUuid') && null !== $data->getModelProviderKeyUuid()) {
            $dataArray['model_provider_key_uuid'] = $data->getModelProviderKeyUuid();
        }
        if ($data->isInitialized('modelUuid') && null !== $data->getModelUuid()) {
            $dataArray['model_uuid'] = $data->getModelUuid();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('openAiKeyUuid') && null !== $data->getOpenAiKeyUuid()) {
            $dataArray['open_ai_key_uuid'] = $data->getOpenAiKeyUuid();
        }
        if ($data->isInitialized('projectId') && null !== $data->getProjectId()) {
            $dataArray['project_id'] = $data->getProjectId();
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $data->getRegion();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_1 = [];
            foreach ($data->getTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if ($data->isInitialized('workspaceUuid') && null !== $data->getWorkspaceUuid()) {
            $dataArray['workspace_uuid'] = $data->getWorkspaceUuid();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiCreateAgentInputPublic::class => false];
    }
}