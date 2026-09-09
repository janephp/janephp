<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\CheckArray;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TweetLookupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\TweetLookupResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\TweetLookupResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\TweetLookupResponse();
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
                $value_1 = $value;
                if (is_array($value) and (isset($value['format']) and $value['format'] == 'compact')) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\CompactTweet::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['format']) and $value['format'] == 'default')) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DefaultTweet::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['format']) and $value['format'] == 'detailed')) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedTweet::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->data = $values;
            unset($data['data']);
        }
        if (\array_key_exists('includes', $data)) {
            $object->includes = $this->denormalizer->denormalize($data['includes'], \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Expansions::class, 'json', $context);
            unset($data['includes']);
        }
        if (\array_key_exists('errors', $data)) {
            $values_1 = [];
            foreach ($data['errors'] as $value_2) {
                $value_3 = $value_2;
                if (is_array($value_2) and \array_key_exists('status', $value_2) and (isset($value_2['type']) and $value_2['type'] == 'about:blank')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\GenericProblem::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/invalid-request')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\InvalidRequestProblem::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/client-forbidden')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ClientForbiddenProblem::class, 'json', $context);
                } elseif (is_array($value_2) and \array_key_exists('parameter', $value_2) and \array_key_exists('value', $value_2) and (\array_key_exists('resource_type', $value_2) and ($value_2['resource_type'] == 'user' or $value_2['resource_type'] == 'tweet')) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/resource-not-found')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ResourceNotFoundProblem::class, 'json', $context);
                } elseif (is_array($value_2) and \array_key_exists('resource_id', $value_2) and (\array_key_exists('resource_type', $value_2) and $value_2['resource_type'] == 'tweet') and (\array_key_exists('section', $value_2) and ($value_2['section'] == 'data' or $value_2['section'] == 'includes')) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/not-authorized-for-resource')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ResourceUnauthorizedProblem::class, 'json', $context);
                } elseif (is_array($value_2) and \array_key_exists('resource_id', $value_2) and (\array_key_exists('resource_type', $value_2) and $value_2['resource_type'] == 'tweet') and (\array_key_exists('section', $value_2) and ($value_2['section'] == 'data' or $value_2['section'] == 'includes')) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/disallowed-resource')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DisallowedResourceProblem::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/unsupported-authentication')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\UnsupportedAuthenticationProblem::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/usage-capped')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\UsageCapExceededProblem::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/streaming-connection')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ConnectionExceptionProblem::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/client-disconnected')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ClientDisconnectedProblem::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/operational-disconnect')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\OperationalDisconnectProblem::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/rule-cap')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\RulesCapProblem::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['type']) and $value_2['type'] == 'https://api.twitter.com/labs/1/problems/invalid-rules')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\InvalidRuleProblem::class, 'json', $context);
                }
                $values_1[] = $value_3;
            }
            $object->errors = $values_1;
            unset($data['errors']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('data', get_object_vars($data)) && null !== ($data->data ?? null)) {
            $values = [];
            foreach ($data->data as $value) {
                $value_1 = $value;
                if (is_object($value)) {
                    $normalized = $this->normalizer->normalize($value, 'json', $context);
                    $value_1 = \is_iterable($normalized) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized) : $normalized;
                } elseif (is_object($value)) {
                    $normalized_1 = $this->normalizer->normalize($value, 'json', $context);
                    $value_1 = \is_iterable($normalized_1) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_1) : $normalized_1;
                } elseif (is_object($value)) {
                    $normalized_2 = $this->normalizer->normalize($value, 'json', $context);
                    $value_1 = \is_iterable($normalized_2) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_2) : $normalized_2;
                }
                $values[] = $value_1;
            }
            $dataArray['data'] = $values;
        }
        if (array_key_exists('includes', get_object_vars($data)) && null !== ($data->includes ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->includes, 'json', $context);
            $dataArray['includes'] = \is_iterable($normalized_3) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('errors', get_object_vars($data)) && null !== ($data->errors ?? null)) {
            $values_1 = [];
            foreach ($data->errors as $value_2) {
                $value_3 = $value_2;
                if (is_object($value_2)) {
                    $normalized_4 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_4) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_4) : $normalized_4;
                } elseif (is_object($value_2)) {
                    $normalized_5 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_5) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_5) : $normalized_5;
                } elseif (is_object($value_2)) {
                    $normalized_6 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_6) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_6) : $normalized_6;
                } elseif (is_object($value_2)) {
                    $normalized_7 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_7) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_7) : $normalized_7;
                } elseif (is_object($value_2)) {
                    $normalized_8 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_8) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_8) : $normalized_8;
                } elseif (is_object($value_2)) {
                    $normalized_9 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_9) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_9) : $normalized_9;
                } elseif (is_object($value_2)) {
                    $normalized_10 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_10) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_10) : $normalized_10;
                } elseif (is_object($value_2)) {
                    $normalized_11 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_11) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_11) : $normalized_11;
                } elseif (is_object($value_2)) {
                    $normalized_12 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_12) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_12) : $normalized_12;
                } elseif (is_object($value_2)) {
                    $normalized_13 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_13) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_13) : $normalized_13;
                } elseif (is_object($value_2)) {
                    $normalized_14 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_14) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_14) : $normalized_14;
                } elseif (is_object($value_2)) {
                    $normalized_15 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_15) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_15) : $normalized_15;
                } elseif (is_object($value_2)) {
                    $normalized_16 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_16) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_16) : $normalized_16;
                }
                $values_1[] = $value_3;
            }
            $dataArray['errors'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\TweetLookupResponse::class => false];
    }
}