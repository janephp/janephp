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
class ApPacketCaptureApPacketCaptureReqNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureReq::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureReq::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureReq();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('captureInterface', $data)) {
            $object->captureInterface = $data['captureInterface'];
        }
        if (\array_key_exists('hostIp', $data)) {
            $object->hostIp = $data['hostIp'];
        }
        if (\array_key_exists('includedMac', $data)) {
            $object->includedMac = $data['includedMac'];
        }
        if (\array_key_exists('includedFrameTypes', $data)) {
            $values = [];
            foreach ($data['includedFrameTypes'] as $value) {
                $values[] = $value;
            }
            $object->includedFrameTypes = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['captureInterface'] = $data->captureInterface ?? null;
        if (array_key_exists('hostIp', get_object_vars($data)) && null !== ($data->hostIp ?? null)) {
            $dataArray['hostIp'] = $data->hostIp ?? null;
        }
        if (array_key_exists('includedMac', get_object_vars($data)) && null !== ($data->includedMac ?? null)) {
            $dataArray['includedMac'] = $data->includedMac ?? null;
        }
        if (array_key_exists('includedFrameTypes', get_object_vars($data)) && null !== ($data->includedFrameTypes ?? null)) {
            $values = [];
            foreach ($data->includedFrameTypes ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['includedFrameTypes'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureReq::class => false];
    }
}