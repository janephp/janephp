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
class DhcpMsgStatsDhcpMsgStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStats::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStats::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStats();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->tenantId = $data['tenantId'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('apMac', $data)) {
            $object->apMac = $data['apMac'];
        }
        if (\array_key_exists('dhcpMsgRecvdStats', $data)) {
            $object->dhcpMsgRecvdStats = $this->denormalizer->denormalize($data['dhcpMsgRecvdStats'], \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats::class, 'json', $context);
        }
        if (\array_key_exists('dhcpMsgSentStats', $data)) {
            $object->dhcpMsgSentStats = $this->denormalizer->denormalize($data['dhcpMsgSentStats'], \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('tenantId', get_object_vars($data)) && null !== ($data->tenantId ?? null)) {
            $dataArray['tenantId'] = $data->tenantId ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('apMac', get_object_vars($data)) && null !== ($data->apMac ?? null)) {
            $dataArray['apMac'] = $data->apMac ?? null;
        }
        if (array_key_exists('dhcpMsgRecvdStats', get_object_vars($data)) && null !== ($data->dhcpMsgRecvdStats ?? null)) {
            $dataArray['dhcpMsgRecvdStats'] = ($data->dhcpMsgRecvdStats ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->dhcpMsgRecvdStats ?? null, 'json', $context));
        }
        if (array_key_exists('dhcpMsgSentStats', get_object_vars($data)) && null !== ($data->dhcpMsgSentStats ?? null)) {
            $dataArray['dhcpMsgSentStats'] = ($data->dhcpMsgSentStats ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->dhcpMsgSentStats ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStats::class => false];
    }
}