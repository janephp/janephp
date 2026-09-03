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
class ProfileFlexiVpnProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFlexiVpnProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFlexiVpnProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFlexiVpnProfile();
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
            $object->wlanId = $data['wlanId'];
        }
        if (\array_key_exists('wlanName', $data)) {
            $object->wlanName = $data['wlanName'];
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->zoneId = $data['zoneId'];
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->zoneName = $data['zoneName'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('sourceDpGroupId', $data)) {
            $object->sourceDpGroupId = $data['sourceDpGroupId'];
        }
        if (\array_key_exists('sourceDpGroupName', $data)) {
            $object->sourceDpGroupName = $data['sourceDpGroupName'];
        }
        if (\array_key_exists('destinationDpGroupId', $data)) {
            $object->destinationDpGroupId = $data['destinationDpGroupId'];
        }
        if (\array_key_exists('destinationDpGroupName', $data)) {
            $object->destinationDpGroupName = $data['destinationDpGroupName'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('wlanId', get_object_vars($data)) && null !== ($data->wlanId ?? null)) {
            $dataArray['wlanId'] = $data->wlanId ?? null;
        }
        if (array_key_exists('wlanName', get_object_vars($data)) && null !== ($data->wlanName ?? null)) {
            $dataArray['wlanName'] = $data->wlanName ?? null;
        }
        if (array_key_exists('zoneId', get_object_vars($data)) && null !== ($data->zoneId ?? null)) {
            $dataArray['zoneId'] = $data->zoneId ?? null;
        }
        if (array_key_exists('zoneName', get_object_vars($data)) && null !== ($data->zoneName ?? null)) {
            $dataArray['zoneName'] = $data->zoneName ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('sourceDpGroupId', get_object_vars($data)) && null !== ($data->sourceDpGroupId ?? null)) {
            $dataArray['sourceDpGroupId'] = $data->sourceDpGroupId ?? null;
        }
        if (array_key_exists('sourceDpGroupName', get_object_vars($data)) && null !== ($data->sourceDpGroupName ?? null)) {
            $dataArray['sourceDpGroupName'] = $data->sourceDpGroupName ?? null;
        }
        if (array_key_exists('destinationDpGroupId', get_object_vars($data)) && null !== ($data->destinationDpGroupId ?? null)) {
            $dataArray['destinationDpGroupId'] = $data->destinationDpGroupId ?? null;
        }
        if (array_key_exists('destinationDpGroupName', get_object_vars($data)) && null !== ($data->destinationDpGroupName ?? null)) {
            $dataArray['destinationDpGroupName'] = $data->destinationDpGroupName ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFlexiVpnProfile::class => false];
    }
}