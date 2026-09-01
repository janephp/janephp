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
class ProfileCreateDhcpProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateDhcpProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateDhcpProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateDhcpProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->vlanId = $data['vlanId'];
        }
        if (\array_key_exists('subnetNetworkIp', $data)) {
            $object->subnetNetworkIp = $data['subnetNetworkIp'];
        }
        if (\array_key_exists('subnetMask', $data)) {
            $object->subnetMask = $data['subnetMask'];
        }
        if (\array_key_exists('poolStartIp', $data)) {
            $object->poolStartIp = $data['poolStartIp'];
        }
        if (\array_key_exists('poolEndIp', $data)) {
            $object->poolEndIp = $data['poolEndIp'];
        }
        if (\array_key_exists('primaryDnsIp', $data)) {
            $object->primaryDnsIp = $data['primaryDnsIp'];
        }
        if (\array_key_exists('secondaryDnsIp', $data)) {
            $object->secondaryDnsIp = $data['secondaryDnsIp'];
        }
        if (\array_key_exists('leaseTimeHours', $data)) {
            $object->leaseTimeHours = $data['leaseTimeHours'];
        }
        if (\array_key_exists('leaseTimeMinutes', $data)) {
            $object->leaseTimeMinutes = $data['leaseTimeMinutes'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        $dataArray['vlanId'] = $data->vlanId ?? null;
        $dataArray['subnetNetworkIp'] = $data->subnetNetworkIp ?? null;
        $dataArray['subnetMask'] = $data->subnetMask ?? null;
        $dataArray['poolStartIp'] = $data->poolStartIp ?? null;
        $dataArray['poolEndIp'] = $data->poolEndIp ?? null;
        if (array_key_exists('primaryDnsIp', get_object_vars($data)) && null !== ($data->primaryDnsIp ?? null)) {
            $dataArray['primaryDnsIp'] = $data->primaryDnsIp ?? null;
        }
        if (array_key_exists('secondaryDnsIp', get_object_vars($data)) && null !== ($data->secondaryDnsIp ?? null)) {
            $dataArray['secondaryDnsIp'] = $data->secondaryDnsIp ?? null;
        }
        $dataArray['leaseTimeHours'] = $data->leaseTimeHours ?? null;
        $dataArray['leaseTimeMinutes'] = $data->leaseTimeMinutes ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateDhcpProfile::class => false];
    }
}