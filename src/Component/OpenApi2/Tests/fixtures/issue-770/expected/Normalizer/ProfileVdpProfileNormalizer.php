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
class ProfileVdpProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileVdpProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileVdpProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileVdpProfile();
        if (\array_key_exists('isSupport', $data) && \is_int($data['isSupport'])) {
            $data['isSupport'] = (bool) $data['isSupport'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
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
        if (\array_key_exists('extIp', $data)) {
            $object->setExtIp($data['extIp']);
        }
        if (\array_key_exists('dataVlan', $data)) {
            $object->setDataVlan($data['dataVlan']);
        }
        if (\array_key_exists('mgmtIp', $data)) {
            $object->setMgmtIp($data['mgmtIp']);
        }
        if (\array_key_exists('mgmtExtIp', $data)) {
            $object->setMgmtExtIp($data['mgmtExtIp']);
        }
        if (\array_key_exists('mgmtVlan', $data)) {
            $object->setMgmtVlan($data['mgmtVlan']);
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
        if (\array_key_exists('fwVersion', $data)) {
            $object->setFwVersion($data['fwVersion']);
        }
        if (\array_key_exists('isSupport', $data)) {
            $object->setIsSupport($data['isSupport']);
        }
        if (\array_key_exists('lastSeenOn', $data)) {
            $object->setLastSeenOn($data['lastSeenOn']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('registrationState', $data)) {
            $object->setRegistrationState($data['registrationState']);
        }
        if (\array_key_exists('uptime', $data)) {
            $object->setUptime($data['uptime']);
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->setCreateDateTime($data['createDateTime']);
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->setModifiedDateTime($data['modifiedDateTime']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->setModifierId($data['modifierId']);
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->setCreatorUsername($data['creatorUsername']);
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->setModifierUsername($data['modifierUsername']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
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
        if ($data->isInitialized('extIp') && null !== $data->getExtIp()) {
            $dataArray['extIp'] = $data->getExtIp();
        }
        if ($data->isInitialized('dataVlan') && null !== $data->getDataVlan()) {
            $dataArray['dataVlan'] = $data->getDataVlan();
        }
        if ($data->isInitialized('mgmtIp') && null !== $data->getMgmtIp()) {
            $dataArray['mgmtIp'] = $data->getMgmtIp();
        }
        if ($data->isInitialized('mgmtExtIp') && null !== $data->getMgmtExtIp()) {
            $dataArray['mgmtExtIp'] = $data->getMgmtExtIp();
        }
        if ($data->isInitialized('mgmtVlan') && null !== $data->getMgmtVlan()) {
            $dataArray['mgmtVlan'] = $data->getMgmtVlan();
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
        if ($data->isInitialized('fwVersion') && null !== $data->getFwVersion()) {
            $dataArray['fwVersion'] = $data->getFwVersion();
        }
        if ($data->isInitialized('isSupport') && null !== $data->getIsSupport()) {
            $dataArray['isSupport'] = $data->getIsSupport();
        }
        if ($data->isInitialized('lastSeenOn') && null !== $data->getLastSeenOn()) {
            $dataArray['lastSeenOn'] = $data->getLastSeenOn();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('registrationState') && null !== $data->getRegistrationState()) {
            $dataArray['registrationState'] = $data->getRegistrationState();
        }
        if ($data->isInitialized('uptime') && null !== $data->getUptime()) {
            $dataArray['uptime'] = $data->getUptime();
        }
        if ($data->isInitialized('createDateTime') && null !== $data->getCreateDateTime()) {
            $dataArray['createDateTime'] = $data->getCreateDateTime();
        }
        if ($data->isInitialized('modifiedDateTime') && null !== $data->getModifiedDateTime()) {
            $dataArray['modifiedDateTime'] = $data->getModifiedDateTime();
        }
        if ($data->isInitialized('creatorId') && null !== $data->getCreatorId()) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('modifierId') && null !== $data->getModifierId()) {
            $dataArray['modifierId'] = $data->getModifierId();
        }
        if ($data->isInitialized('creatorUsername') && null !== $data->getCreatorUsername()) {
            $dataArray['creatorUsername'] = $data->getCreatorUsername();
        }
        if ($data->isInitialized('modifierUsername') && null !== $data->getModifierUsername()) {
            $dataArray['modifierUsername'] = $data->getModifierUsername();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileVdpProfile::class => false];
    }
}