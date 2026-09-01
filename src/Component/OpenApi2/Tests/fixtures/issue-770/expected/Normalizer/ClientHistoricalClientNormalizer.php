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
class ClientHistoricalClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ClientHistoricalClient::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ClientHistoricalClient::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ClientHistoricalClient();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('sessionStartTime', $data)) {
            $object->sessionStartTime = $data['sessionStartTime'];
        }
        if (\array_key_exists('sessionEndTime', $data)) {
            $object->sessionEndTime = $data['sessionEndTime'];
        }
        if (\array_key_exists('clientMac', $data)) {
            $object->clientMac = $data['clientMac'];
        }
        if (\array_key_exists('ipAddress', $data)) {
            $object->ipAddress = $data['ipAddress'];
        }
        if (\array_key_exists('ipv6Address', $data)) {
            $object->ipv6Address = $data['ipv6Address'];
        }
        if (\array_key_exists('coreNetworkType', $data)) {
            $object->coreNetworkType = $data['coreNetworkType'];
        }
        if (\array_key_exists('hostname', $data)) {
            $object->hostname = $data['hostname'];
        }
        if (\array_key_exists('osType', $data)) {
            $object->osType = $data['osType'];
        }
        if (\array_key_exists('modelName', $data)) {
            $object->modelName = $data['modelName'];
        }
        if (\array_key_exists('mvnoName', $data)) {
            $object->mvnoName = $data['mvnoName'];
        }
        if (\array_key_exists('apMac', $data)) {
            $object->apMac = $data['apMac'];
        }
        if (\array_key_exists('ssid', $data)) {
            $object->ssid = $data['ssid'];
        }
        if (\array_key_exists('txBytes', $data)) {
            $object->txBytes = $data['txBytes'];
        }
        if (\array_key_exists('rxBytes', $data)) {
            $object->rxBytes = $data['rxBytes'];
        }
        if (\array_key_exists('txFrames', $data)) {
            $object->txFrames = $data['txFrames'];
        }
        if (\array_key_exists('rxFrames', $data)) {
            $object->rxFrames = $data['rxFrames'];
        }
        if (\array_key_exists('txDrops', $data)) {
            $object->txDrops = $data['txDrops'];
        }
        if (\array_key_exists('rxDrops', $data)) {
            $object->rxDrops = $data['rxDrops'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('sessionStartTime', get_object_vars($data)) && null !== ($data->sessionStartTime ?? null)) {
            $dataArray['sessionStartTime'] = $data->sessionStartTime ?? null;
        }
        if (array_key_exists('sessionEndTime', get_object_vars($data)) && null !== ($data->sessionEndTime ?? null)) {
            $dataArray['sessionEndTime'] = $data->sessionEndTime ?? null;
        }
        if (array_key_exists('clientMac', get_object_vars($data)) && null !== ($data->clientMac ?? null)) {
            $dataArray['clientMac'] = $data->clientMac ?? null;
        }
        if (array_key_exists('ipAddress', get_object_vars($data)) && null !== ($data->ipAddress ?? null)) {
            $dataArray['ipAddress'] = $data->ipAddress ?? null;
        }
        if (array_key_exists('ipv6Address', get_object_vars($data)) && null !== ($data->ipv6Address ?? null)) {
            $dataArray['ipv6Address'] = $data->ipv6Address ?? null;
        }
        if (array_key_exists('coreNetworkType', get_object_vars($data)) && null !== ($data->coreNetworkType ?? null)) {
            $dataArray['coreNetworkType'] = $data->coreNetworkType ?? null;
        }
        if (array_key_exists('hostname', get_object_vars($data)) && null !== ($data->hostname ?? null)) {
            $dataArray['hostname'] = $data->hostname ?? null;
        }
        if (array_key_exists('osType', get_object_vars($data)) && null !== ($data->osType ?? null)) {
            $dataArray['osType'] = $data->osType ?? null;
        }
        if (array_key_exists('modelName', get_object_vars($data)) && null !== ($data->modelName ?? null)) {
            $dataArray['modelName'] = $data->modelName ?? null;
        }
        if (array_key_exists('mvnoName', get_object_vars($data)) && null !== ($data->mvnoName ?? null)) {
            $dataArray['mvnoName'] = $data->mvnoName ?? null;
        }
        if (array_key_exists('apMac', get_object_vars($data)) && null !== ($data->apMac ?? null)) {
            $dataArray['apMac'] = $data->apMac ?? null;
        }
        if (array_key_exists('ssid', get_object_vars($data)) && null !== ($data->ssid ?? null)) {
            $dataArray['ssid'] = $data->ssid ?? null;
        }
        if (array_key_exists('txBytes', get_object_vars($data)) && null !== ($data->txBytes ?? null)) {
            $dataArray['txBytes'] = $data->txBytes ?? null;
        }
        if (array_key_exists('rxBytes', get_object_vars($data)) && null !== ($data->rxBytes ?? null)) {
            $dataArray['rxBytes'] = $data->rxBytes ?? null;
        }
        if (array_key_exists('txFrames', get_object_vars($data)) && null !== ($data->txFrames ?? null)) {
            $dataArray['txFrames'] = $data->txFrames ?? null;
        }
        if (array_key_exists('rxFrames', get_object_vars($data)) && null !== ($data->rxFrames ?? null)) {
            $dataArray['rxFrames'] = $data->rxFrames ?? null;
        }
        if (array_key_exists('txDrops', get_object_vars($data)) && null !== ($data->txDrops ?? null)) {
            $dataArray['txDrops'] = $data->txDrops ?? null;
        }
        if (array_key_exists('rxDrops', get_object_vars($data)) && null !== ($data->rxDrops ?? null)) {
            $dataArray['rxDrops'] = $data->rxDrops ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ClientHistoricalClient::class => false];
    }
}