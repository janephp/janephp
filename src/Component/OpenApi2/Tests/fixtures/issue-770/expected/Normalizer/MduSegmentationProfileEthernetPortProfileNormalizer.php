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
class MduSegmentationProfileEthernetPortProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileEthernetPortProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileEthernetPortProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileEthernetPortProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('tunnelEnabled', $data) && \is_int($data['tunnelEnabled'])) {
            $data['tunnelEnabled'] = (bool) $data['tunnelEnabled'];
        }
        if (\array_key_exists('userSidePortEnabled', $data) && \is_int($data['userSidePortEnabled'])) {
            $data['userSidePortEnabled'] = (bool) $data['userSidePortEnabled'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('tunnelEnabled', $data)) {
            $object->tunnelEnabled = $data['tunnelEnabled'];
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->tenantId = $data['tenantId'];
        }
        if (\array_key_exists('mduProfileId', $data)) {
            $object->mduProfileId = $data['mduProfileId'];
        }
        if (\array_key_exists('accessNetworkType', $data)) {
            $object->accessNetworkType = $data['accessNetworkType'];
        }
        if (\array_key_exists('untagId', $data)) {
            $object->untagId = $data['untagId'];
        }
        if (\array_key_exists('arpRequestRateLimit', $data)) {
            $object->arpRequestRateLimit = $data['arpRequestRateLimit'];
        }
        if (\array_key_exists('dhcpRequestRateLimit', $data)) {
            $object->dhcpRequestRateLimit = $data['dhcpRequestRateLimit'];
        }
        if (\array_key_exists('userSidePortEnabled', $data)) {
            $object->userSidePortEnabled = $data['userSidePortEnabled'];
        }
        if (\array_key_exists('userSidePortMaxClient', $data)) {
            $object->userSidePortMaxClient = $data['userSidePortMaxClient'];
        }
        if (\array_key_exists('userSidePortUplinkLimit', $data)) {
            $object->userSidePortUplinkLimit = $data['userSidePortUplinkLimit'];
        }
        if (\array_key_exists('userSidePortDownlinkLimit', $data)) {
            $object->userSidePortDownlinkLimit = $data['userSidePortDownlinkLimit'];
        }
        if (\array_key_exists('_8021X', $data)) {
            $object->n8021X = $this->denormalizer->denormalize($data['_8021X'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPort8021X::class, 'json', $context);
        }
        if (\array_key_exists('tunnelProfile', $data)) {
            $object->tunnelProfile = $this->denormalizer->denormalize($data['tunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('ipsecProfile', $data)) {
            $object->ipsecProfile = $this->denormalizer->denormalize($data['ipsecProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('tunnelEnabled', get_object_vars($data)) && null !== ($data->tunnelEnabled ?? null)) {
            $dataArray['tunnelEnabled'] = $data->tunnelEnabled ?? null;
        }
        if (array_key_exists('tenantId', get_object_vars($data)) && null !== ($data->tenantId ?? null)) {
            $dataArray['tenantId'] = $data->tenantId ?? null;
        }
        if (array_key_exists('mduProfileId', get_object_vars($data)) && null !== ($data->mduProfileId ?? null)) {
            $dataArray['mduProfileId'] = $data->mduProfileId ?? null;
        }
        if (array_key_exists('accessNetworkType', get_object_vars($data)) && null !== ($data->accessNetworkType ?? null)) {
            $dataArray['accessNetworkType'] = $data->accessNetworkType ?? null;
        }
        if (array_key_exists('untagId', get_object_vars($data)) && null !== ($data->untagId ?? null)) {
            $dataArray['untagId'] = $data->untagId ?? null;
        }
        if (array_key_exists('arpRequestRateLimit', get_object_vars($data)) && null !== ($data->arpRequestRateLimit ?? null)) {
            $dataArray['arpRequestRateLimit'] = $data->arpRequestRateLimit ?? null;
        }
        if (array_key_exists('dhcpRequestRateLimit', get_object_vars($data)) && null !== ($data->dhcpRequestRateLimit ?? null)) {
            $dataArray['dhcpRequestRateLimit'] = $data->dhcpRequestRateLimit ?? null;
        }
        if (array_key_exists('userSidePortEnabled', get_object_vars($data)) && null !== ($data->userSidePortEnabled ?? null)) {
            $dataArray['userSidePortEnabled'] = $data->userSidePortEnabled ?? null;
        }
        if (array_key_exists('userSidePortMaxClient', get_object_vars($data)) && null !== ($data->userSidePortMaxClient ?? null)) {
            $dataArray['userSidePortMaxClient'] = $data->userSidePortMaxClient ?? null;
        }
        if (array_key_exists('userSidePortUplinkLimit', get_object_vars($data)) && null !== ($data->userSidePortUplinkLimit ?? null)) {
            $dataArray['userSidePortUplinkLimit'] = $data->userSidePortUplinkLimit ?? null;
        }
        if (array_key_exists('userSidePortDownlinkLimit', get_object_vars($data)) && null !== ($data->userSidePortDownlinkLimit ?? null)) {
            $dataArray['userSidePortDownlinkLimit'] = $data->userSidePortDownlinkLimit ?? null;
        }
        if (array_key_exists('n8021X', get_object_vars($data)) && null !== ($data->n8021X ?? null)) {
            $dataArray['_8021X'] = ($data->n8021X ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->n8021X ?? null, 'json', $context));
        }
        if (array_key_exists('tunnelProfile', get_object_vars($data)) && null !== ($data->tunnelProfile ?? null)) {
            $dataArray['tunnelProfile'] = ($data->tunnelProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->tunnelProfile ?? null, 'json', $context));
        }
        if (array_key_exists('ipsecProfile', get_object_vars($data)) && null !== ($data->ipsecProfile ?? null)) {
            $dataArray['ipsecProfile'] = ($data->ipsecProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->ipsecProfile ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileEthernetPortProfile::class => false];
    }
}