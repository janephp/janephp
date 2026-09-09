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
class ExpansionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Expansions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Expansions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Expansions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('users', $data)) {
            $values = [];
            foreach ($data['users'] as $value) {
                $value_1 = $value;
                if (is_array($value) and (isset($value['format']) and $value['format'] == 'compact')) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\CompactUser::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['format']) and $value['format'] == 'default')) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DefaultUser::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['format']) and $value['format'] == 'detailed')) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedUser::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->users = $values;
            unset($data['users']);
        }
        if (\array_key_exists('tweets', $data)) {
            $values_1 = [];
            foreach ($data['tweets'] as $value_2) {
                $value_3 = $value_2;
                if (is_array($value_2) and (isset($value_2['format']) and $value_2['format'] == 'compact')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\CompactTweet::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['format']) and $value_2['format'] == 'default')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DefaultTweet::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['format']) and $value_2['format'] == 'detailed')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedTweet::class, 'json', $context);
                }
                $values_1[] = $value_3;
            }
            $object->tweets = $values_1;
            unset($data['tweets']);
        }
        if (\array_key_exists('places', $data)) {
            $values_2 = [];
            foreach ($data['places'] as $value_4) {
                $value_5 = $value_4;
                if (is_array($value_4) and (isset($value_4['format']) and $value_4['format'] == 'compact')) {
                    $value_5 = $this->denormalizer->denormalize($value_4, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\CompactPlace::class, 'json', $context);
                } elseif (is_array($value_4) and (isset($value_4['format']) and $value_4['format'] == 'default')) {
                    $value_5 = $this->denormalizer->denormalize($value_4, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DefaultPlace::class, 'json', $context);
                } elseif (is_array($value_4) and (isset($value_4['format']) and $value_4['format'] == 'detailed')) {
                    $value_5 = $this->denormalizer->denormalize($value_4, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedPlace::class, 'json', $context);
                }
                $values_2[] = $value_5;
            }
            $object->places = $values_2;
            unset($data['places']);
        }
        if (\array_key_exists('media', $data)) {
            $values_3 = [];
            foreach ($data['media'] as $value_6) {
                $value_7 = $value_6;
                if (is_array($value_6) and (isset($value_6['type']) and $value_6['type'] == 'photo')) {
                    $value_7 = $this->denormalizer->denormalize($value_6, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Photo::class, 'json', $context);
                } elseif (is_array($value_6) and (isset($value_6['type']) and $value_6['type'] == 'video')) {
                    $value_7 = $this->denormalizer->denormalize($value_6, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Video::class, 'json', $context);
                } elseif (is_array($value_6) and (isset($value_6['type']) and $value_6['type'] == 'animated_gif')) {
                    $value_7 = $this->denormalizer->denormalize($value_6, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\AnimatedGif::class, 'json', $context);
                }
                $values_3[] = $value_7;
            }
            $object->media = $values_3;
            unset($data['media']);
        }
        if (\array_key_exists('polls', $data)) {
            $values_4 = [];
            foreach ($data['polls'] as $value_8) {
                $values_4[] = $this->denormalizer->denormalize($value_8, \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Poll::class, 'json', $context);
            }
            $object->polls = $values_4;
            unset($data['polls']);
        }
        foreach ($data as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_9;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('users', get_object_vars($data)) && null !== ($data->users ?? null)) {
            $values = [];
            foreach ($data->users as $value) {
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
            $dataArray['users'] = $values;
        }
        if (array_key_exists('tweets', get_object_vars($data)) && null !== ($data->tweets ?? null)) {
            $values_1 = [];
            foreach ($data->tweets as $value_2) {
                $value_3 = $value_2;
                if (is_object($value_2)) {
                    $normalized_3 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_3) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_3) : $normalized_3;
                } elseif (is_object($value_2)) {
                    $normalized_4 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_4) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_4) : $normalized_4;
                } elseif (is_object($value_2)) {
                    $normalized_5 = $this->normalizer->normalize($value_2, 'json', $context);
                    $value_3 = \is_iterable($normalized_5) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_5) : $normalized_5;
                }
                $values_1[] = $value_3;
            }
            $dataArray['tweets'] = $values_1;
        }
        if (array_key_exists('places', get_object_vars($data)) && null !== ($data->places ?? null)) {
            $values_2 = [];
            foreach ($data->places as $value_4) {
                $value_5 = $value_4;
                if (is_object($value_4)) {
                    $normalized_6 = $this->normalizer->normalize($value_4, 'json', $context);
                    $value_5 = \is_iterable($normalized_6) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_6) : $normalized_6;
                } elseif (is_object($value_4)) {
                    $normalized_7 = $this->normalizer->normalize($value_4, 'json', $context);
                    $value_5 = \is_iterable($normalized_7) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_7) : $normalized_7;
                } elseif (is_object($value_4)) {
                    $normalized_8 = $this->normalizer->normalize($value_4, 'json', $context);
                    $value_5 = \is_iterable($normalized_8) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_8) : $normalized_8;
                }
                $values_2[] = $value_5;
            }
            $dataArray['places'] = $values_2;
        }
        if (array_key_exists('media', get_object_vars($data)) && null !== ($data->media ?? null)) {
            $values_3 = [];
            foreach ($data->media as $value_6) {
                $value_7 = $value_6;
                if (is_object($value_6)) {
                    $normalized_9 = $this->normalizer->normalize($value_6, 'json', $context);
                    $value_7 = \is_iterable($normalized_9) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_9) : $normalized_9;
                } elseif (is_object($value_6)) {
                    $normalized_10 = $this->normalizer->normalize($value_6, 'json', $context);
                    $value_7 = \is_iterable($normalized_10) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_10) : $normalized_10;
                } elseif (is_object($value_6)) {
                    $normalized_11 = $this->normalizer->normalize($value_6, 'json', $context);
                    $value_7 = \is_iterable($normalized_11) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_11) : $normalized_11;
                }
                $values_3[] = $value_7;
            }
            $dataArray['media'] = $values_3;
        }
        if (array_key_exists('polls', get_object_vars($data)) && null !== ($data->polls ?? null)) {
            $values_4 = [];
            foreach ($data->polls as $value_8) {
                $normalized_12 = $value_8 === null ? null : $this->normalizer->normalize($value_8, 'json', $context);
                $values_4[] = \is_iterable($normalized_12) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized_12) : $normalized_12;
            }
            $dataArray['polls'] = $values_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_9;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Expansions::class => false];
    }
}