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
class ProfileFlexiVpnProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFlexiVpnProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFlexiVpnProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFlexiVpnProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('wlanId', $data)) {
            $object->setWlanId($data['wlanId']);
        }
        if (\array_key_exists('wlanName', $data)) {
            $object->setWlanName($data['wlanName']);
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->setZoneName($data['zoneName']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('sourceDpGroupId', $data)) {
            $object->setSourceDpGroupId($data['sourceDpGroupId']);
        }
        if (\array_key_exists('sourceDpGroupName', $data)) {
            $object->setSourceDpGroupName($data['sourceDpGroupName']);
        }
        if (\array_key_exists('destinationDpGroupId', $data)) {
            $object->setDestinationDpGroupId($data['destinationDpGroupId']);
        }
        if (\array_key_exists('destinationDpGroupName', $data)) {
            $object->setDestinationDpGroupName($data['destinationDpGroupName']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('wlanId') && null !== $data->getWlanId()) {
            $dataArray['wlanId'] = $data->getWlanId();
        }
        if ($data->isInitialized('wlanName') && null !== $data->getWlanName()) {
            $dataArray['wlanName'] = $data->getWlanName();
        }
        if ($data->isInitialized('zoneId') && null !== $data->getZoneId()) {
            $dataArray['zoneId'] = $data->getZoneId();
        }
        if ($data->isInitialized('zoneName') && null !== $data->getZoneName()) {
            $dataArray['zoneName'] = $data->getZoneName();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('sourceDpGroupId') && null !== $data->getSourceDpGroupId()) {
            $dataArray['sourceDpGroupId'] = $data->getSourceDpGroupId();
        }
        if ($data->isInitialized('sourceDpGroupName') && null !== $data->getSourceDpGroupName()) {
            $dataArray['sourceDpGroupName'] = $data->getSourceDpGroupName();
        }
        if ($data->isInitialized('destinationDpGroupId') && null !== $data->getDestinationDpGroupId()) {
            $dataArray['destinationDpGroupId'] = $data->getDestinationDpGroupId();
        }
        if ($data->isInitialized('destinationDpGroupName') && null !== $data->getDestinationDpGroupName()) {
            $dataArray['destinationDpGroupName'] = $data->getDestinationDpGroupName();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFlexiVpnProfile::class => false];
    }
}