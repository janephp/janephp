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
class ApiEvaluationTraceSpanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiEvaluationTraceSpan::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiEvaluationTraceSpan::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiEvaluationTraceSpan();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('input', $data)) {
            $values = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data['input'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->input = $values;
            unset($data['input']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('output', $data)) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data['output'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->output = $values_1;
            unset($data['output']);
        }
        if (\array_key_exists('retriever_chunks', $data)) {
            $values_2 = [];
            foreach ($data['retriever_chunks'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\ApiPromptChunk::class, 'json', $context);
            }
            $object->retrieverChunks = $values_2;
            unset($data['retriever_chunks']);
        }
        if (\array_key_exists('span_level_metric_results', $data)) {
            $values_3 = [];
            foreach ($data['span_level_metric_results'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class, 'json', $context);
            }
            $object->spanLevelMetricResults = $values_3;
            unset($data['span_level_metric_results']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_4;
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
        if (array_key_exists('input', get_object_vars($data)) && null !== ($data->input ?? null)) {
            $values = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data->input ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['input'] = $values;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('output', get_object_vars($data)) && null !== ($data->output ?? null)) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data->output ?? null as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['output'] = $values_1;
        }
        if (array_key_exists('retrieverChunks', get_object_vars($data)) && null !== ($data->retrieverChunks ?? null)) {
            $values_2 = [];
            foreach ($data->retrieverChunks ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['retriever_chunks'] = $values_2;
        }
        if (array_key_exists('spanLevelMetricResults', get_object_vars($data)) && null !== ($data->spanLevelMetricResults ?? null)) {
            $values_3 = [];
            foreach ($data->spanLevelMetricResults ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['span_level_metric_results'] = $values_3;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiEvaluationTraceSpan::class => false];
    }
}