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
class ApPacketCaptureApPacketCaptureResNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApPacketCaptureApPacketCaptureRes::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApPacketCaptureApPacketCaptureRes::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApPacketCaptureApPacketCaptureRes();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('apMac', $data)) {
            $object->apMac = $data['apMac'];
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
        if (\array_key_exists('captureMode', $data)) {
            $object->captureMode = $data['captureMode'];
        }
        if (\array_key_exists('captureState', $data)) {
            $object->captureState = $data['captureState'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apMac', get_object_vars($data)) && null !== ($data->apMac ?? null)) {
            $dataArray['apMac'] = $data->apMac ?? null;
        }
        if (array_key_exists('captureInterface', get_object_vars($data)) && null !== ($data->captureInterface ?? null)) {
            $dataArray['captureInterface'] = $data->captureInterface ?? null;
        }
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
        if (array_key_exists('captureMode', get_object_vars($data)) && null !== ($data->captureMode ?? null)) {
            $dataArray['captureMode'] = $data->captureMode ?? null;
        }
        if (array_key_exists('captureState', get_object_vars($data)) && null !== ($data->captureState ?? null)) {
            $dataArray['captureState'] = $data->captureState ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApPacketCaptureApPacketCaptureRes::class => false];
    }
}