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
class DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dhcpDiscover', $data)) {
            $object->setDhcpDiscover($data['dhcpDiscover']);
        }
        if (\array_key_exists('dhcpRequest', $data)) {
            $object->setDhcpRequest($data['dhcpRequest']);
        }
        if (\array_key_exists('dhcpDecline', $data)) {
            $object->setDhcpDecline($data['dhcpDecline']);
        }
        if (\array_key_exists('dhcpRelease', $data)) {
            $object->setDhcpRelease($data['dhcpRelease']);
        }
        if (\array_key_exists('dhcpInform', $data)) {
            $object->setDhcpInform($data['dhcpInform']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dhcpDiscover') && null !== $data->getDhcpDiscover()) {
            $dataArray['dhcpDiscover'] = $data->getDhcpDiscover();
        }
        if ($data->isInitialized('dhcpRequest') && null !== $data->getDhcpRequest()) {
            $dataArray['dhcpRequest'] = $data->getDhcpRequest();
        }
        if ($data->isInitialized('dhcpDecline') && null !== $data->getDhcpDecline()) {
            $dataArray['dhcpDecline'] = $data->getDhcpDecline();
        }
        if ($data->isInitialized('dhcpRelease') && null !== $data->getDhcpRelease()) {
            $dataArray['dhcpRelease'] = $data->getDhcpRelease();
        }
        if ($data->isInitialized('dhcpInform') && null !== $data->getDhcpInform()) {
            $dataArray['dhcpInform'] = $data->getDhcpInform();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats::class => false];
    }
}