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
class TweetSearchResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $value_1 = $value;
                if (is_array($value)) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweet::class, 'json', $context);
                } elseif (is_array($value)) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet::class, 'json', $context);
                } elseif (is_array($value)) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedTweet::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->setData($values);
            unset($data['data']);
        }
        if (\array_key_exists('includes', $data)) {
            $object->setIncludes($this->denormalizer->denormalize($data['includes'], \Jane\Component\OpenApi3\Tests\Expected\Model\Expansions::class, 'json', $context));
            unset($data['includes']);
        }
        if (\array_key_exists('errors', $data)) {
            $values_1 = [];
            foreach ($data['errors'] as $value_2) {
                $value_3 = $value_2;
                if (is_array($value_2) and isset($value_2['status'])) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\GenericProblem::class, 'json', $context);
                } elseif (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRequestProblem::class, 'json', $context);
                } elseif (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\ClientForbiddenProblem::class, 'json', $context);
                } elseif (is_array($value_2) and isset($value_2['parameter']) and isset($value_2['value']) and (isset($value_2['resource_type']) and ($value_2['resource_type'] == 'user' or $value_2['resource_type'] == 'tweet'))) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\ResourceNotFoundProblem::class, 'json', $context);
                } elseif (is_array($value_2) and isset($value_2['resource_id']) and (isset($value_2['resource_type']) and $value_2['resource_type'] == 'tweet') and (isset($value_2['section']) and ($value_2['section'] == 'data' or $value_2['section'] == 'includes'))) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\ResourceUnauthorizedProblem::class, 'json', $context);
                } elseif (is_array($value_2) and isset($value_2['resource_id']) and (isset($value_2['resource_type']) and $value_2['resource_type'] == 'tweet') and (isset($value_2['section']) and ($value_2['section'] == 'data' or $value_2['section'] == 'includes'))) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\DisallowedResourceProblem::class, 'json', $context);
                } elseif (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\UnsupportedAuthenticationProblem::class, 'json', $context);
                } elseif (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\UsageCapExceededProblem::class, 'json', $context);
                } elseif (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\ConnectionExceptionProblem::class, 'json', $context);
                } elseif (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\ClientDisconnectedProblem::class, 'json', $context);
                } elseif (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\OperationalDisconnectProblem::class, 'json', $context);
                } elseif (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\RulesCapProblem::class, 'json', $context);
                } elseif (is_array($value_2)) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRuleProblem::class, 'json', $context);
                }
                $values_1[] = $value_3;
            }
            $object->setErrors($values_1);
            unset($data['errors']);
        }
        if (\array_key_exists('meta', $data)) {
            $object->setMeta($this->denormalizer->denormalize($data['meta'], \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponseMeta::class, 'json', $context));
            unset($data['meta']);
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
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $values = [];
            foreach ($data->getData() as $value) {
                $value_1 = $value;
                if (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                }
                $values[] = $value_1;
            }
            $dataArray['data'] = $values;
        }
        if ($data->isInitialized('includes') && null !== $data->getIncludes()) {
            $dataArray['includes'] = $this->normalizer->normalize($data->getIncludes(), 'json', $context);
        }
        if ($data->isInitialized('errors') && null !== $data->getErrors()) {
            $values_1 = [];
            foreach ($data->getErrors() as $value_2) {
                $value_3 = $value_2;
                if (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                } elseif (is_object($value_2)) {
                    $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $values_1[] = $value_3;
            }
            $dataArray['errors'] = $values_1;
        }
        if ($data->isInitialized('meta') && null !== $data->getMeta()) {
            $dataArray['meta'] = $this->normalizer->normalize($data->getMeta(), 'json', $context);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponse::class => false];
    }
}