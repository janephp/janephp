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
class ToolTestResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ToolTestResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ToolTestResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ToolTestResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('wcid', $data)) {
            $object->wcid = $data['wcid'];
        }
        if (\array_key_exists('resultId', $data)) {
            $object->resultId = $data['resultId'];
        }
        if (\array_key_exists('uplink', $data)) {
            $object->uplink = $data['uplink'];
        }
        if (\array_key_exists('downlink', $data)) {
            $object->downlink = $data['downlink'];
        }
        if (\array_key_exists('latency', $data)) {
            $object->latency = $data['latency'];
        }
        if (\array_key_exists('packetLoss', $data)) {
            $object->packetLoss = $data['packetLoss'];
        }
        if (\array_key_exists('etf', $data)) {
            $object->etf = $data['etf'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('wcid', get_object_vars($data)) && null !== ($data->wcid ?? null)) {
            $dataArray['wcid'] = $data->wcid ?? null;
        }
        if (array_key_exists('resultId', get_object_vars($data)) && null !== ($data->resultId ?? null)) {
            $dataArray['resultId'] = $data->resultId ?? null;
        }
        if (array_key_exists('uplink', get_object_vars($data)) && null !== ($data->uplink ?? null)) {
            $dataArray['uplink'] = $data->uplink ?? null;
        }
        if (array_key_exists('downlink', get_object_vars($data)) && null !== ($data->downlink ?? null)) {
            $dataArray['downlink'] = $data->downlink ?? null;
        }
        if (array_key_exists('latency', get_object_vars($data)) && null !== ($data->latency ?? null)) {
            $dataArray['latency'] = $data->latency ?? null;
        }
        if (array_key_exists('packetLoss', get_object_vars($data)) && null !== ($data->packetLoss ?? null)) {
            $dataArray['packetLoss'] = $data->packetLoss ?? null;
        }
        if (array_key_exists('etf', get_object_vars($data)) && null !== ($data->etf ?? null)) {
            $dataArray['etf'] = $data->etf ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ToolTestResult::class => false];
    }
}