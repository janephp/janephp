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
class ExpansionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\Expansions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\Expansions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\Expansions();
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
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\CompactUser::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['format']) and $value['format'] == 'default')) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUser::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['format']) and $value['format'] == 'detailed')) {
                    $value_1 = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedUser::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->setUsers($values);
            unset($data['users']);
        }
        if (\array_key_exists('tweets', $data)) {
            $values_1 = [];
            foreach ($data['tweets'] as $value_2) {
                $value_3 = $value_2;
                if (is_array($value_2) and (isset($value_2['format']) and $value_2['format'] == 'compact')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweet::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['format']) and $value_2['format'] == 'default')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['format']) and $value_2['format'] == 'detailed')) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedTweet::class, 'json', $context);
                }
                $values_1[] = $value_3;
            }
            $object->setTweets($values_1);
            unset($data['tweets']);
        }
        if (\array_key_exists('places', $data)) {
            $values_2 = [];
            foreach ($data['places'] as $value_4) {
                $value_5 = $value_4;
                if (is_array($value_4) and (isset($value_4['format']) and $value_4['format'] == 'compact')) {
                    $value_5 = $this->denormalizer->denormalize($value_4, \Jane\Component\OpenApi3\Tests\Expected\Model\CompactPlace::class, 'json', $context);
                } elseif (is_array($value_4) and (isset($value_4['format']) and $value_4['format'] == 'default')) {
                    $value_5 = $this->denormalizer->denormalize($value_4, \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultPlace::class, 'json', $context);
                } elseif (is_array($value_4) and (isset($value_4['format']) and $value_4['format'] == 'detailed')) {
                    $value_5 = $this->denormalizer->denormalize($value_4, \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedPlace::class, 'json', $context);
                }
                $values_2[] = $value_5;
            }
            $object->setPlaces($values_2);
            unset($data['places']);
        }
        if (\array_key_exists('media', $data)) {
            $values_3 = [];
            foreach ($data['media'] as $value_6) {
                $value_7 = $value_6;
                if (is_array($value_6) and (isset($value_6['type']) and $value_6['type'] == 'photo')) {
                    $value_7 = $this->denormalizer->denormalize($value_6, \Jane\Component\OpenApi3\Tests\Expected\Model\Photo::class, 'json', $context);
                } elseif (is_array($value_6) and (isset($value_6['type']) and $value_6['type'] == 'video')) {
                    $value_7 = $this->denormalizer->denormalize($value_6, \Jane\Component\OpenApi3\Tests\Expected\Model\Video::class, 'json', $context);
                } elseif (is_array($value_6) and (isset($value_6['type']) and $value_6['type'] == 'animated_gif')) {
                    $value_7 = $this->denormalizer->denormalize($value_6, \Jane\Component\OpenApi3\Tests\Expected\Model\AnimatedGif::class, 'json', $context);
                }
                $values_3[] = $value_7;
            }
            $object->setMedia($values_3);
            unset($data['media']);
        }
        if (\array_key_exists('polls', $data)) {
            $values_4 = [];
            foreach ($data['polls'] as $value_8) {
                $values_4[] = $this->denormalizer->denormalize($value_8, \Jane\Component\OpenApi3\Tests\Expected\Model\Poll::class, 'json', $context);
            }
            $object->setPolls($values_4);
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
        if ($data->isInitialized('users') && null !== $data->getUsers()) {
            $values = [];
            foreach ($data->getUsers() as $value) {
                $value_1 = $value;
                if (is_object($value)) {
                    $value_1 = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
                } elseif (is_object($value)) {
                    $value_1 = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
                } elseif (is_object($value)) {
                    $value_1 = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
                }
                $values[] = $value_1;
            }
            $dataArray['users'] = $values;
        }
        if ($data->isInitialized('tweets') && null !== $data->getTweets()) {
            $values_1 = [];
            foreach ($data->getTweets() as $value_2) {
                $value_3 = $value_2;
                if (is_object($value_2)) {
                    $value_3 = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
                } elseif (is_object($value_2)) {
                    $value_3 = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
                } elseif (is_object($value_2)) {
                    $value_3 = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
                }
                $values_1[] = $value_3;
            }
            $dataArray['tweets'] = $values_1;
        }
        if ($data->isInitialized('places') && null !== $data->getPlaces()) {
            $values_2 = [];
            foreach ($data->getPlaces() as $value_4) {
                $value_5 = $value_4;
                if (is_object($value_4)) {
                    $value_5 = $value_4 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
                } elseif (is_object($value_4)) {
                    $value_5 = $value_4 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
                } elseif (is_object($value_4)) {
                    $value_5 = $value_4 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
                }
                $values_2[] = $value_5;
            }
            $dataArray['places'] = $values_2;
        }
        if ($data->isInitialized('media') && null !== $data->getMedia()) {
            $values_3 = [];
            foreach ($data->getMedia() as $value_6) {
                $value_7 = $value_6;
                if (is_object($value_6)) {
                    $value_7 = $value_6 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
                } elseif (is_object($value_6)) {
                    $value_7 = $value_6 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
                } elseif (is_object($value_6)) {
                    $value_7 = $value_6 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
                }
                $values_3[] = $value_7;
            }
            $dataArray['media'] = $values_3;
        }
        if ($data->isInitialized('polls') && null !== $data->getPolls()) {
            $values_4 = [];
            foreach ($data->getPolls() as $value_8) {
                $values_4[] = $value_8 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_8, 'json', $context));
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
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\Expansions::class => false];
    }
}