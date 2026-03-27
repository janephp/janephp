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
class ProfileModifyRuckusGREProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyRuckusGREProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyRuckusGREProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyRuckusGREProfile();
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
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('tunnelMode', $data)) {
            $object->setTunnelMode($data['tunnelMode']);
        }
        if (\array_key_exists('tunnelEncryption', $data)) {
            $object->setTunnelEncryption($data['tunnelEncryption']);
        }
        if (\array_key_exists('tunnelMtuAutoEnabled', $data)) {
            $object->setTunnelMtuAutoEnabled($data['tunnelMtuAutoEnabled']);
        }
        if (\array_key_exists('tunnelMtuSize', $data)) {
            $object->setTunnelMtuSize($data['tunnelMtuSize']);
        }
        if (\array_key_exists('keepAlivePeriod', $data)) {
            $object->setKeepAlivePeriod($data['keepAlivePeriod']);
        }
        if (\array_key_exists('keepAliveRetry', $data)) {
            $object->setKeepAliveRetry($data['keepAliveRetry']);
        }
        if (\array_key_exists('dualTunnel', $data)) {
            $object->setDualTunnel($data['dualTunnel']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('tunnelMode') && null !== $data->getTunnelMode()) {
            $dataArray['tunnelMode'] = $data->getTunnelMode();
        }
        if ($data->isInitialized('tunnelEncryption') && null !== $data->getTunnelEncryption()) {
            $dataArray['tunnelEncryption'] = $data->getTunnelEncryption();
        }
        if ($data->isInitialized('tunnelMtuAutoEnabled') && null !== $data->getTunnelMtuAutoEnabled()) {
            $dataArray['tunnelMtuAutoEnabled'] = $data->getTunnelMtuAutoEnabled();
        }
        if ($data->isInitialized('tunnelMtuSize') && null !== $data->getTunnelMtuSize()) {
            $dataArray['tunnelMtuSize'] = $data->getTunnelMtuSize();
        }
        if ($data->isInitialized('keepAlivePeriod') && null !== $data->getKeepAlivePeriod()) {
            $dataArray['keepAlivePeriod'] = $data->getKeepAlivePeriod();
        }
        if ($data->isInitialized('keepAliveRetry') && null !== $data->getKeepAliveRetry()) {
            $dataArray['keepAliveRetry'] = $data->getKeepAliveRetry();
        }
        if ($data->isInitialized('dualTunnel') && null !== $data->getDualTunnel()) {
            $dataArray['dualTunnel'] = $data->getDualTunnel();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyRuckusGREProfile::class => false];
    }
}