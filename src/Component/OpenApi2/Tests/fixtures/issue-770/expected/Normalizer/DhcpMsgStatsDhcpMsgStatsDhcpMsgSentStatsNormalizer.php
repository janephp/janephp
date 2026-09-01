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
class DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dhcpOffer', $data)) {
            $object->dhcpOffer = $data['dhcpOffer'];
        }
        if (\array_key_exists('dhcpAck', $data)) {
            $object->dhcpAck = $data['dhcpAck'];
        }
        if (\array_key_exists('dhcpNak', $data)) {
            $object->dhcpNak = $data['dhcpNak'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('dhcpOffer', get_object_vars($data)) && null !== ($data->dhcpOffer ?? null)) {
            $dataArray['dhcpOffer'] = $data->dhcpOffer ?? null;
        }
        if (array_key_exists('dhcpAck', get_object_vars($data)) && null !== ($data->dhcpAck ?? null)) {
            $dataArray['dhcpAck'] = $data->dhcpAck ?? null;
        }
        if (array_key_exists('dhcpNak', get_object_vars($data)) && null !== ($data->dhcpNak ?? null)) {
            $dataArray['dhcpNak'] = $data->dhcpNak ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats::class => false];
    }
}