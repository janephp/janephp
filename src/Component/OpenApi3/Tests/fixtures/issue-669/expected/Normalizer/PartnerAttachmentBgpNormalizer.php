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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\PartnerAttachmentBgp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('local_asn', $data)) {
            $object->setLocalAsn($data['local_asn']);
            unset($data['local_asn']);
        }
        if (\array_key_exists('peer_asn', $data)) {
            $object->setPeerAsn($data['peer_asn']);
            unset($data['peer_asn']);
        }
        if (\array_key_exists('local_router_ip', $data)) {
            $object->setLocalRouterIp($data['local_router_ip']);
            unset($data['local_router_ip']);
        }
        if (\array_key_exists('peer_router_ip', $data)) {
            $object->setPeerRouterIp($data['peer_router_ip']);
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
        if ($data->isInitialized('localAsn') && null !== $data->getLocalAsn()) {
            $dataArray['local_asn'] = $data->getLocalAsn();
        }
        if ($data->isInitialized('peerAsn') && null !== $data->getPeerAsn()) {
            $dataArray['peer_asn'] = $data->getPeerAsn();
        }
        if ($data->isInitialized('localRouterIp') && null !== $data->getLocalRouterIp()) {
            $dataArray['local_router_ip'] = $data->getLocalRouterIp();
        }
        if ($data->isInitialized('peerRouterIp') && null !== $data->getPeerRouterIp()) {
            $dataArray['peer_router_ip'] = $data->getPeerRouterIp();
        }
        foreach ($data as $key => $value) {
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