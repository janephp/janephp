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
class ApiUpdateAgentInputPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentInputPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentInputPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (float) $data['temperature'];
        }
        if (\array_key_exists('top_p', $data) && \is_int($data['top_p'])) {
            $data['top_p'] = (float) $data['top_p'];
        }
        if (\array_key_exists('agent_log_insights_enabled', $data) && \is_int($data['agent_log_insights_enabled'])) {
            $data['agent_log_insights_enabled'] = (bool) $data['agent_log_insights_enabled'];
        }
        if (\array_key_exists('conversation_logs_enabled', $data) && \is_int($data['conversation_logs_enabled'])) {
            $data['conversation_logs_enabled'] = (bool) $data['conversation_logs_enabled'];
        }
        if (\array_key_exists('provide_citations', $data) && \is_int($data['provide_citations'])) {
            $data['provide_citations'] = (bool) $data['provide_citations'];
        }
        if (\array_key_exists('agent_log_insights_enabled', $data)) {
            $object->agentLogInsightsEnabled = $data['agent_log_insights_enabled'];
            unset($data['agent_log_insights_enabled']);
        }
        if (\array_key_exists('allowed_domains', $data)) {
            $values = [];
            foreach ($data['allowed_domains'] as $value) {
                $values[] = $value;
            }
            $object->allowedDomains = $values;
            unset($data['allowed_domains']);
        }
        if (\array_key_exists('anthropic_key_uuid', $data)) {
            $object->anthropicKeyUuid = $data['anthropic_key_uuid'];
            unset($data['anthropic_key_uuid']);
        }
        if (\array_key_exists('conversation_logs_enabled', $data)) {
            $object->conversationLogsEnabled = $data['conversation_logs_enabled'];
            unset($data['conversation_logs_enabled']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('instruction', $data)) {
            $object->instruction = $data['instruction'];
            unset($data['instruction']);
        }
        if (\array_key_exists('k', $data)) {
            $object->k = $data['k'];
            unset($data['k']);
        }
        if (\array_key_exists('max_tokens', $data)) {
            $object->maxTokens = $data['max_tokens'];
            unset($data['max_tokens']);
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
        if (\array_key_exists('provide_citations', $data)) {
            $object->provideCitations = $data['provide_citations'];
            unset($data['provide_citations']);
        }
        if (\array_key_exists('retrieval_method', $data)) {
            $object->retrievalMethod = $data['retrieval_method'];
            unset($data['retrieval_method']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->tags = $values_1;
            unset($data['tags']);
        }
        if (\array_key_exists('temperature', $data)) {
            $object->temperature = $data['temperature'];
            unset($data['temperature']);
        }
        if (\array_key_exists('top_p', $data)) {
            $object->topP = $data['top_p'];
            unset($data['top_p']);
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
        if (array_key_exists('agentLogInsightsEnabled', get_object_vars($data)) && null !== ($data->agentLogInsightsEnabled ?? null)) {
            $dataArray['agent_log_insights_enabled'] = $data->agentLogInsightsEnabled ?? null;
        }
        if (array_key_exists('allowedDomains', get_object_vars($data)) && null !== ($data->allowedDomains ?? null)) {
            $values = [];
            foreach ($data->allowedDomains ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['allowed_domains'] = $values;
        }
        if (array_key_exists('anthropicKeyUuid', get_object_vars($data)) && null !== ($data->anthropicKeyUuid ?? null)) {
            $dataArray['anthropic_key_uuid'] = $data->anthropicKeyUuid ?? null;
        }
        if (array_key_exists('conversationLogsEnabled', get_object_vars($data)) && null !== ($data->conversationLogsEnabled ?? null)) {
            $dataArray['conversation_logs_enabled'] = $data->conversationLogsEnabled ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('instruction', get_object_vars($data)) && null !== ($data->instruction ?? null)) {
            $dataArray['instruction'] = $data->instruction ?? null;
        }
        if (array_key_exists('k', get_object_vars($data)) && null !== ($data->k ?? null)) {
            $dataArray['k'] = $data->k ?? null;
        }
        if (array_key_exists('maxTokens', get_object_vars($data)) && null !== ($data->maxTokens ?? null)) {
            $dataArray['max_tokens'] = $data->maxTokens ?? null;
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
        if (array_key_exists('provideCitations', get_object_vars($data)) && null !== ($data->provideCitations ?? null)) {
            $dataArray['provide_citations'] = $data->provideCitations ?? null;
        }
        if (array_key_exists('retrievalMethod', get_object_vars($data)) && null !== ($data->retrievalMethod ?? null)) {
            $dataArray['retrieval_method'] = $data->retrievalMethod ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values_1 = [];
            foreach ($data->tags ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if (array_key_exists('temperature', get_object_vars($data)) && null !== ($data->temperature ?? null)) {
            $dataArray['temperature'] = $data->temperature ?? null;
        }
        if (array_key_exists('topP', get_object_vars($data)) && null !== ($data->topP ?? null)) {
            $dataArray['top_p'] = $data->topP ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentInputPublic::class => false];
    }
}