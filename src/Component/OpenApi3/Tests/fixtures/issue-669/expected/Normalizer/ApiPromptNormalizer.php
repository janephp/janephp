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
class ApiPromptNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiPrompt::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiPrompt::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiPrompt();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('evaluation_trace_spans', $data)) {
            $values = [];
            foreach ($data['evaluation_trace_spans'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiEvaluationTraceSpan::class, 'json', $context);
            }
            $object->evaluationTraceSpans = $values;
            unset($data['evaluation_trace_spans']);
        }
        if (\array_key_exists('ground_truth', $data)) {
            $object->groundTruth = $data['ground_truth'];
            unset($data['ground_truth']);
        }
        if (\array_key_exists('input', $data)) {
            $object->input = $data['input'];
            unset($data['input']);
        }
        if (\array_key_exists('input_tokens', $data)) {
            $object->inputTokens = $data['input_tokens'];
            unset($data['input_tokens']);
        }
        if (\array_key_exists('output', $data)) {
            $object->output = $data['output'];
            unset($data['output']);
        }
        if (\array_key_exists('output_tokens', $data)) {
            $object->outputTokens = $data['output_tokens'];
            unset($data['output_tokens']);
        }
        if (\array_key_exists('prompt_chunks', $data)) {
            $values_1 = [];
            foreach ($data['prompt_chunks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\ApiPromptChunk::class, 'json', $context);
            }
            $object->promptChunks = $values_1;
            unset($data['prompt_chunks']);
        }
        if (\array_key_exists('prompt_id', $data)) {
            $object->promptId = $data['prompt_id'];
            unset($data['prompt_id']);
        }
        if (\array_key_exists('prompt_level_metric_results', $data)) {
            $values_2 = [];
            foreach ($data['prompt_level_metric_results'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class, 'json', $context);
            }
            $object->promptLevelMetricResults = $values_2;
            unset($data['prompt_level_metric_results']);
        }
        if (\array_key_exists('trace_id', $data)) {
            $object->traceId = $data['trace_id'];
            unset($data['trace_id']);
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
        if (array_key_exists('evaluationTraceSpans', get_object_vars($data)) && null !== ($data->evaluationTraceSpans ?? null)) {
            $values = [];
            foreach ($data->evaluationTraceSpans ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['evaluation_trace_spans'] = $values;
        }
        if (array_key_exists('groundTruth', get_object_vars($data)) && null !== ($data->groundTruth ?? null)) {
            $dataArray['ground_truth'] = $data->groundTruth ?? null;
        }
        if (array_key_exists('input', get_object_vars($data)) && null !== ($data->input ?? null)) {
            $dataArray['input'] = $data->input ?? null;
        }
        if (array_key_exists('inputTokens', get_object_vars($data)) && null !== ($data->inputTokens ?? null)) {
            $dataArray['input_tokens'] = $data->inputTokens ?? null;
        }
        if (array_key_exists('output', get_object_vars($data)) && null !== ($data->output ?? null)) {
            $dataArray['output'] = $data->output ?? null;
        }
        if (array_key_exists('outputTokens', get_object_vars($data)) && null !== ($data->outputTokens ?? null)) {
            $dataArray['output_tokens'] = $data->outputTokens ?? null;
        }
        if (array_key_exists('promptChunks', get_object_vars($data)) && null !== ($data->promptChunks ?? null)) {
            $values_1 = [];
            foreach ($data->promptChunks ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['prompt_chunks'] = $values_1;
        }
        if (array_key_exists('promptId', get_object_vars($data)) && null !== ($data->promptId ?? null)) {
            $dataArray['prompt_id'] = $data->promptId ?? null;
        }
        if (array_key_exists('promptLevelMetricResults', get_object_vars($data)) && null !== ($data->promptLevelMetricResults ?? null)) {
            $values_2 = [];
            foreach ($data->promptLevelMetricResults ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['prompt_level_metric_results'] = $values_2;
        }
        if (array_key_exists('traceId', get_object_vars($data)) && null !== ($data->traceId ?? null)) {
            $dataArray['trace_id'] = $data->traceId ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiPrompt::class => false];
    }
}