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
class ProfileCoreNetworkGatewayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCoreNetworkGateway::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCoreNetworkGateway::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCoreNetworkGateway();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('primaryGateway', $data)) {
            $object->primaryGateway = $data['primaryGateway'];
        }
        if (\array_key_exists('secondaryGateway', $data)) {
            $object->secondaryGateway = $data['secondaryGateway'];
        }
        if (\array_key_exists('tunnelMTU', $data)) {
            $object->tunnelMTU = $data['tunnelMTU'];
        }
        if (\array_key_exists('tunnelMTUSize', $data)) {
            $object->tunnelMTUSize = $data['tunnelMTUSize'];
        }
        if (\array_key_exists('keepAlivePeriod', $data)) {
            $object->keepAlivePeriod = $data['keepAlivePeriod'];
        }
        if (\array_key_exists('keepAliveRetry', $data)) {
            $object->keepAliveRetry = $data['keepAliveRetry'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('primaryGateway', get_object_vars($data)) && null !== ($data->primaryGateway ?? null)) {
            $dataArray['primaryGateway'] = $data->primaryGateway ?? null;
        }
        if (array_key_exists('secondaryGateway', get_object_vars($data)) && null !== ($data->secondaryGateway ?? null)) {
            $dataArray['secondaryGateway'] = $data->secondaryGateway ?? null;
        }
        if (array_key_exists('tunnelMTU', get_object_vars($data)) && null !== ($data->tunnelMTU ?? null)) {
            $dataArray['tunnelMTU'] = $data->tunnelMTU ?? null;
        }
        if (array_key_exists('tunnelMTUSize', get_object_vars($data)) && null !== ($data->tunnelMTUSize ?? null)) {
            $dataArray['tunnelMTUSize'] = $data->tunnelMTUSize ?? null;
        }
        if (array_key_exists('keepAlivePeriod', get_object_vars($data)) && null !== ($data->keepAlivePeriod ?? null)) {
            $dataArray['keepAlivePeriod'] = $data->keepAlivePeriod ?? null;
        }
        if (array_key_exists('keepAliveRetry', get_object_vars($data)) && null !== ($data->keepAliveRetry ?? null)) {
            $dataArray['keepAliveRetry'] = $data->keepAliveRetry ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCoreNetworkGateway::class => false];
    }
}