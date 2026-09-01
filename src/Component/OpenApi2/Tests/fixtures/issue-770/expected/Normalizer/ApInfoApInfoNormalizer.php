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
            $object->apMac = $data['apMac'];
        }
        if (\array_key_exists('apName', $data)) {
            $object->apName = $data['apName'];
        }
        if (\array_key_exists('rssi', $data)) {
            $object->rssi = $data['rssi'];
        }
        if (\array_key_exists('lastDetected', $data)) {
            $object->lastDetected = $data['lastDetected'];
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->zoneName = $data['zoneName'];
        }
        if (\array_key_exists('rogueType', $data)) {
            $object->rogueType = $data['rogueType'];
        }
        if (\array_key_exists('mainDetector', $data)) {
            $object->mainDetector = $data['mainDetector'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apMac', get_object_vars($data)) && null !== ($data->apMac ?? null)) {
            $dataArray['apMac'] = $data->apMac ?? null;
        }
        if (array_key_exists('apName', get_object_vars($data)) && null !== ($data->apName ?? null)) {
            $dataArray['apName'] = $data->apName ?? null;
        }
        if (array_key_exists('rssi', get_object_vars($data)) && null !== ($data->rssi ?? null)) {
            $dataArray['rssi'] = $data->rssi ?? null;
        }
        if (array_key_exists('lastDetected', get_object_vars($data)) && null !== ($data->lastDetected ?? null)) {
            $dataArray['lastDetected'] = $data->lastDetected ?? null;
        }
        if (array_key_exists('zoneName', get_object_vars($data)) && null !== ($data->zoneName ?? null)) {
            $dataArray['zoneName'] = $data->zoneName ?? null;
        }
        if (array_key_exists('rogueType', get_object_vars($data)) && null !== ($data->rogueType ?? null)) {
            $dataArray['rogueType'] = $data->rogueType ?? null;
        }
        if (array_key_exists('mainDetector', get_object_vars($data)) && null !== ($data->mainDetector ?? null)) {
            $dataArray['mainDetector'] = $data->mainDetector ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApInfoApInfo::class => false];
    }
}