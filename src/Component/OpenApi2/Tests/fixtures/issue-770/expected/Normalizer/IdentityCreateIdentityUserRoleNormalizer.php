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
class IdentityCreateIdentityUserRoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityCreateIdentityUserRole::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityCreateIdentityUserRole::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityCreateIdentityUserRole();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('userTrafficProfile', $data)) {
            $object->setUserTrafficProfile($this->denormalizer->denormalize($data['userTrafficProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('firewallProfileId', $data)) {
            $object->setFirewallProfileId($data['firewallProfileId']);
        }
        if (\array_key_exists('maxDevices', $data)) {
            $object->setMaxDevices($this->denormalizer->denormalize($data['maxDevices'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityMaxDevices::class, 'json', $context));
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->setVlanId($data['vlanId']);
        }
        if (\array_key_exists('vlanPooling', $data)) {
            $object->setVlanPooling($this->denormalizer->denormalize($data['vlanPooling'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('timeSchedulePolicy', $data)) {
            $object->setTimeSchedulePolicy($data['timeSchedulePolicy']);
        }
        if (\array_key_exists('timeScheduleList', $data)) {
            $object->setTimeScheduleList($this->denormalizer->denormalize($data['timeScheduleList'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityTimeScheduleList::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['userTrafficProfile'] = $data->getUserTrafficProfile() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getUserTrafficProfile(), 'json', $context));
        $dataArray['firewallProfileId'] = $data->getFirewallProfileId();
        $dataArray['maxDevices'] = $data->getMaxDevices() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getMaxDevices(), 'json', $context));
        if ($data->isInitialized('vlanId') && null !== $data->getVlanId()) {
            $dataArray['vlanId'] = $data->getVlanId();
        }
        if ($data->isInitialized('vlanPooling') && null !== $data->getVlanPooling()) {
            $dataArray['vlanPooling'] = $data->getVlanPooling() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getVlanPooling(), 'json', $context));
        }
        if ($data->isInitialized('timeSchedulePolicy') && null !== $data->getTimeSchedulePolicy()) {
            $dataArray['timeSchedulePolicy'] = $data->getTimeSchedulePolicy();
        }
        if ($data->isInitialized('timeScheduleList') && null !== $data->getTimeScheduleList()) {
            $dataArray['timeScheduleList'] = $data->getTimeScheduleList() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getTimeScheduleList(), 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityCreateIdentityUserRole::class => false];
    }
}