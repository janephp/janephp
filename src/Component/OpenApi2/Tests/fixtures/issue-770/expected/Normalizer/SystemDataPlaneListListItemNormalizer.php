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
class SystemDataPlaneListListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneListListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneListListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneListListItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('mac', $data)) {
            $object->setMac($data['mac']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('ipv6', $data)) {
            $object->setIpv6($data['ipv6']);
        }
        if (\array_key_exists('managedBy', $data)) {
            $object->setManagedBy($data['managedBy']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('serialNumber', $data)) {
            $object->setSerialNumber($data['serialNumber']);
        }
        if (\array_key_exists('greTunnels', $data)) {
            $object->setGreTunnels($data['greTunnels']);
        }
        if (\array_key_exists('fwVersion', $data)) {
            $object->setFwVersion($data['fwVersion']);
        }
        if (\array_key_exists('lastSeen', $data)) {
            $object->setLastSeen($data['lastSeen']);
        }
        if (\array_key_exists('dpStatus', $data)) {
            $object->setDpStatus($data['dpStatus']);
        }
        if (\array_key_exists('uptime', $data)) {
            $object->setUptime($data['uptime']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('mac') && null !== $data->getMac()) {
            $dataArray['mac'] = $data->getMac();
        }
        if ($data->isInitialized('ip') && null !== $data->getIp()) {
            $dataArray['ip'] = $data->getIp();
        }
        if ($data->isInitialized('ipv6') && null !== $data->getIpv6()) {
            $dataArray['ipv6'] = $data->getIpv6();
        }
        if ($data->isInitialized('managedBy') && null !== $data->getManagedBy()) {
            $dataArray['managedBy'] = $data->getManagedBy();
        }
        if ($data->isInitialized('model') && null !== $data->getModel()) {
            $dataArray['model'] = $data->getModel();
        }
        if ($data->isInitialized('serialNumber') && null !== $data->getSerialNumber()) {
            $dataArray['serialNumber'] = $data->getSerialNumber();
        }
        if ($data->isInitialized('greTunnels') && null !== $data->getGreTunnels()) {
            $dataArray['greTunnels'] = $data->getGreTunnels();
        }
        if ($data->isInitialized('fwVersion') && null !== $data->getFwVersion()) {
            $dataArray['fwVersion'] = $data->getFwVersion();
        }
        if ($data->isInitialized('lastSeen') && null !== $data->getLastSeen()) {
            $dataArray['lastSeen'] = $data->getLastSeen();
        }
        if ($data->isInitialized('dpStatus') && null !== $data->getDpStatus()) {
            $dataArray['dpStatus'] = $data->getDpStatus();
        }
        if ($data->isInitialized('uptime') && null !== $data->getUptime()) {
            $dataArray['uptime'] = $data->getUptime();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneListListItem::class => false];
    }
}