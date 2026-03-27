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
class RadioRadioConfigResponseApNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigResponseAp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigResponseAp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigResponseAp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dual5gEnabled', $data) && \is_int($data['dual5gEnabled'])) {
            $data['dual5gEnabled'] = (bool) $data['dual5gEnabled'];
        }
        if (\array_key_exists('radio24g', $data)) {
            $object->setRadio24g($this->denormalizer->denormalize($data['radio24g'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio24gResponse::class, 'json', $context));
        }
        if (\array_key_exists('radio5g', $data)) {
            $object->setRadio5g($this->denormalizer->denormalize($data['radio5g'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gResponseAp::class, 'json', $context));
        }
        if (\array_key_exists('radio5gUpper', $data)) {
            $object->setRadio5gUpper($this->denormalizer->denormalize($data['radio5gUpper'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gResponseAp::class, 'json', $context));
        }
        if (\array_key_exists('radio5gLower', $data)) {
            $object->setRadio5gLower($this->denormalizer->denormalize($data['radio5gLower'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gResponseAp::class, 'json', $context));
        }
        if (\array_key_exists('radio6g', $data)) {
            $object->setRadio6g($this->denormalizer->denormalize($data['radio6g'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio6gResponse::class, 'json', $context));
        }
        if (\array_key_exists('dual5gEnabled', $data)) {
            $object->setDual5gEnabled($data['dual5gEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('radio24g') && null !== $data->getRadio24g()) {
            $dataArray['radio24g'] = $this->normalizer->normalize($data->getRadio24g(), 'json', $context);
        }
        if ($data->isInitialized('radio5g') && null !== $data->getRadio5g()) {
            $dataArray['radio5g'] = $this->normalizer->normalize($data->getRadio5g(), 'json', $context);
        }
        if ($data->isInitialized('radio5gUpper') && null !== $data->getRadio5gUpper()) {
            $dataArray['radio5gUpper'] = $this->normalizer->normalize($data->getRadio5gUpper(), 'json', $context);
        }
        if ($data->isInitialized('radio5gLower') && null !== $data->getRadio5gLower()) {
            $dataArray['radio5gLower'] = $this->normalizer->normalize($data->getRadio5gLower(), 'json', $context);
        }
        if ($data->isInitialized('radio6g') && null !== $data->getRadio6g()) {
            $dataArray['radio6g'] = $this->normalizer->normalize($data->getRadio6g(), 'json', $context);
        }
        if ($data->isInitialized('dual5gEnabled') && null !== $data->getDual5gEnabled()) {
            $dataArray['dual5gEnabled'] = $data->getDual5gEnabled();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigResponseAp::class => false];
    }
}