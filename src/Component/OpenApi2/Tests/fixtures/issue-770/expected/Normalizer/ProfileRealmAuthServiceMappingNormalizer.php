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
class ProfileRealmAuthServiceMappingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRealmAuthServiceMapping::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRealmAuthServiceMapping::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRealmAuthServiceMapping();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('hostedAaaEnabled', $data) && \is_int($data['hostedAaaEnabled'])) {
            $data['hostedAaaEnabled'] = (bool) $data['hostedAaaEnabled'];
        }
        if (\array_key_exists('realm', $data)) {
            $object->setRealm($data['realm']);
        }
        if (\array_key_exists('serviceType', $data)) {
            $object->setServiceType($data['serviceType']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('authorizationMethod', $data)) {
            $object->setAuthorizationMethod($data['authorizationMethod']);
        }
        if (\array_key_exists('dynamicVlanId', $data)) {
            $object->setDynamicVlanId($data['dynamicVlanId']);
        }
        if (\array_key_exists('hostedAaaEnabled', $data)) {
            $object->setHostedAaaEnabled($data['hostedAaaEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['realm'] = $data->getRealm();
        $dataArray['serviceType'] = $data->getServiceType();
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        $dataArray['authorizationMethod'] = $data->getAuthorizationMethod();
        if ($data->isInitialized('dynamicVlanId') && null !== $data->getDynamicVlanId()) {
            $dataArray['dynamicVlanId'] = $data->getDynamicVlanId();
        }
        if ($data->isInitialized('hostedAaaEnabled') && null !== $data->getHostedAaaEnabled()) {
            $dataArray['hostedAaaEnabled'] = $data->getHostedAaaEnabled();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRealmAuthServiceMapping::class => false];
    }
}