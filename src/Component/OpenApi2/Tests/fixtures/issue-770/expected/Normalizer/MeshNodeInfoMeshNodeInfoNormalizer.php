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
class MeshNodeInfoMeshNodeInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNodeInfoMeshNodeInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNodeInfoMeshNodeInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNodeInfoMeshNodeInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('hasDownLink', $data) && \is_int($data['hasDownLink'])) {
            $data['hasDownLink'] = (bool) $data['hasDownLink'];
        }
        if (\array_key_exists('apMac', $data)) {
            $object->setApMac($data['apMac']);
        }
        if (\array_key_exists('meshRole', $data)) {
            $object->setMeshRole($data['meshRole']);
        }
        if (\array_key_exists('apName', $data)) {
            $object->setApName($data['apName']);
        }
        if (\array_key_exists('apModel', $data)) {
            $object->setApModel($data['apModel']);
        }
        if (\array_key_exists('ipAddress', $data)) {
            $object->setIpAddress($data['ipAddress']);
        }
        if (\array_key_exists('externalIPAddress', $data)) {
            $object->setExternalIPAddress($data['externalIPAddress']);
        }
        if (\array_key_exists('channel', $data)) {
            $object->setChannel($data['channel']);
        }
        if (\array_key_exists('uplinkChannel', $data)) {
            $object->setUplinkChannel($data['uplinkChannel']);
        }
        if (\array_key_exists('downlinkChannel', $data)) {
            $object->setDownlinkChannel($data['downlinkChannel']);
        }
        if (\array_key_exists('uplinkSnr', $data)) {
            $object->setUplinkSnr($data['uplinkSnr']);
        }
        if (\array_key_exists('downlinkSnr', $data)) {
            $object->setDownlinkSnr($data['downlinkSnr']);
        }
        if (\array_key_exists('hasDownLink', $data)) {
            $object->setHasDownLink($data['hasDownLink']);
        }
        if (\array_key_exists('clientCount', $data)) {
            $object->setClientCount($data['clientCount']);
        }
        if (\array_key_exists('hops', $data)) {
            $object->setHops($data['hops']);
        }
        if (\array_key_exists('helperZoneInfo', $data)) {
            $values = [];
            foreach ($data['helperZoneInfo'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNodeInfoHelperZoneInfo::class, 'json', $context);
            }
            $object->setHelperZoneInfo($values);
        }
        if (\array_key_exists('uplinkMCSRate', $data)) {
            $object->setUplinkMCSRate($data['uplinkMCSRate']);
        }
        if (\array_key_exists('downlinkMCSRate', $data)) {
            $object->setDownlinkMCSRate($data['downlinkMCSRate']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('apMac') && null !== $data->getApMac()) {
            $dataArray['apMac'] = $data->getApMac();
        }
        if ($data->isInitialized('meshRole') && null !== $data->getMeshRole()) {
            $dataArray['meshRole'] = $data->getMeshRole();
        }
        if ($data->isInitialized('apName') && null !== $data->getApName()) {
            $dataArray['apName'] = $data->getApName();
        }
        if ($data->isInitialized('apModel') && null !== $data->getApModel()) {
            $dataArray['apModel'] = $data->getApModel();
        }
        if ($data->isInitialized('ipAddress') && null !== $data->getIpAddress()) {
            $dataArray['ipAddress'] = $data->getIpAddress();
        }
        if ($data->isInitialized('externalIPAddress') && null !== $data->getExternalIPAddress()) {
            $dataArray['externalIPAddress'] = $data->getExternalIPAddress();
        }
        if ($data->isInitialized('channel') && null !== $data->getChannel()) {
            $dataArray['channel'] = $data->getChannel();
        }
        if ($data->isInitialized('uplinkChannel') && null !== $data->getUplinkChannel()) {
            $dataArray['uplinkChannel'] = $data->getUplinkChannel();
        }
        if ($data->isInitialized('downlinkChannel') && null !== $data->getDownlinkChannel()) {
            $dataArray['downlinkChannel'] = $data->getDownlinkChannel();
        }
        if ($data->isInitialized('uplinkSnr') && null !== $data->getUplinkSnr()) {
            $dataArray['uplinkSnr'] = $data->getUplinkSnr();
        }
        if ($data->isInitialized('downlinkSnr') && null !== $data->getDownlinkSnr()) {
            $dataArray['downlinkSnr'] = $data->getDownlinkSnr();
        }
        if ($data->isInitialized('hasDownLink') && null !== $data->getHasDownLink()) {
            $dataArray['hasDownLink'] = $data->getHasDownLink();
        }
        if ($data->isInitialized('clientCount') && null !== $data->getClientCount()) {
            $dataArray['clientCount'] = $data->getClientCount();
        }
        if ($data->isInitialized('hops') && null !== $data->getHops()) {
            $dataArray['hops'] = $data->getHops();
        }
        if ($data->isInitialized('helperZoneInfo') && null !== $data->getHelperZoneInfo()) {
            $values = [];
            foreach ($data->getHelperZoneInfo() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['helperZoneInfo'] = $values;
        }
        if ($data->isInitialized('uplinkMCSRate') && null !== $data->getUplinkMCSRate()) {
            $dataArray['uplinkMCSRate'] = $data->getUplinkMCSRate();
        }
        if ($data->isInitialized('downlinkMCSRate') && null !== $data->getDownlinkMCSRate()) {
            $dataArray['downlinkMCSRate'] = $data->getDownlinkMCSRate();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MeshNodeInfoMeshNodeInfo::class => false];
    }
}