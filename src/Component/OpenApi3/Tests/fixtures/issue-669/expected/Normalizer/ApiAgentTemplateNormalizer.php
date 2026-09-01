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
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('guardrails', $data)) {
            $values = [];
            foreach ($data['guardrails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiAgentTemplateGuardrail::class, 'json', $context);
            }
            $object->guardrails = $values;
            unset($data['guardrails']);
        }
        if (\array_key_exists('instruction', $data)) {
            $object->instruction = $data['instruction'];
            unset($data['instruction']);
        }
        if (\array_key_exists('k', $data)) {
            $object->k = $data['k'];
            unset($data['k']);
        }
        if (\array_key_exists('knowledge_bases', $data)) {
            $values_1 = [];
            foreach ($data['knowledge_bases'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBase::class, 'json', $context);
            }
            $object->knowledgeBases = $values_1;
            unset($data['knowledge_bases']);
        }
        if (\array_key_exists('long_description', $data)) {
            $object->longDescription = $data['long_description'];
            unset($data['long_description']);
        }
        if (\array_key_exists('max_tokens', $data)) {
            $object->maxTokens = $data['max_tokens'];
            unset($data['max_tokens']);
        }
        if (\array_key_exists('model', $data)) {
            $object->model = $this->denormalizer->denormalize($data['model'], \Jane\Generated\DigitalOcean\Model\ApiModel::class, 'json', $context);
            unset($data['model']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('short_description', $data)) {
            $object->shortDescription = $data['short_description'];
            unset($data['short_description']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->summary = $data['summary'];
            unset($data['summary']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_2 = [];
            foreach ($data['tags'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->tags = $values_2;
            unset($data['tags']);
        }
        if (\array_key_exists('temperature', $data)) {
            $object->temperature = $data['temperature'];
            unset($data['temperature']);
        }
        if (\array_key_exists('template_type', $data)) {
            $object->templateType = $data['template_type'];
            unset($data['template_type']);
        }
        if (\array_key_exists('top_p', $data)) {
            $object->topP = $data['top_p'];
            unset($data['top_p']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_1;
            unset($data['updated_at']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
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
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('guardrails', get_object_vars($data)) && null !== ($data->guardrails ?? null)) {
            $values = [];
            foreach ($data->guardrails ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['guardrails'] = $values;
        }
        if (array_key_exists('instruction', get_object_vars($data)) && null !== ($data->instruction ?? null)) {
            $dataArray['instruction'] = $data->instruction ?? null;
        }
        if (array_key_exists('k', get_object_vars($data)) && null !== ($data->k ?? null)) {
            $dataArray['k'] = $data->k ?? null;
        }
        if (array_key_exists('knowledgeBases', get_object_vars($data)) && null !== ($data->knowledgeBases ?? null)) {
            $values_1 = [];
            foreach ($data->knowledgeBases ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['knowledge_bases'] = $values_1;
        }
        if (array_key_exists('longDescription', get_object_vars($data)) && null !== ($data->longDescription ?? null)) {
            $dataArray['long_description'] = $data->longDescription ?? null;
        }
        if (array_key_exists('maxTokens', get_object_vars($data)) && null !== ($data->maxTokens ?? null)) {
            $dataArray['max_tokens'] = $data->maxTokens ?? null;
        }
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = ($data->model ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->model ?? null, 'json', $context));
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('shortDescription', get_object_vars($data)) && null !== ($data->shortDescription ?? null)) {
            $dataArray['short_description'] = $data->shortDescription ?? null;
        }
        if (array_key_exists('summary', get_object_vars($data)) && null !== ($data->summary ?? null)) {
            $dataArray['summary'] = $data->summary ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values_2 = [];
            foreach ($data->tags ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['tags'] = $values_2;
        }
        if (array_key_exists('temperature', get_object_vars($data)) && null !== ($data->temperature ?? null)) {
            $dataArray['temperature'] = $data->temperature ?? null;
        }
        if (array_key_exists('templateType', get_object_vars($data)) && null !== ($data->templateType ?? null)) {
            $dataArray['template_type'] = $data->templateType ?? null;
        }
        if (array_key_exists('topP', get_object_vars($data)) && null !== ($data->topP ?? null)) {
            $dataArray['top_p'] = $data->topP ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('uuid', get_object_vars($data)) && null !== ($data->uuid ?? null)) {
            $dataArray['uuid'] = $data->uuid ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
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