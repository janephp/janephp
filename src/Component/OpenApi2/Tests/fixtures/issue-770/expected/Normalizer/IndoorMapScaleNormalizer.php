<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class IndoorMapScaleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapScale::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapScale::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapScale();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('distance', $data) && \is_int($data['distance'])) {
            $data['distance'] = (float) $data['distance'];
        }
        if (\array_key_exists('a', $data)) {
            $object->a = $this->denormalizer->denormalize($data['a'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapIndoorMapXy::class, 'json', $context);
        }
        if (\array_key_exists('b', $data)) {
            $object->b = $this->denormalizer->denormalize($data['b'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapIndoorMapXy::class, 'json', $context);
        }
        if (\array_key_exists('distance', $data)) {
            $object->distance = $data['distance'];
        }
        if (\array_key_exists('unit', $data)) {
            $object->unit = $data['unit'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('a', get_object_vars($data)) && null !== ($data->a ?? null)) {
            $dataArray['a'] = ($data->a ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->a ?? null, 'json', $context));
        }
        if (array_key_exists('b', get_object_vars($data)) && null !== ($data->b ?? null)) {
            $dataArray['b'] = ($data->b ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->b ?? null, 'json', $context));
        }
        if (array_key_exists('distance', get_object_vars($data)) && null !== ($data->distance ?? null)) {
            $dataArray['distance'] = $data->distance ?? null;
        }
        if (array_key_exists('unit', get_object_vars($data)) && null !== ($data->unit ?? null)) {
            $dataArray['unit'] = $data->unit ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapScale::class => false];
    }
}