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
class ProfileModifyRuckusGREProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyRuckusGREProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyRuckusGREProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyRuckusGREProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dualTunnel', $data) && \is_int($data['dualTunnel'])) {
            $data['dualTunnel'] = (bool) $data['dualTunnel'];
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
        if (\array_key_exists('tunnelMode', $data)) {
            $object->tunnelMode = $data['tunnelMode'];
        }
        if (\array_key_exists('tunnelEncryption', $data)) {
            $object->tunnelEncryption = $data['tunnelEncryption'];
        }
        if (\array_key_exists('tunnelMtuAutoEnabled', $data)) {
            $object->tunnelMtuAutoEnabled = $data['tunnelMtuAutoEnabled'];
        }
        if (\array_key_exists('tunnelMtuSize', $data)) {
            $object->tunnelMtuSize = $data['tunnelMtuSize'];
        }
        if (\array_key_exists('keepAlivePeriod', $data)) {
            $object->keepAlivePeriod = $data['keepAlivePeriod'];
        }
        if (\array_key_exists('keepAliveRetry', $data)) {
            $object->keepAliveRetry = $data['keepAliveRetry'];
        }
        if (\array_key_exists('dualTunnel', $data)) {
            $object->dualTunnel = $data['dualTunnel'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
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
        if (array_key_exists('tunnelMode', get_object_vars($data)) && null !== ($data->tunnelMode ?? null)) {
            $dataArray['tunnelMode'] = $data->tunnelMode ?? null;
        }
        if (array_key_exists('tunnelEncryption', get_object_vars($data)) && null !== ($data->tunnelEncryption ?? null)) {
            $dataArray['tunnelEncryption'] = $data->tunnelEncryption ?? null;
        }
        if (array_key_exists('tunnelMtuAutoEnabled', get_object_vars($data)) && null !== ($data->tunnelMtuAutoEnabled ?? null)) {
            $dataArray['tunnelMtuAutoEnabled'] = $data->tunnelMtuAutoEnabled ?? null;
        }
        if (array_key_exists('tunnelMtuSize', get_object_vars($data)) && null !== ($data->tunnelMtuSize ?? null)) {
            $dataArray['tunnelMtuSize'] = $data->tunnelMtuSize ?? null;
        }
        if (array_key_exists('keepAlivePeriod', get_object_vars($data)) && null !== ($data->keepAlivePeriod ?? null)) {
            $dataArray['keepAlivePeriod'] = $data->keepAlivePeriod ?? null;
        }
        if (array_key_exists('keepAliveRetry', get_object_vars($data)) && null !== ($data->keepAliveRetry ?? null)) {
            $dataArray['keepAliveRetry'] = $data->keepAliveRetry ?? null;
        }
        if (array_key_exists('dualTunnel', get_object_vars($data)) && null !== ($data->dualTunnel ?? null)) {
            $dataArray['dualTunnel'] = $data->dualTunnel ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyRuckusGREProfile::class => false];
    }
}