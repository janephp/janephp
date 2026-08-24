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
            $object->setDetectedByAP($values);
        }
        if (\array_key_exists('channel', $data)) {
            $object->setChannel($data['channel']);
        }
        if (\array_key_exists('rogueMac', $data)) {
            $object->setRogueMac($data['rogueMac']);
        }
        if (\array_key_exists('encryption', $data)) {
            $object->setEncryption($data['encryption']);
        }
        if (\array_key_exists('radio', $data)) {
            $object->setRadio($data['radio']);
        }
        if (\array_key_exists('lastDetected', $data)) {
            $object->setLastDetected($data['lastDetected']);
        }
        if (\array_key_exists('ssid', $data)) {
            $object->setSsid($data['ssid']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('rogueAPMac', $data)) {
            $object->setRogueAPMac($data['rogueAPMac']);
        }
        if (\array_key_exists('classification', $data)) {
            $object->setClassification($data['classification']);
        }
        if (\array_key_exists('matchResult', $data)) {
            $object->setMatchResult($data['matchResult']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('detectedByAP') && null !== $data->getDetectedByAP()) {
            $values = [];
            foreach ($data->getDetectedByAP() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['detectedByAP'] = $values;
        }
        if ($data->isInitialized('channel') && null !== $data->getChannel()) {
            $dataArray['channel'] = $data->getChannel();
        }
        if ($data->isInitialized('rogueMac') && null !== $data->getRogueMac()) {
            $dataArray['rogueMac'] = $data->getRogueMac();
        }
        if ($data->isInitialized('encryption') && null !== $data->getEncryption()) {
            $dataArray['encryption'] = $data->getEncryption();
        }
        if ($data->isInitialized('radio') && null !== $data->getRadio()) {
            $dataArray['radio'] = $data->getRadio();
        }
        if ($data->isInitialized('lastDetected') && null !== $data->getLastDetected()) {
            $dataArray['lastDetected'] = $data->getLastDetected();
        }
        if ($data->isInitialized('ssid') && null !== $data->getSsid()) {
            $dataArray['ssid'] = $data->getSsid();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('rogueAPMac') && null !== $data->getRogueAPMac()) {
            $dataArray['rogueAPMac'] = $data->getRogueAPMac();
        }
        if ($data->isInitialized('classification') && null !== $data->getClassification()) {
            $dataArray['classification'] = $data->getClassification();
        }
        if ($data->isInitialized('matchResult') && null !== $data->getMatchResult()) {
            $dataArray['matchResult'] = $data->getMatchResult();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RogueInfoRogueInfo::class => false];
    }
}