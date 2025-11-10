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
class ApPacketCaptureApPacketCaptureResNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureRes::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureRes::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureRes();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('apMac', $data)) {
            $object->setApMac($data['apMac']);
        }
        if (\array_key_exists('captureInterface', $data)) {
            $object->setCaptureInterface($data['captureInterface']);
        }
        if (\array_key_exists('hostIp', $data)) {
            $object->setHostIp($data['hostIp']);
        }
        if (\array_key_exists('includedMac', $data)) {
            $object->setIncludedMac($data['includedMac']);
        }
        if (\array_key_exists('includedFrameTypes', $data)) {
            $values = [];
            foreach ($data['includedFrameTypes'] as $value) {
                $values[] = $value;
            }
            $object->setIncludedFrameTypes($values);
        }
        if (\array_key_exists('captureMode', $data)) {
            $object->setCaptureMode($data['captureMode']);
        }
        if (\array_key_exists('captureState', $data)) {
            $object->setCaptureState($data['captureState']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('apMac') && null !== $data->getApMac()) {
            $dataArray['apMac'] = $data->getApMac();
        }
        if ($data->isInitialized('captureInterface') && null !== $data->getCaptureInterface()) {
            $dataArray['captureInterface'] = $data->getCaptureInterface();
        }
        if ($data->isInitialized('hostIp') && null !== $data->getHostIp()) {
            $dataArray['hostIp'] = $data->getHostIp();
        }
        if ($data->isInitialized('includedMac') && null !== $data->getIncludedMac()) {
            $dataArray['includedMac'] = $data->getIncludedMac();
        }
        if ($data->isInitialized('includedFrameTypes') && null !== $data->getIncludedFrameTypes()) {
            $values = [];
            foreach ($data->getIncludedFrameTypes() as $value) {
                $values[] = $value;
            }
            $dataArray['includedFrameTypes'] = $values;
        }
        if ($data->isInitialized('captureMode') && null !== $data->getCaptureMode()) {
            $dataArray['captureMode'] = $data->getCaptureMode();
        }
        if ($data->isInitialized('captureState') && null !== $data->getCaptureState()) {
            $dataArray['captureState'] = $data->getCaptureState();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureRes::class => false];
    }
}