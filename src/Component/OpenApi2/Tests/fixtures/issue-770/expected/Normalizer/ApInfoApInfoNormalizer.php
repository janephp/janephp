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
class ApInfoApInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApInfoApInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApInfoApInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApInfoApInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('mainDetector', $data) && \is_int($data['mainDetector'])) {
            $data['mainDetector'] = (bool) $data['mainDetector'];
        }
        if (\array_key_exists('apMac', $data)) {
            $object->setApMac($data['apMac']);
        }
        if (\array_key_exists('apName', $data)) {
            $object->setApName($data['apName']);
        }
        if (\array_key_exists('rssi', $data)) {
            $object->setRssi($data['rssi']);
        }
        if (\array_key_exists('lastDetected', $data)) {
            $object->setLastDetected($data['lastDetected']);
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->setZoneName($data['zoneName']);
        }
        if (\array_key_exists('rogueType', $data)) {
            $object->setRogueType($data['rogueType']);
        }
        if (\array_key_exists('mainDetector', $data)) {
            $object->setMainDetector($data['mainDetector']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('apMac') && null !== $data->getApMac()) {
            $dataArray['apMac'] = $data->getApMac();
        }
        if ($data->isInitialized('apName') && null !== $data->getApName()) {
            $dataArray['apName'] = $data->getApName();
        }
        if ($data->isInitialized('rssi') && null !== $data->getRssi()) {
            $dataArray['rssi'] = $data->getRssi();
        }
        if ($data->isInitialized('lastDetected') && null !== $data->getLastDetected()) {
            $dataArray['lastDetected'] = $data->getLastDetected();
        }
        if ($data->isInitialized('zoneName') && null !== $data->getZoneName()) {
            $dataArray['zoneName'] = $data->getZoneName();
        }
        if ($data->isInitialized('rogueType') && null !== $data->getRogueType()) {
            $dataArray['rogueType'] = $data->getRogueType();
        }
        if ($data->isInitialized('mainDetector') && null !== $data->getMainDetector()) {
            $dataArray['mainDetector'] = $data->getMainDetector();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApInfoApInfo::class => false];
    }
}