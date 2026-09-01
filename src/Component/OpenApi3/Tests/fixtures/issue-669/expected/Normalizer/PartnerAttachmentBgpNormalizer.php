<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PartnerAttachmentBgpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\PartnerAttachmentBgp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\PartnerAttachmentBgp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\PartnerAttachmentBgp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('local_asn', $data)) {
            $object->localAsn = $data['local_asn'];
            unset($data['local_asn']);
        }
        if (\array_key_exists('peer_asn', $data)) {
            $object->peerAsn = $data['peer_asn'];
            unset($data['peer_asn']);
        }
        if (\array_key_exists('local_router_ip', $data)) {
            $object->localRouterIp = $data['local_router_ip'];
            unset($data['local_router_ip']);
        }
        if (\array_key_exists('peer_router_ip', $data)) {
            $object->peerRouterIp = $data['peer_router_ip'];
            unset($data['peer_router_ip']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('localAsn', get_object_vars($data)) && null !== ($data->localAsn ?? null)) {
            $dataArray['local_asn'] = $data->localAsn ?? null;
        }
        if (array_key_exists('peerAsn', get_object_vars($data)) && null !== ($data->peerAsn ?? null)) {
            $dataArray['peer_asn'] = $data->peerAsn ?? null;
        }
        if (array_key_exists('localRouterIp', get_object_vars($data)) && null !== ($data->localRouterIp ?? null)) {
            $dataArray['local_router_ip'] = $data->localRouterIp ?? null;
        }
        if (array_key_exists('peerRouterIp', get_object_vars($data)) && null !== ($data->peerRouterIp ?? null)) {
            $dataArray['peer_router_ip'] = $data->peerRouterIp ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\PartnerAttachmentBgp::class => false];
    }
}