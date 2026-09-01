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
class RadioRadioConfigResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigResponse();
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
            $object->radio24g = $this->denormalizer->denormalize($data['radio24g'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio24gResponse::class, 'json', $context);
        }
        if (\array_key_exists('radio5g', $data)) {
            $object->radio5g = $this->denormalizer->denormalize($data['radio5g'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio5gResponse::class, 'json', $context);
        }
        if (\array_key_exists('radio5gUpper', $data)) {
            $object->radio5gUpper = $this->denormalizer->denormalize($data['radio5gUpper'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio5gResponse::class, 'json', $context);
        }
        if (\array_key_exists('radio5gLower', $data)) {
            $object->radio5gLower = $this->denormalizer->denormalize($data['radio5gLower'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio5gResponse::class, 'json', $context);
        }
        if (\array_key_exists('radio6g', $data)) {
            $object->radio6g = $this->denormalizer->denormalize($data['radio6g'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio6gResponse::class, 'json', $context);
        }
        if (\array_key_exists('dual5gEnabled', $data)) {
            $object->dual5gEnabled = $data['dual5gEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('radio24g', get_object_vars($data)) && null !== ($data->radio24g ?? null)) {
            $dataArray['radio24g'] = ($data->radio24g ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->radio24g ?? null, 'json', $context));
        }
        if (array_key_exists('radio5g', get_object_vars($data)) && null !== ($data->radio5g ?? null)) {
            $dataArray['radio5g'] = ($data->radio5g ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->radio5g ?? null, 'json', $context));
        }
        if (array_key_exists('radio5gUpper', get_object_vars($data)) && null !== ($data->radio5gUpper ?? null)) {
            $dataArray['radio5gUpper'] = ($data->radio5gUpper ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->radio5gUpper ?? null, 'json', $context));
        }
        if (array_key_exists('radio5gLower', get_object_vars($data)) && null !== ($data->radio5gLower ?? null)) {
            $dataArray['radio5gLower'] = ($data->radio5gLower ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->radio5gLower ?? null, 'json', $context));
        }
        if (array_key_exists('radio6g', get_object_vars($data)) && null !== ($data->radio6g ?? null)) {
            $dataArray['radio6g'] = ($data->radio6g ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->radio6g ?? null, 'json', $context));
        }
        if (array_key_exists('dual5gEnabled', get_object_vars($data)) && null !== ($data->dual5gEnabled ?? null)) {
            $dataArray['dual5gEnabled'] = $data->dual5gEnabled ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigResponse::class => false];
    }
}