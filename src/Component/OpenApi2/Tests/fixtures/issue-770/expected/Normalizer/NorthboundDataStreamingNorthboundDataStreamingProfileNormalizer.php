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
class NorthboundDataStreamingNorthboundDataStreamingProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('northboundDataStreamingEnabled', $data) && \is_int($data['northboundDataStreamingEnabled'])) {
            $data['northboundDataStreamingEnabled'] = (bool) $data['northboundDataStreamingEnabled'];
        }
        if (\array_key_exists('streamingByDomainZoneEnabled', $data) && \is_int($data['streamingByDomainZoneEnabled'])) {
            $data['streamingByDomainZoneEnabled'] = (bool) $data['streamingByDomainZoneEnabled'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('serverHost', $data)) {
            $object->setServerHost($data['serverHost']);
        }
        if (\array_key_exists('serverPort', $data)) {
            $object->setServerPort($data['serverPort']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        if (\array_key_exists('password', $data)) {
            $object->setPassword($data['password']);
        }
        if (\array_key_exists('systemId', $data)) {
            $object->setSystemId($data['systemId']);
        }
        if (\array_key_exists('connectionStatus', $data)) {
            $object->setConnectionStatus($data['connectionStatus']);
        }
        if (\array_key_exists('dataTypes', $data)) {
            $values = [];
            foreach ($data['dataTypes'] as $value) {
                $values[] = $value;
            }
            $object->setDataTypes($values);
        }
        if (\array_key_exists('northboundDataStreamingEnabled', $data)) {
            $object->setNorthboundDataStreamingEnabled($data['northboundDataStreamingEnabled']);
        }
        if (\array_key_exists('streamingByDomainZoneEnabled', $data)) {
            $object->setStreamingByDomainZoneEnabled($data['streamingByDomainZoneEnabled']);
        }
        if (\array_key_exists('streamingDomainIds', $data)) {
            $values_1 = [];
            foreach ($data['streamingDomainIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setStreamingDomainIds($values_1);
        }
        if (\array_key_exists('streamingZoneIds', $data)) {
            $values_2 = [];
            foreach ($data['streamingZoneIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setStreamingZoneIds($values_2);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('serverHost') && null !== $data->getServerHost()) {
            $dataArray['serverHost'] = $data->getServerHost();
        }
        if ($data->isInitialized('serverPort') && null !== $data->getServerPort()) {
            $dataArray['serverPort'] = $data->getServerPort();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $data->getUser();
        }
        if ($data->isInitialized('password') && null !== $data->getPassword()) {
            $dataArray['password'] = $data->getPassword();
        }
        if ($data->isInitialized('systemId') && null !== $data->getSystemId()) {
            $dataArray['systemId'] = $data->getSystemId();
        }
        if ($data->isInitialized('connectionStatus') && null !== $data->getConnectionStatus()) {
            $dataArray['connectionStatus'] = $data->getConnectionStatus();
        }
        if ($data->isInitialized('dataTypes') && null !== $data->getDataTypes()) {
            $values = [];
            foreach ($data->getDataTypes() as $value) {
                $values[] = $value;
            }
            $dataArray['dataTypes'] = $values;
        }
        if ($data->isInitialized('northboundDataStreamingEnabled') && null !== $data->getNorthboundDataStreamingEnabled()) {
            $dataArray['northboundDataStreamingEnabled'] = $data->getNorthboundDataStreamingEnabled();
        }
        if ($data->isInitialized('streamingByDomainZoneEnabled') && null !== $data->getStreamingByDomainZoneEnabled()) {
            $dataArray['streamingByDomainZoneEnabled'] = $data->getStreamingByDomainZoneEnabled();
        }
        if ($data->isInitialized('streamingDomainIds') && null !== $data->getStreamingDomainIds()) {
            $values_1 = [];
            foreach ($data->getStreamingDomainIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['streamingDomainIds'] = $values_1;
        }
        if ($data->isInitialized('streamingZoneIds') && null !== $data->getStreamingZoneIds()) {
            $values_2 = [];
            foreach ($data->getStreamingZoneIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['streamingZoneIds'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingProfile::class => false];
    }
}