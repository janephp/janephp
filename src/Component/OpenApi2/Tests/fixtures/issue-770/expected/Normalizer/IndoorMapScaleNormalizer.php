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
class IndoorMapScaleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapScale::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapScale::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapScale();
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
            $object->setA($this->denormalizer->denormalize($data['a'], \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndoorMapXy::class, 'json', $context));
        }
        if (\array_key_exists('b', $data)) {
            $object->setB($this->denormalizer->denormalize($data['b'], \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndoorMapXy::class, 'json', $context));
        }
        if (\array_key_exists('distance', $data)) {
            $object->setDistance($data['distance']);
        }
        if (\array_key_exists('unit', $data)) {
            $object->setUnit($data['unit']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('a') && null !== $data->getA()) {
            $dataArray['a'] = $this->normalizer->normalize($data->getA(), 'json', $context);
        }
        if ($data->isInitialized('b') && null !== $data->getB()) {
            $dataArray['b'] = $this->normalizer->normalize($data->getB(), 'json', $context);
        }
        if ($data->isInitialized('distance') && null !== $data->getDistance()) {
            $dataArray['distance'] = $data->getDistance();
        }
        if ($data->isInitialized('unit') && null !== $data->getUnit()) {
            $dataArray['unit'] = $data->getUnit();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapScale::class => false];
    }
}
