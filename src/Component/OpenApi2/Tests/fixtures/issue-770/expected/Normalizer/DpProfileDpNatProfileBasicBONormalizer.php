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
class DpProfileDpNatProfileBasicBONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfileBasicBO::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfileBasicBO::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfileBasicBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('profileName', $data)) {
            $object->setProfileName($data['profileName']);
        }
        if (\array_key_exists('natPublicVlanId', $data)) {
            $object->setNatPublicVlanId($data['natPublicVlanId']);
        }
        if (\array_key_exists('profileId', $data)) {
            $object->setProfileId($data['profileId']);
        }
        if (\array_key_exists('appliedDpKey', $data)) {
            $object->setAppliedDpKey($data['appliedDpKey']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('secondaryNatDefaultRouteGateway', $data)) {
            $object->setSecondaryNatDefaultRouteGateway($data['secondaryNatDefaultRouteGateway']);
        }
        if (\array_key_exists('primaryNatDefaultRouteGateway', $data)) {
            $object->setPrimaryNatDefaultRouteGateway($data['primaryNatDefaultRouteGateway']);
        }
        if (\array_key_exists('natPublicSubnetId', $data)) {
            $object->setNatPublicSubnetId($this->denormalizer->denormalize($data['natPublicSubnetId'], \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePublicSubnetIdBO::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('profileName') && null !== $data->getProfileName()) {
            $dataArray['profileName'] = $data->getProfileName();
        }
        if ($data->isInitialized('natPublicVlanId') && null !== $data->getNatPublicVlanId()) {
            $dataArray['natPublicVlanId'] = $data->getNatPublicVlanId();
        }
        if ($data->isInitialized('profileId') && null !== $data->getProfileId()) {
            $dataArray['profileId'] = $data->getProfileId();
        }
        if ($data->isInitialized('appliedDpKey') && null !== $data->getAppliedDpKey()) {
            $dataArray['appliedDpKey'] = $data->getAppliedDpKey();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('secondaryNatDefaultRouteGateway') && null !== $data->getSecondaryNatDefaultRouteGateway()) {
            $dataArray['secondaryNatDefaultRouteGateway'] = $data->getSecondaryNatDefaultRouteGateway();
        }
        if ($data->isInitialized('primaryNatDefaultRouteGateway') && null !== $data->getPrimaryNatDefaultRouteGateway()) {
            $dataArray['primaryNatDefaultRouteGateway'] = $data->getPrimaryNatDefaultRouteGateway();
        }
        if ($data->isInitialized('natPublicSubnetId') && null !== $data->getNatPublicSubnetId()) {
            $dataArray['natPublicSubnetId'] = $data->getNatPublicSubnetId() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getNatPublicSubnetId(), 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfileBasicBO::class => false];
    }
}