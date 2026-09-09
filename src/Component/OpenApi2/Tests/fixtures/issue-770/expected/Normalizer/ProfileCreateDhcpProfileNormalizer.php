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
class ProfileCreateDhcpProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateDhcpProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateDhcpProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateDhcpProfile();
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
        $dataArray['name'] = $data->name;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        $dataArray['vlanId'] = $data->vlanId;
        $dataArray['subnetNetworkIp'] = $data->subnetNetworkIp;
        $dataArray['subnetMask'] = $data->subnetMask;
        $dataArray['poolStartIp'] = $data->poolStartIp;
        $dataArray['poolEndIp'] = $data->poolEndIp;
        if (array_key_exists('primaryDnsIp', get_object_vars($data)) && null !== ($data->primaryDnsIp ?? null)) {
            $dataArray['primaryDnsIp'] = $data->primaryDnsIp;
        }
        if (array_key_exists('secondaryDnsIp', get_object_vars($data)) && null !== ($data->secondaryDnsIp ?? null)) {
            $dataArray['secondaryDnsIp'] = $data->secondaryDnsIp;
        }
        $dataArray['leaseTimeHours'] = $data->leaseTimeHours;
        $dataArray['leaseTimeMinutes'] = $data->leaseTimeMinutes;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateDhcpProfile::class => false];
    }
}