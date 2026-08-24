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
            $object->setAgentUuid($data['agent_uuid']);
            unset($data['agent_uuid']);
        }
        if (\array_key_exists('attached_child_agents', $data)) {
            $values = [];
            foreach ($data['attached_child_agents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiAgentChildRelationshipVerion::class, 'json', $context);
            }
            $object->setAttachedChildAgents($values);
            unset($data['attached_child_agents']);
        }
        if (\array_key_exists('attached_functions', $data)) {
            $values_1 = [];
            foreach ($data['attached_functions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\ApiAgentFunctionVersion::class, 'json', $context);
            }
            $object->setAttachedFunctions($values_1);
            unset($data['attached_functions']);
        }
        if (\array_key_exists('attached_guardrails', $data)) {
            $values_2 = [];
            foreach ($data['attached_guardrails'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\ApiAgentGuardrailVersion::class, 'json', $context);
            }
            $object->setAttachedGuardrails($values_2);
            unset($data['attached_guardrails']);
        }
        if (\array_key_exists('attached_knowledgebases', $data)) {
            $values_3 = [];
            foreach ($data['attached_knowledgebases'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\ApiAgentKnowledgeBaseVersion::class, 'json', $context);
            }
            $object->setAttachedKnowledgebases($values_3);
            unset($data['attached_knowledgebases']);
        }
        if (\array_key_exists('can_rollback', $data)) {
            $object->setCanRollback($data['can_rollback']);
            unset($data['can_rollback']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('created_by_email', $data)) {
            $object->setCreatedByEmail($data['created_by_email']);
            unset($data['created_by_email']);
        }
        if (\array_key_exists('currently_applied', $data)) {
            $object->setCurrentlyApplied($data['currently_applied']);
            unset($data['currently_applied']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
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
        if (\array_key_exists('model_name', $data)) {
            $object->setModelName($data['model_name']);
            unset($data['model_name']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
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
            $values_4 = [];
            foreach ($data['tags'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setTags($values_4);
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
        if (\array_key_exists('trigger_action', $data)) {
            $object->setTriggerAction($data['trigger_action']);
            unset($data['trigger_action']);
        }
        if (\array_key_exists('version_hash', $data)) {
            $object->setVersionHash($data['version_hash']);
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
        if ($data->isInitialized('agentUuid') && null !== $data->getAgentUuid()) {
            $dataArray['agent_uuid'] = $data->getAgentUuid();
        }
        if ($data->isInitialized('attachedChildAgents') && null !== $data->getAttachedChildAgents()) {
            $values = [];
            foreach ($data->getAttachedChildAgents() as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['attached_child_agents'] = $values;
        }
        if ($data->isInitialized('attachedFunctions') && null !== $data->getAttachedFunctions()) {
            $values_1 = [];
            foreach ($data->getAttachedFunctions() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['attached_functions'] = $values_1;
        }
        if ($data->isInitialized('attachedGuardrails') && null !== $data->getAttachedGuardrails()) {
            $values_2 = [];
            foreach ($data->getAttachedGuardrails() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['attached_guardrails'] = $values_2;
        }
        if ($data->isInitialized('attachedKnowledgebases') && null !== $data->getAttachedKnowledgebases()) {
            $values_3 = [];
            foreach ($data->getAttachedKnowledgebases() as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['attached_knowledgebases'] = $values_3;
        }
        if ($data->isInitialized('canRollback') && null !== $data->getCanRollback()) {
            $dataArray['can_rollback'] = $data->getCanRollback();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('createdByEmail') && null !== $data->getCreatedByEmail()) {
            $dataArray['created_by_email'] = $data->getCreatedByEmail();
        }
        if ($data->isInitialized('currentlyApplied') && null !== $data->getCurrentlyApplied()) {
            $dataArray['currently_applied'] = $data->getCurrentlyApplied();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
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
        if ($data->isInitialized('modelName') && null !== $data->getModelName()) {
            $dataArray['model_name'] = $data->getModelName();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('provideCitations') && null !== $data->getProvideCitations()) {
            $dataArray['provide_citations'] = $data->getProvideCitations();
        }
        if ($data->isInitialized('retrievalMethod') && null !== $data->getRetrievalMethod()) {
            $dataArray['retrieval_method'] = $data->getRetrievalMethod();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_4 = [];
            foreach ($data->getTags() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['tags'] = $values_4;
        }
        if ($data->isInitialized('temperature') && null !== $data->getTemperature()) {
            $dataArray['temperature'] = $data->getTemperature();
        }
        if ($data->isInitialized('topP') && null !== $data->getTopP()) {
            $dataArray['top_p'] = $data->getTopP();
        }
        if ($data->isInitialized('triggerAction') && null !== $data->getTriggerAction()) {
            $dataArray['trigger_action'] = $data->getTriggerAction();
        }
        if ($data->isInitialized('versionHash') && null !== $data->getVersionHash()) {
            $dataArray['version_hash'] = $data->getVersionHash();
        }
        foreach ($data as $key => $value_5) {
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