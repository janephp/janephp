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
class FullTextEntitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntities::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntities::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntities();
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
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\UrlEntity::class, 'json', $context);
            }
            $object->setUrls($values);
            unset($data['urls']);
        }
        if (\array_key_exists('hashtags', $data)) {
            $values_1 = [];
            foreach ($data['hashtags'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\HashtagEntity::class, 'json', $context);
            }
            $object->setHashtags($values_1);
            unset($data['hashtags']);
        }
        if (\array_key_exists('mentions', $data)) {
            $values_2 = [];
            foreach ($data['mentions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\MentionEntity::class, 'json', $context);
            }
            $object->setMentions($values_2);
            unset($data['mentions']);
        }
        if (\array_key_exists('cashtags', $data)) {
            $values_3 = [];
            foreach ($data['cashtags'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Component\OpenApi3\Tests\Expected\Model\CashtagEntity::class, 'json', $context);
            }
            $object->setCashtags($values_3);
            unset($data['cashtags']);
        }
        if (\array_key_exists('annotations', $data)) {
            $values_4 = [];
            foreach ($data['annotations'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntitiesAnnotationsItem::class, 'json', $context);
            }
            $object->setAnnotations($values_4);
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
        if ($data->isInitialized('urls') && null !== $data->getUrls()) {
            $values = [];
            foreach ($data->getUrls() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['urls'] = $values;
        }
        if ($data->isInitialized('hashtags') && null !== $data->getHashtags()) {
            $values_1 = [];
            foreach ($data->getHashtags() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['hashtags'] = $values_1;
        }
        if ($data->isInitialized('mentions') && null !== $data->getMentions()) {
            $values_2 = [];
            foreach ($data->getMentions() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['mentions'] = $values_2;
        }
        if ($data->isInitialized('cashtags') && null !== $data->getCashtags()) {
            $values_3 = [];
            foreach ($data->getCashtags() as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['cashtags'] = $values_3;
        }
        if ($data->isInitialized('annotations') && null !== $data->getAnnotations()) {
            $values_4 = [];
            foreach ($data->getAnnotations() as $value_4) {
                $values_4[] = $value_4 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['annotations'] = $values_4;
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntities::class => false];
    }
}