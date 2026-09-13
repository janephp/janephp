<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FullTextEntitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntities::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntities::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntities();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('urls', $data)) {
            $values = [];
            foreach ($data['urls'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\UrlEntity::class, 'json', $context);
            }
            $object->urls = $values;
            unset($data['urls']);
        }
        if (\array_key_exists('hashtags', $data)) {
            $values_1 = [];
            foreach ($data['hashtags'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\HashtagEntity::class, 'json', $context);
            }
            $object->hashtags = $values_1;
            unset($data['hashtags']);
        }
        if (\array_key_exists('mentions', $data)) {
            $values_2 = [];
            foreach ($data['mentions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\MentionEntity::class, 'json', $context);
            }
            $object->mentions = $values_2;
            unset($data['mentions']);
        }
        if (\array_key_exists('cashtags', $data)) {
            $values_3 = [];
            foreach ($data['cashtags'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CashtagEntity::class, 'json', $context);
            }
            $object->cashtags = $values_3;
            unset($data['cashtags']);
        }
        if (\array_key_exists('annotations', $data)) {
            $values_4 = [];
            foreach ($data['annotations'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntitiesAnnotationsItem::class, 'json', $context);
            }
            $object->annotations = $values_4;
            unset($data['annotations']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('urls', get_object_vars($data)) && null !== ($data->urls ?? null)) {
            $values = [];
            foreach ($data->urls as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['urls'] = $values;
        }
        if (array_key_exists('hashtags', get_object_vars($data)) && null !== ($data->hashtags ?? null)) {
            $values_1 = [];
            foreach ($data->hashtags as $value_1) {
                $normalized_1 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['hashtags'] = $values_1;
        }
        if (array_key_exists('mentions', get_object_vars($data)) && null !== ($data->mentions ?? null)) {
            $values_2 = [];
            foreach ($data->mentions as $value_2) {
                $normalized_2 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['mentions'] = $values_2;
        }
        if (array_key_exists('cashtags', get_object_vars($data)) && null !== ($data->cashtags ?? null)) {
            $values_3 = [];
            foreach ($data->cashtags as $value_3) {
                $normalized_3 = $value_3 === null ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['cashtags'] = $values_3;
        }
        if (array_key_exists('annotations', get_object_vars($data)) && null !== ($data->annotations ?? null)) {
            $values_4 = [];
            foreach ($data->annotations as $value_4) {
                $normalized_4 = $value_4 === null ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[] = \is_iterable($normalized_4) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['annotations'] = $values_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntities::class => false];
    }
}