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
class RogueInfoRogueInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\RogueInfoRogueInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\RogueInfoRogueInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\RogueInfoRogueInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('detectedByAP', $data)) {
            $values = [];
            foreach ($data['detectedByAP'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ApInfoApInfo::class, 'json', $context);
            }
            $object->detectedByAP = $values;
        }
        if (\array_key_exists('channel', $data)) {
            $object->channel = $data['channel'];
        }
        if (\array_key_exists('rogueMac', $data)) {
            $object->rogueMac = $data['rogueMac'];
        }
        if (\array_key_exists('encryption', $data)) {
            $object->encryption = $data['encryption'];
        }
        if (\array_key_exists('radio', $data)) {
            $object->radio = $data['radio'];
        }
        if (\array_key_exists('lastDetected', $data)) {
            $object->lastDetected = $data['lastDetected'];
        }
        if (\array_key_exists('ssid', $data)) {
            $object->ssid = $data['ssid'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('rogueAPMac', $data)) {
            $object->rogueAPMac = $data['rogueAPMac'];
        }
        if (\array_key_exists('classification', $data)) {
            $object->classification = $data['classification'];
        }
        if (\array_key_exists('matchResult', $data)) {
            $object->matchResult = $data['matchResult'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('detectedByAP', get_object_vars($data)) && null !== ($data->detectedByAP ?? null)) {
            $values = [];
            foreach ($data->detectedByAP ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['detectedByAP'] = $values;
        }
        if (array_key_exists('channel', get_object_vars($data)) && null !== ($data->channel ?? null)) {
            $dataArray['channel'] = $data->channel ?? null;
        }
        if (array_key_exists('rogueMac', get_object_vars($data)) && null !== ($data->rogueMac ?? null)) {
            $dataArray['rogueMac'] = $data->rogueMac ?? null;
        }
        if (array_key_exists('encryption', get_object_vars($data)) && null !== ($data->encryption ?? null)) {
            $dataArray['encryption'] = $data->encryption ?? null;
        }
        if (array_key_exists('radio', get_object_vars($data)) && null !== ($data->radio ?? null)) {
            $dataArray['radio'] = $data->radio ?? null;
        }
        if (array_key_exists('lastDetected', get_object_vars($data)) && null !== ($data->lastDetected ?? null)) {
            $dataArray['lastDetected'] = $data->lastDetected ?? null;
        }
        if (array_key_exists('ssid', get_object_vars($data)) && null !== ($data->ssid ?? null)) {
            $dataArray['ssid'] = $data->ssid ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('rogueAPMac', get_object_vars($data)) && null !== ($data->rogueAPMac ?? null)) {
            $dataArray['rogueAPMac'] = $data->rogueAPMac ?? null;
        }
        if (array_key_exists('classification', get_object_vars($data)) && null !== ($data->classification ?? null)) {
            $dataArray['classification'] = $data->classification ?? null;
        }
        if (array_key_exists('matchResult', get_object_vars($data)) && null !== ($data->matchResult ?? null)) {
            $dataArray['matchResult'] = $data->matchResult ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RogueInfoRogueInfo::class => false];
    }
}