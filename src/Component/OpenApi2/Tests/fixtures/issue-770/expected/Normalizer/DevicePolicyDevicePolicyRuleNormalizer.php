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
class DevicePolicyDevicePolicyRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DevicePolicyDevicePolicyRule::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DevicePolicyDevicePolicyRule::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DevicePolicyDevicePolicyRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('uplink', $data) && \is_int($data['uplink'])) {
            $data['uplink'] = (float) $data['uplink'];
        }
        if (\array_key_exists('downlink', $data) && \is_int($data['downlink'])) {
            $data['downlink'] = (float) $data['downlink'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('deviceType', $data)) {
            $object->deviceType = $data['deviceType'];
        }
        if (\array_key_exists('uplink', $data)) {
            $object->uplink = $data['uplink'];
        }
        if (\array_key_exists('downlink', $data)) {
            $object->downlink = $data['downlink'];
        }
        if (\array_key_exists('vlan', $data)) {
            $object->vlan = $data['vlan'];
        }
        if (\array_key_exists('action', $data)) {
            $object->action = $data['action'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('deviceType', get_object_vars($data)) && null !== ($data->deviceType ?? null)) {
            $dataArray['deviceType'] = $data->deviceType ?? null;
        }
        if (array_key_exists('uplink', get_object_vars($data)) && null !== ($data->uplink ?? null)) {
            $dataArray['uplink'] = $data->uplink ?? null;
        }
        if (array_key_exists('downlink', get_object_vars($data)) && null !== ($data->downlink ?? null)) {
            $dataArray['downlink'] = $data->downlink ?? null;
        }
        if (array_key_exists('vlan', get_object_vars($data)) && null !== ($data->vlan ?? null)) {
            $dataArray['vlan'] = $data->vlan ?? null;
        }
        if (array_key_exists('action', get_object_vars($data)) && null !== ($data->action ?? null)) {
            $dataArray['action'] = $data->action ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DevicePolicyDevicePolicyRule::class => false];
    }
}