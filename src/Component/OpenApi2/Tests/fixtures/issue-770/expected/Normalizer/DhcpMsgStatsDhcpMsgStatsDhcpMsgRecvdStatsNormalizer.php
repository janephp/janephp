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
class DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dhcpDiscover', $data)) {
            $object->dhcpDiscover = $data['dhcpDiscover'];
        }
        if (\array_key_exists('dhcpRequest', $data)) {
            $object->dhcpRequest = $data['dhcpRequest'];
        }
        if (\array_key_exists('dhcpDecline', $data)) {
            $object->dhcpDecline = $data['dhcpDecline'];
        }
        if (\array_key_exists('dhcpRelease', $data)) {
            $object->dhcpRelease = $data['dhcpRelease'];
        }
        if (\array_key_exists('dhcpInform', $data)) {
            $object->dhcpInform = $data['dhcpInform'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('dhcpDiscover', get_object_vars($data)) && null !== ($data->dhcpDiscover ?? null)) {
            $dataArray['dhcpDiscover'] = $data->dhcpDiscover ?? null;
        }
        if (array_key_exists('dhcpRequest', get_object_vars($data)) && null !== ($data->dhcpRequest ?? null)) {
            $dataArray['dhcpRequest'] = $data->dhcpRequest ?? null;
        }
        if (array_key_exists('dhcpDecline', get_object_vars($data)) && null !== ($data->dhcpDecline ?? null)) {
            $dataArray['dhcpDecline'] = $data->dhcpDecline ?? null;
        }
        if (array_key_exists('dhcpRelease', get_object_vars($data)) && null !== ($data->dhcpRelease ?? null)) {
            $dataArray['dhcpRelease'] = $data->dhcpRelease ?? null;
        }
        if (array_key_exists('dhcpInform', get_object_vars($data)) && null !== ($data->dhcpInform ?? null)) {
            $dataArray['dhcpInform'] = $data->dhcpInform ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats::class => false];
    }
}