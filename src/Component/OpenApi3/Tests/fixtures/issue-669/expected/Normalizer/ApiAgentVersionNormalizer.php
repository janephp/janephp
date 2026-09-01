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
class ApiAgentVersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiAgentVersion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiAgentVersion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiAgentVersion();
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
        if (\array_key_exists('can_rollback', $data) && \is_int($data['can_rollback'])) {
            $data['can_rollback'] = (bool) $data['can_rollback'];
        }
        if (\array_key_exists('currently_applied', $data) && \is_int($data['currently_applied'])) {
            $data['currently_applied'] = (bool) $data['currently_applied'];
        }
        if (\array_key_exists('provide_citations', $data) && \is_int($data['provide_citations'])) {
            $data['provide_citations'] = (bool) $data['provide_citations'];
        }
        if (\array_key_exists('agent_uuid', $data)) {
            $object->agentUuid = $data['agent_uuid'];
            unset($data['agent_uuid']);
        }
        if (\array_key_exists('attached_child_agents', $data)) {
            $values = [];
            foreach ($data['attached_child_agents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiAgentChildRelationshipVerion::class, 'json', $context);
            }
            $object->attachedChildAgents = $values;
            unset($data['attached_child_agents']);
        }
        if (\array_key_exists('attached_functions', $data)) {
            $values_1 = [];
            foreach ($data['attached_functions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\ApiAgentFunctionVersion::class, 'json', $context);
            }
            $object->attachedFunctions = $values_1;
            unset($data['attached_functions']);
        }
        if (\array_key_exists('attached_guardrails', $data)) {
            $values_2 = [];
            foreach ($data['attached_guardrails'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\ApiAgentGuardrailVersion::class, 'json', $context);
            }
            $object->attachedGuardrails = $values_2;
            unset($data['attached_guardrails']);
        }
        if (\array_key_exists('attached_knowledgebases', $data)) {
            $values_3 = [];
            foreach ($data['attached_knowledgebases'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\ApiAgentKnowledgeBaseVersion::class, 'json', $context);
            }
            $object->attachedKnowledgebases = $values_3;
            unset($data['attached_knowledgebases']);
        }
        if (\array_key_exists('can_rollback', $data)) {
            $object->canRollback = $data['can_rollback'];
            unset($data['can_rollback']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('created_by_email', $data)) {
            $object->createdByEmail = $data['created_by_email'];
            unset($data['created_by_email']);
        }
        if (\array_key_exists('currently_applied', $data)) {
            $object->currentlyApplied = $data['currently_applied'];
            unset($data['currently_applied']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
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
        if (\array_key_exists('model_name', $data)) {
            $object->modelName = $data['model_name'];
            unset($data['model_name']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
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
            $values_4 = [];
            foreach ($data['tags'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->tags = $values_4;
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
        if (\array_key_exists('trigger_action', $data)) {
            $object->triggerAction = $data['trigger_action'];
            unset($data['trigger_action']);
        }
        if (\array_key_exists('version_hash', $data)) {
            $object->versionHash = $data['version_hash'];
            unset($data['version_hash']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('agentUuid', get_object_vars($data)) && null !== ($data->agentUuid ?? null)) {
            $dataArray['agent_uuid'] = $data->agentUuid ?? null;
        }
        if (array_key_exists('attachedChildAgents', get_object_vars($data)) && null !== ($data->attachedChildAgents ?? null)) {
            $values = [];
            foreach ($data->attachedChildAgents ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['attached_child_agents'] = $values;
        }
        if (array_key_exists('attachedFunctions', get_object_vars($data)) && null !== ($data->attachedFunctions ?? null)) {
            $values_1 = [];
            foreach ($data->attachedFunctions ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['attached_functions'] = $values_1;
        }
        if (array_key_exists('attachedGuardrails', get_object_vars($data)) && null !== ($data->attachedGuardrails ?? null)) {
            $values_2 = [];
            foreach ($data->attachedGuardrails ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['attached_guardrails'] = $values_2;
        }
        if (array_key_exists('attachedKnowledgebases', get_object_vars($data)) && null !== ($data->attachedKnowledgebases ?? null)) {
            $values_3 = [];
            foreach ($data->attachedKnowledgebases ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['attached_knowledgebases'] = $values_3;
        }
        if (array_key_exists('canRollback', get_object_vars($data)) && null !== ($data->canRollback ?? null)) {
            $dataArray['can_rollback'] = $data->canRollback ?? null;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('createdByEmail', get_object_vars($data)) && null !== ($data->createdByEmail ?? null)) {
            $dataArray['created_by_email'] = $data->createdByEmail ?? null;
        }
        if (array_key_exists('currentlyApplied', get_object_vars($data)) && null !== ($data->currentlyApplied ?? null)) {
            $dataArray['currently_applied'] = $data->currentlyApplied ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
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
        if (array_key_exists('modelName', get_object_vars($data)) && null !== ($data->modelName ?? null)) {
            $dataArray['model_name'] = $data->modelName ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('provideCitations', get_object_vars($data)) && null !== ($data->provideCitations ?? null)) {
            $dataArray['provide_citations'] = $data->provideCitations ?? null;
        }
        if (array_key_exists('retrievalMethod', get_object_vars($data)) && null !== ($data->retrievalMethod ?? null)) {
            $dataArray['retrieval_method'] = $data->retrievalMethod ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values_4 = [];
            foreach ($data->tags ?? null as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['tags'] = $values_4;
        }
        if (array_key_exists('temperature', get_object_vars($data)) && null !== ($data->temperature ?? null)) {
            $dataArray['temperature'] = $data->temperature ?? null;
        }
        if (array_key_exists('topP', get_object_vars($data)) && null !== ($data->topP ?? null)) {
            $dataArray['top_p'] = $data->topP ?? null;
        }
        if (array_key_exists('triggerAction', get_object_vars($data)) && null !== ($data->triggerAction ?? null)) {
            $dataArray['trigger_action'] = $data->triggerAction ?? null;
        }
        if (array_key_exists('versionHash', get_object_vars($data)) && null !== ($data->versionHash ?? null)) {
            $dataArray['version_hash'] = $data->versionHash ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiAgentVersion::class => false];
    }
}