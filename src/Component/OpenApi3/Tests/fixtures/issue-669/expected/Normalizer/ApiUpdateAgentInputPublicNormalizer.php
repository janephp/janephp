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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentInputPublic();
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (double) $data['temperature'];
        }
        if (\array_key_exists('top_p', $data) && \is_int($data['top_p'])) {
            $data['top_p'] = (double) $data['top_p'];
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('agent_log_insights_enabled', $data)) {
            $object->setAgentLogInsightsEnabled($data['agent_log_insights_enabled']);
            unset($data['agent_log_insights_enabled']);
        }
        if (\array_key_exists('allowed_domains', $data)) {
            $values = [];
            foreach ($data['allowed_domains'] as $value) {
                $values[] = $value;
            }
            $object->setAllowedDomains($values);
            unset($data['allowed_domains']);
        }
        if (\array_key_exists('anthropic_key_uuid', $data)) {
            $object->setAnthropicKeyUuid($data['anthropic_key_uuid']);
            unset($data['anthropic_key_uuid']);
        }
        if (\array_key_exists('conversation_logs_enabled', $data)) {
            $object->setConversationLogsEnabled($data['conversation_logs_enabled']);
            unset($data['conversation_logs_enabled']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('instruction', $data)) {
            $object->setInstruction($data['instruction']);
            unset($data['instruction']);
        }
        if (\array_key_exists('k', $data)) {
            $object->setK($data['k']);
            unset($data['k']);
        }
        if (\array_key_exists('max_tokens', $data)) {
            $object->setMaxTokens($data['max_tokens']);
            unset($data['max_tokens']);
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
        if (\array_key_exists('provide_citations', $data)) {
            $object->setProvideCitations($data['provide_citations']);
            unset($data['provide_citations']);
        }
        if (\array_key_exists('retrieval_method', $data)) {
            $object->setRetrievalMethod($data['retrieval_method']);
            unset($data['retrieval_method']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTags($values_1);
            unset($data['tags']);
        }
        if (\array_key_exists('temperature', $data)) {
            $object->setTemperature($data['temperature']);
            unset($data['temperature']);
        }
        if (\array_key_exists('top_p', $data)) {
            $object->setTopP($data['top_p']);
            unset($data['top_p']);
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
        if ($data->isInitialized('agentLogInsightsEnabled') && null !== $data->getAgentLogInsightsEnabled()) {
            $dataArray['agent_log_insights_enabled'] = $data->getAgentLogInsightsEnabled();
        }
        if ($data->isInitialized('allowedDomains') && null !== $data->getAllowedDomains()) {
            $values = [];
            foreach ($data->getAllowedDomains() as $value) {
                $values[] = $value;
            }
            $dataArray['allowed_domains'] = $values;
        }
        if ($data->isInitialized('anthropicKeyUuid') && null !== $data->getAnthropicKeyUuid()) {
            $dataArray['anthropic_key_uuid'] = $data->getAnthropicKeyUuid();
        }
        if ($data->isInitialized('conversationLogsEnabled') && null !== $data->getConversationLogsEnabled()) {
            $dataArray['conversation_logs_enabled'] = $data->getConversationLogsEnabled();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('instruction') && null !== $data->getInstruction()) {
            $dataArray['instruction'] = $data->getInstruction();
        }
        if ($data->isInitialized('k') && null !== $data->getK()) {
            $dataArray['k'] = $data->getK();
        }
        if ($data->isInitialized('maxTokens') && null !== $data->getMaxTokens()) {
            $dataArray['max_tokens'] = $data->getMaxTokens();
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
        if ($data->isInitialized('provideCitations') && null !== $data->getProvideCitations()) {
            $dataArray['provide_citations'] = $data->getProvideCitations();
        }
        if ($data->isInitialized('retrievalMethod') && null !== $data->getRetrievalMethod()) {
            $dataArray['retrieval_method'] = $data->getRetrievalMethod();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_1 = [];
            foreach ($data->getTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if ($data->isInitialized('temperature') && null !== $data->getTemperature()) {
            $dataArray['temperature'] = $data->getTemperature();
        }
        if ($data->isInitialized('topP') && null !== $data->getTopP()) {
            $dataArray['top_p'] = $data->getTopP();
        }
        if ($data->isInitialized('uuid') && null !== $data->getUuid()) {
            $dataArray['uuid'] = $data->getUuid();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiUpdateAgentInputPublic::class => false];
    }
}