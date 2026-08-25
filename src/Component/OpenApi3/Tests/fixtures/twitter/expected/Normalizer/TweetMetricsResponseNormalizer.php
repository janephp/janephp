<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TweetMetricsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\TweetMetricsResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\TweetMetricsResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\TweetMetricsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\TweetMetrics::class, 'json', $context);
            }
            $object->setData($values);
            unset($data['data']);
        }
        if (\array_key_exists('errors', $data)) {
            $values_1 = [];
            foreach ($data['errors'] as $value_1) {
                $value_2 = $value_1;
                if (is_array($value_1) and \array_key_exists('status', $value_1) and (isset($value_1['type']) and $value_1['type'] == 'about:blank')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\GenericProblem::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/invalid-request')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRequestProblem::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/client-forbidden')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ClientForbiddenProblem::class, 'json', $context);
                } elseif (is_array($value_1) and \array_key_exists('parameter', $value_1) and \array_key_exists('value', $value_1) and (\array_key_exists('resource_type', $value_1) and ($value_1['resource_type'] == 'user' or $value_1['resource_type'] == 'tweet')) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/resource-not-found')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ResourceNotFoundProblem::class, 'json', $context);
                } elseif (is_array($value_1) and \array_key_exists('resource_id', $value_1) and (\array_key_exists('resource_type', $value_1) and $value_1['resource_type'] == 'tweet') and (\array_key_exists('section', $value_1) and ($value_1['section'] == 'data' or $value_1['section'] == 'includes')) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/not-authorized-for-resource')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ResourceUnauthorizedProblem::class, 'json', $context);
                } elseif (is_array($value_1) and \array_key_exists('resource_id', $value_1) and (\array_key_exists('resource_type', $value_1) and $value_1['resource_type'] == 'tweet') and (\array_key_exists('section', $value_1) and ($value_1['section'] == 'data' or $value_1['section'] == 'includes')) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/disallowed-resource')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\DisallowedResourceProblem::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/unsupported-authentication')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\UnsupportedAuthenticationProblem::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/usage-capped')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\UsageCapExceededProblem::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/streaming-connection')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ConnectionExceptionProblem::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/client-disconnected')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ClientDisconnectedProblem::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/operational-disconnect')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\OperationalDisconnectProblem::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/rule-cap')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\RulesCapProblem::class, 'json', $context);
                } elseif (is_array($value_1) and (isset($value_1['type']) and $value_1['type'] == 'https://api.twitter.com/labs/1/problems/invalid-rules')) {
                    $value_2 = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRuleProblem::class, 'json', $context);
                }
                $values_1[] = $value_2;
            }
            $object->setErrors($values_1);
            unset($data['errors']);
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
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $values = [];
            foreach ($data->getData() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['data'] = $values;
        }
        if ($data->isInitialized('errors') && null !== $data->getErrors()) {
            $values_1 = [];
            foreach ($data->getErrors() as $value_1) {
                $value_2 = $value_1;
                if (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                } elseif (is_object($value_1)) {
                    $value_2 = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
                }
                $values_1[] = $value_2;
            }
            $dataArray['errors'] = $values_1;
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
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\TweetMetricsResponse::class => false];
    }
}