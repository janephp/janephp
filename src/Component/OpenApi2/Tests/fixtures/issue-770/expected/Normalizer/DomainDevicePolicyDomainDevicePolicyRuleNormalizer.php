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
class DomainDevicePolicyDomainDevicePolicyRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyDomainDevicePolicyRule::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyDomainDevicePolicyRule::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyDomainDevicePolicyRule();
        if (\array_key_exists('uplink', $data) && \is_int($data['uplink'])) {
            $data['uplink'] = (double) $data['uplink'];
        }
        if (\array_key_exists('downlink', $data) && \is_int($data['downlink'])) {
            $data['downlink'] = (double) $data['downlink'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('deviceType', $data)) {
            $object->setDeviceType($data['deviceType']);
        }
        if (\array_key_exists('osVendor', $data)) {
            $object->setOsVendor($data['osVendor']);
        }
        if (\array_key_exists('uplink', $data)) {
            $object->setUplink($data['uplink']);
        }
        if (\array_key_exists('downlink', $data)) {
            $object->setDownlink($data['downlink']);
        }
        if (\array_key_exists('vlan', $data)) {
            $object->setVlan($data['vlan']);
        }
        if (\array_key_exists('action', $data)) {
            $object->setAction($data['action']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('deviceType') && null !== $data->getDeviceType()) {
            $dataArray['deviceType'] = $data->getDeviceType();
        }
        if ($data->isInitialized('osVendor') && null !== $data->getOsVendor()) {
            $dataArray['osVendor'] = $data->getOsVendor();
        }
        if ($data->isInitialized('uplink') && null !== $data->getUplink()) {
            $dataArray['uplink'] = $data->getUplink();
        }
        if ($data->isInitialized('downlink') && null !== $data->getDownlink()) {
            $dataArray['downlink'] = $data->getDownlink();
        }
        if ($data->isInitialized('vlan') && null !== $data->getVlan()) {
            $dataArray['vlan'] = $data->getVlan();
        }
        if ($data->isInitialized('action') && null !== $data->getAction()) {
            $dataArray['action'] = $data->getAction();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyDomainDevicePolicyRule::class => false];
    }
}