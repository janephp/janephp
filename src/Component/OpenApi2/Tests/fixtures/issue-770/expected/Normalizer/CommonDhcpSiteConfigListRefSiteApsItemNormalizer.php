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
class CommonDhcpSiteConfigListRefSiteApsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigListRefSiteApsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigListRefSiteApsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigListRefSiteApsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('apServerEnabled', $data) && \is_int($data['apServerEnabled'])) {
            $data['apServerEnabled'] = (bool) $data['apServerEnabled'];
        }
        if (\array_key_exists('apServerPrimary', $data) && \is_int($data['apServerPrimary'])) {
            $data['apServerPrimary'] = (bool) $data['apServerPrimary'];
        }
        if (\array_key_exists('apMac', $data)) {
            $object->apMac = $data['apMac'];
        }
        if (\array_key_exists('apName', $data)) {
            $object->apName = $data['apName'];
        }
        if (\array_key_exists('apStatus', $data)) {
            $object->apStatus = $data['apStatus'];
        }
        if (\array_key_exists('apServerEnabled', $data)) {
            $object->apServerEnabled = $data['apServerEnabled'];
        }
        if (\array_key_exists('apServerPrimary', $data)) {
            $object->apServerPrimary = $data['apServerPrimary'];
        }
        if (\array_key_exists('apServerIp', $data)) {
            $object->apServerIp = $data['apServerIp'];
        }
        if (\array_key_exists('apGatewayIp', $data)) {
            $object->apGatewayIp = $data['apGatewayIp'];
        }
        if (\array_key_exists('apServerType', $data)) {
            $object->apServerType = $data['apServerType'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apMac', get_object_vars($data)) && null !== ($data->apMac ?? null)) {
            $dataArray['apMac'] = $data->apMac ?? null;
        }
        if (array_key_exists('apName', get_object_vars($data)) && null !== ($data->apName ?? null)) {
            $dataArray['apName'] = $data->apName ?? null;
        }
        if (array_key_exists('apStatus', get_object_vars($data)) && null !== ($data->apStatus ?? null)) {
            $dataArray['apStatus'] = $data->apStatus ?? null;
        }
        if (array_key_exists('apServerEnabled', get_object_vars($data)) && null !== ($data->apServerEnabled ?? null)) {
            $dataArray['apServerEnabled'] = $data->apServerEnabled ?? null;
        }
        if (array_key_exists('apServerPrimary', get_object_vars($data)) && null !== ($data->apServerPrimary ?? null)) {
            $dataArray['apServerPrimary'] = $data->apServerPrimary ?? null;
        }
        if (array_key_exists('apServerIp', get_object_vars($data)) && null !== ($data->apServerIp ?? null)) {
            $dataArray['apServerIp'] = $data->apServerIp ?? null;
        }
        if (array_key_exists('apGatewayIp', get_object_vars($data)) && null !== ($data->apGatewayIp ?? null)) {
            $dataArray['apGatewayIp'] = $data->apGatewayIp ?? null;
        }
        if (array_key_exists('apServerType', get_object_vars($data)) && null !== ($data->apServerType ?? null)) {
            $dataArray['apServerType'] = $data->apServerType ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigListRefSiteApsItem::class => false];
    }
}