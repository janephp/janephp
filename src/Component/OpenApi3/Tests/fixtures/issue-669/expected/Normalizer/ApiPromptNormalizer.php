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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiPrompt();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('evaluation_trace_spans', $data)) {
            $values = [];
            foreach ($data['evaluation_trace_spans'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiEvaluationTraceSpan::class, 'json', $context);
            }
            $object->setEvaluationTraceSpans($values);
            unset($data['evaluation_trace_spans']);
        }
        if (\array_key_exists('ground_truth', $data)) {
            $object->setGroundTruth($data['ground_truth']);
            unset($data['ground_truth']);
        }
        if (\array_key_exists('input', $data)) {
            $object->setInput($data['input']);
            unset($data['input']);
        }
        if (\array_key_exists('input_tokens', $data)) {
            $object->setInputTokens($data['input_tokens']);
            unset($data['input_tokens']);
        }
        if (\array_key_exists('output', $data)) {
            $object->setOutput($data['output']);
            unset($data['output']);
        }
        if (\array_key_exists('output_tokens', $data)) {
            $object->setOutputTokens($data['output_tokens']);
            unset($data['output_tokens']);
        }
        if (\array_key_exists('prompt_chunks', $data)) {
            $values_1 = [];
            foreach ($data['prompt_chunks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\ApiPromptChunk::class, 'json', $context);
            }
            $object->setPromptChunks($values_1);
            unset($data['prompt_chunks']);
        }
        if (\array_key_exists('prompt_id', $data)) {
            $object->setPromptId($data['prompt_id']);
            unset($data['prompt_id']);
        }
        if (\array_key_exists('prompt_level_metric_results', $data)) {
            $values_2 = [];
            foreach ($data['prompt_level_metric_results'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class, 'json', $context);
            }
            $object->setPromptLevelMetricResults($values_2);
            unset($data['prompt_level_metric_results']);
        }
        if (\array_key_exists('trace_id', $data)) {
            $object->setTraceId($data['trace_id']);
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
        if ($data->isInitialized('evaluationTraceSpans') && null !== $data->getEvaluationTraceSpans()) {
            $values = [];
            foreach ($data->getEvaluationTraceSpans() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['evaluation_trace_spans'] = $values;
        }
        if ($data->isInitialized('groundTruth') && null !== $data->getGroundTruth()) {
            $dataArray['ground_truth'] = $data->getGroundTruth();
        }
        if ($data->isInitialized('input') && null !== $data->getInput()) {
            $dataArray['input'] = $data->getInput();
        }
        if ($data->isInitialized('inputTokens') && null !== $data->getInputTokens()) {
            $dataArray['input_tokens'] = $data->getInputTokens();
        }
        if ($data->isInitialized('output') && null !== $data->getOutput()) {
            $dataArray['output'] = $data->getOutput();
        }
        if ($data->isInitialized('outputTokens') && null !== $data->getOutputTokens()) {
            $dataArray['output_tokens'] = $data->getOutputTokens();
        }
        if ($data->isInitialized('promptChunks') && null !== $data->getPromptChunks()) {
            $values_1 = [];
            foreach ($data->getPromptChunks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['prompt_chunks'] = $values_1;
        }
        if ($data->isInitialized('promptId') && null !== $data->getPromptId()) {
            $dataArray['prompt_id'] = $data->getPromptId();
        }
        if ($data->isInitialized('promptLevelMetricResults') && null !== $data->getPromptLevelMetricResults()) {
            $values_2 = [];
            foreach ($data->getPromptLevelMetricResults() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['prompt_level_metric_results'] = $values_2;
        }
        if ($data->isInitialized('traceId') && null !== $data->getTraceId()) {
            $dataArray['trace_id'] = $data->getTraceId();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiPrompt::class => false];
    }
}