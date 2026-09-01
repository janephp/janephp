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
        $object = new \Jane\Generated\DigitalOcean\Model\ApiCreateAgentInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('anthropic_key_uuid', $data)) {
            $object->anthropicKeyUuid = $data['anthropic_key_uuid'];
            unset($data['anthropic_key_uuid']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('instruction', $data)) {
            $object->instruction = $data['instruction'];
            unset($data['instruction']);
        }
        if (\array_key_exists('knowledge_base_uuid', $data)) {
            $values = [];
            foreach ($data['knowledge_base_uuid'] as $value) {
                $values[] = $value;
            }
            $object->knowledgeBaseUuid = $values;
            unset($data['knowledge_base_uuid']);
        }
        if (\array_key_exists('model_provider_key_uuid', $data)) {
            $object->modelProviderKeyUuid = $data['model_provider_key_uuid'];
            unset($data['model_provider_key_uuid']);
        }
        if (\array_key_exists('model_uuid', $data)) {
            $object->modelUuid = $data['model_uuid'];
            unset($data['model_uuid']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('open_ai_key_uuid', $data)) {
            $object->openAiKeyUuid = $data['open_ai_key_uuid'];
            unset($data['open_ai_key_uuid']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->projectId = $data['project_id'];
            unset($data['project_id']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->tags = $values_1;
            unset($data['tags']);
        }
        if (\array_key_exists('workspace_uuid', $data)) {
            $object->workspaceUuid = $data['workspace_uuid'];
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
        if (array_key_exists('anthropicKeyUuid', get_object_vars($data)) && null !== ($data->anthropicKeyUuid ?? null)) {
            $dataArray['anthropic_key_uuid'] = $data->anthropicKeyUuid ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('instruction', get_object_vars($data)) && null !== ($data->instruction ?? null)) {
            $dataArray['instruction'] = $data->instruction ?? null;
        }
        if (array_key_exists('knowledgeBaseUuid', get_object_vars($data)) && null !== ($data->knowledgeBaseUuid ?? null)) {
            $values = [];
            foreach ($data->knowledgeBaseUuid ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['knowledge_base_uuid'] = $values;
        }
        if (array_key_exists('modelProviderKeyUuid', get_object_vars($data)) && null !== ($data->modelProviderKeyUuid ?? null)) {
            $dataArray['model_provider_key_uuid'] = $data->modelProviderKeyUuid ?? null;
        }
        if (array_key_exists('modelUuid', get_object_vars($data)) && null !== ($data->modelUuid ?? null)) {
            $dataArray['model_uuid'] = $data->modelUuid ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('openAiKeyUuid', get_object_vars($data)) && null !== ($data->openAiKeyUuid ?? null)) {
            $dataArray['open_ai_key_uuid'] = $data->openAiKeyUuid ?? null;
        }
        if (array_key_exists('projectId', get_object_vars($data)) && null !== ($data->projectId ?? null)) {
            $dataArray['project_id'] = $data->projectId ?? null;
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values_1 = [];
            foreach ($data->tags ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if (array_key_exists('workspaceUuid', get_object_vars($data)) && null !== ($data->workspaceUuid ?? null)) {
            $dataArray['workspace_uuid'] = $data->workspaceUuid ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiCreateAgentInputPublic::class => false];
    }
}