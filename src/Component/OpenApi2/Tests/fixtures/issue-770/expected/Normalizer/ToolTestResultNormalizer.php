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
class ToolTestResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ToolTestResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ToolTestResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ToolTestResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('wcid', $data)) {
            $object->setWcid($data['wcid']);
        }
        if (\array_key_exists('resultId', $data)) {
            $object->setResultId($data['resultId']);
        }
        if (\array_key_exists('uplink', $data)) {
            $object->setUplink($data['uplink']);
        }
        if (\array_key_exists('downlink', $data)) {
            $object->setDownlink($data['downlink']);
        }
        if (\array_key_exists('latency', $data)) {
            $object->setLatency($data['latency']);
        }
        if (\array_key_exists('packetLoss', $data)) {
            $object->setPacketLoss($data['packetLoss']);
        }
        if (\array_key_exists('etf', $data)) {
            $object->setEtf($data['etf']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('wcid') && null !== $data->getWcid()) {
            $dataArray['wcid'] = $data->getWcid();
        }
        if ($data->isInitialized('resultId') && null !== $data->getResultId()) {
            $dataArray['resultId'] = $data->getResultId();
        }
        if ($data->isInitialized('uplink') && null !== $data->getUplink()) {
            $dataArray['uplink'] = $data->getUplink();
        }
        if ($data->isInitialized('downlink') && null !== $data->getDownlink()) {
            $dataArray['downlink'] = $data->getDownlink();
        }
        if ($data->isInitialized('latency') && null !== $data->getLatency()) {
            $dataArray['latency'] = $data->getLatency();
        }
        if ($data->isInitialized('packetLoss') && null !== $data->getPacketLoss()) {
            $dataArray['packetLoss'] = $data->getPacketLoss();
        }
        if ($data->isInitialized('etf') && null !== $data->getEtf()) {
            $dataArray['etf'] = $data->getEtf();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ToolTestResult::class => false];
    }
}