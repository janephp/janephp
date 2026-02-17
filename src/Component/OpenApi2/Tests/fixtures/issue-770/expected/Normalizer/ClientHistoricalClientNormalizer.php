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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ClientHistoricalClient();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sessionStartTime', $data)) {
            $object->setSessionStartTime($data['sessionStartTime']);
        }
        if (\array_key_exists('sessionEndTime', $data)) {
            $object->setSessionEndTime($data['sessionEndTime']);
        }
        if (\array_key_exists('clientMac', $data)) {
            $object->setClientMac($data['clientMac']);
        }
        if (\array_key_exists('ipAddress', $data)) {
            $object->setIpAddress($data['ipAddress']);
        }
        if (\array_key_exists('ipv6Address', $data)) {
            $object->setIpv6Address($data['ipv6Address']);
        }
        if (\array_key_exists('coreNetworkType', $data)) {
            $object->setCoreNetworkType($data['coreNetworkType']);
        }
        if (\array_key_exists('hostname', $data)) {
            $object->setHostname($data['hostname']);
        }
        if (\array_key_exists('osType', $data)) {
            $object->setOsType($data['osType']);
        }
        if (\array_key_exists('modelName', $data)) {
            $object->setModelName($data['modelName']);
        }
        if (\array_key_exists('mvnoName', $data)) {
            $object->setMvnoName($data['mvnoName']);
        }
        if (\array_key_exists('apMac', $data)) {
            $object->setApMac($data['apMac']);
        }
        if (\array_key_exists('ssid', $data)) {
            $object->setSsid($data['ssid']);
        }
        if (\array_key_exists('txBytes', $data)) {
            $object->setTxBytes($data['txBytes']);
        }
        if (\array_key_exists('rxBytes', $data)) {
            $object->setRxBytes($data['rxBytes']);
        }
        if (\array_key_exists('txFrames', $data)) {
            $object->setTxFrames($data['txFrames']);
        }
        if (\array_key_exists('rxFrames', $data)) {
            $object->setRxFrames($data['rxFrames']);
        }
        if (\array_key_exists('txDrops', $data)) {
            $object->setTxDrops($data['txDrops']);
        }
        if (\array_key_exists('rxDrops', $data)) {
            $object->setRxDrops($data['rxDrops']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('sessionStartTime') && null !== $data->getSessionStartTime()) {
            $dataArray['sessionStartTime'] = $data->getSessionStartTime();
        }
        if ($data->isInitialized('sessionEndTime') && null !== $data->getSessionEndTime()) {
            $dataArray['sessionEndTime'] = $data->getSessionEndTime();
        }
        if ($data->isInitialized('clientMac') && null !== $data->getClientMac()) {
            $dataArray['clientMac'] = $data->getClientMac();
        }
        if ($data->isInitialized('ipAddress') && null !== $data->getIpAddress()) {
            $dataArray['ipAddress'] = $data->getIpAddress();
        }
        if ($data->isInitialized('ipv6Address') && null !== $data->getIpv6Address()) {
            $dataArray['ipv6Address'] = $data->getIpv6Address();
        }
        if ($data->isInitialized('coreNetworkType') && null !== $data->getCoreNetworkType()) {
            $dataArray['coreNetworkType'] = $data->getCoreNetworkType();
        }
        if ($data->isInitialized('hostname') && null !== $data->getHostname()) {
            $dataArray['hostname'] = $data->getHostname();
        }
        if ($data->isInitialized('osType') && null !== $data->getOsType()) {
            $dataArray['osType'] = $data->getOsType();
        }
        if ($data->isInitialized('modelName') && null !== $data->getModelName()) {
            $dataArray['modelName'] = $data->getModelName();
        }
        if ($data->isInitialized('mvnoName') && null !== $data->getMvnoName()) {
            $dataArray['mvnoName'] = $data->getMvnoName();
        }
        if ($data->isInitialized('apMac') && null !== $data->getApMac()) {
            $dataArray['apMac'] = $data->getApMac();
        }
        if ($data->isInitialized('ssid') && null !== $data->getSsid()) {
            $dataArray['ssid'] = $data->getSsid();
        }
        if ($data->isInitialized('txBytes') && null !== $data->getTxBytes()) {
            $dataArray['txBytes'] = $data->getTxBytes();
        }
        if ($data->isInitialized('rxBytes') && null !== $data->getRxBytes()) {
            $dataArray['rxBytes'] = $data->getRxBytes();
        }
        if ($data->isInitialized('txFrames') && null !== $data->getTxFrames()) {
            $dataArray['txFrames'] = $data->getTxFrames();
        }
        if ($data->isInitialized('rxFrames') && null !== $data->getRxFrames()) {
            $dataArray['rxFrames'] = $data->getRxFrames();
        }
        if ($data->isInitialized('txDrops') && null !== $data->getTxDrops()) {
            $dataArray['txDrops'] = $data->getTxDrops();
        }
        if ($data->isInitialized('rxDrops') && null !== $data->getRxDrops()) {
            $dataArray['rxDrops'] = $data->getRxDrops();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ClientHistoricalClient::class => false];
    }
}