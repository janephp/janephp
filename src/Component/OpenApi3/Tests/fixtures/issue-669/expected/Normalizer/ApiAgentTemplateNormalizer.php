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
class ApiAgentTemplateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiAgentTemplate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiAgentTemplate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiAgentTemplate();
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
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('guardrails', $data)) {
            $values = [];
            foreach ($data['guardrails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiAgentTemplateGuardrail::class, 'json', $context);
            }
            $object->setGuardrails($values);
            unset($data['guardrails']);
        }
        if (\array_key_exists('instruction', $data)) {
            $object->setInstruction($data['instruction']);
            unset($data['instruction']);
        }
        if (\array_key_exists('k', $data)) {
            $object->setK($data['k']);
            unset($data['k']);
        }
        if (\array_key_exists('knowledge_bases', $data)) {
            $values_1 = [];
            foreach ($data['knowledge_bases'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBase::class, 'json', $context);
            }
            $object->setKnowledgeBases($values_1);
            unset($data['knowledge_bases']);
        }
        if (\array_key_exists('long_description', $data)) {
            $object->setLongDescription($data['long_description']);
            unset($data['long_description']);
        }
        if (\array_key_exists('max_tokens', $data)) {
            $object->setMaxTokens($data['max_tokens']);
            unset($data['max_tokens']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($this->denormalizer->denormalize($data['model'], \Jane\Generated\DigitalOcean\Model\ApiModel::class, 'json', $context));
            unset($data['model']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('short_description', $data)) {
            $object->setShortDescription($data['short_description']);
            unset($data['short_description']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
            unset($data['summary']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_2 = [];
            foreach ($data['tags'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTags($values_2);
            unset($data['tags']);
        }
        if (\array_key_exists('temperature', $data)) {
            $object->setTemperature($data['temperature']);
            unset($data['temperature']);
        }
        if (\array_key_exists('template_type', $data)) {
            $object->setTemplateType($data['template_type']);
            unset($data['template_type']);
        }
        if (\array_key_exists('top_p', $data)) {
            $object->setTopP($data['top_p']);
            unset($data['top_p']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
            unset($data['uuid']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('guardrails') && null !== $data->getGuardrails()) {
            $values = [];
            foreach ($data->getGuardrails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['guardrails'] = $values;
        }
        if ($data->isInitialized('instruction') && null !== $data->getInstruction()) {
            $dataArray['instruction'] = $data->getInstruction();
        }
        if ($data->isInitialized('k') && null !== $data->getK()) {
            $dataArray['k'] = $data->getK();
        }
        if ($data->isInitialized('knowledgeBases') && null !== $data->getKnowledgeBases()) {
            $values_1 = [];
            foreach ($data->getKnowledgeBases() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['knowledge_bases'] = $values_1;
        }
        if ($data->isInitialized('longDescription') && null !== $data->getLongDescription()) {
            $dataArray['long_description'] = $data->getLongDescription();
        }
        if ($data->isInitialized('maxTokens') && null !== $data->getMaxTokens()) {
            $dataArray['max_tokens'] = $data->getMaxTokens();
        }
        if ($data->isInitialized('model') && null !== $data->getModel()) {
            $dataArray['model'] = $this->normalizer->normalize($data->getModel(), 'json', $context);
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('shortDescription') && null !== $data->getShortDescription()) {
            $dataArray['short_description'] = $data->getShortDescription();
        }
        if ($data->isInitialized('summary') && null !== $data->getSummary()) {
            $dataArray['summary'] = $data->getSummary();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_2 = [];
            foreach ($data->getTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['tags'] = $values_2;
        }
        if ($data->isInitialized('temperature') && null !== $data->getTemperature()) {
            $dataArray['temperature'] = $data->getTemperature();
        }
        if ($data->isInitialized('templateType') && null !== $data->getTemplateType()) {
            $dataArray['template_type'] = $data->getTemplateType();
        }
        if ($data->isInitialized('topP') && null !== $data->getTopP()) {
            $dataArray['top_p'] = $data->getTopP();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('uuid') && null !== $data->getUuid()) {
            $dataArray['uuid'] = $data->getUuid();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiAgentTemplate::class => false];
    }
}
