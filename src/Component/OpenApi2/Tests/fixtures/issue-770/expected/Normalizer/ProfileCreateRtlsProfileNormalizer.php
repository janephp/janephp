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
class ProfileCreateRtlsProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRtlsProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRtlsProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRtlsProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ekahauEnabled', $data) && \is_int($data['ekahauEnabled'])) {
            $data['ekahauEnabled'] = (bool) $data['ekahauEnabled'];
        }
        if (\array_key_exists('stanleyEnabled', $data) && \is_int($data['stanleyEnabled'])) {
            $data['stanleyEnabled'] = (bool) $data['stanleyEnabled'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('ekahauEnabled', $data)) {
            $object->ekahauEnabled = $data['ekahauEnabled'];
        }
        if (\array_key_exists('ekahauIp', $data)) {
            $object->ekahauIp = $data['ekahauIp'];
        }
        if (\array_key_exists('ekahauPort', $data)) {
            $object->ekahauPort = $data['ekahauPort'];
        }
        if (\array_key_exists('stanleyEnabled', $data)) {
            $object->stanleyEnabled = $data['stanleyEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        $dataArray['ekahauEnabled'] = $data->ekahauEnabled ?? null;
        if (array_key_exists('ekahauIp', get_object_vars($data)) && null !== ($data->ekahauIp ?? null)) {
            $dataArray['ekahauIp'] = $data->ekahauIp ?? null;
        }
        if (array_key_exists('ekahauPort', get_object_vars($data)) && null !== ($data->ekahauPort ?? null)) {
            $dataArray['ekahauPort'] = $data->ekahauPort ?? null;
        }
        $dataArray['stanleyEnabled'] = $data->stanleyEnabled ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRtlsProfile::class => false];
    }
}