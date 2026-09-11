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
class IdentityCreateIdentityUserRoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityCreateIdentityUserRole::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityCreateIdentityUserRole::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityCreateIdentityUserRole();
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
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('userTrafficProfile', $data)) {
            $object->userTrafficProfile = $this->denormalizer->denormalize($data['userTrafficProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('firewallProfileId', $data)) {
            $object->firewallProfileId = $data['firewallProfileId'];
        }
        if (\array_key_exists('maxDevices', $data)) {
            $object->maxDevices = $this->denormalizer->denormalize($data['maxDevices'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityMaxDevices::class, 'json', $context);
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->vlanId = $data['vlanId'];
        }
        if (\array_key_exists('vlanPooling', $data)) {
            $object->vlanPooling = $this->denormalizer->denormalize($data['vlanPooling'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('timeSchedulePolicy', $data)) {
            $object->timeSchedulePolicy = $data['timeSchedulePolicy'];
        }
        if (\array_key_exists('timeScheduleList', $data)) {
            $object->timeScheduleList = $this->denormalizer->denormalize($data['timeScheduleList'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityTimeScheduleList::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId;
        }
        $dataArray['name'] = $data->name;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        $normalized = $data->userTrafficProfile === null ? null : $this->normalizer->normalize($data->userTrafficProfile, 'json', $context);
        $dataArray['userTrafficProfile'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        $dataArray['firewallProfileId'] = $data->firewallProfileId;
        $normalized_1 = $data->maxDevices === null ? null : $this->normalizer->normalize($data->maxDevices, 'json', $context);
        $dataArray['maxDevices'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        if (array_key_exists('vlanId', get_object_vars($data)) && null !== ($data->vlanId ?? null)) {
            $dataArray['vlanId'] = $data->vlanId;
        }
        if (array_key_exists('vlanPooling', get_object_vars($data)) && null !== ($data->vlanPooling ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->vlanPooling, 'json', $context);
            $dataArray['vlanPooling'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('timeSchedulePolicy', get_object_vars($data)) && null !== ($data->timeSchedulePolicy ?? null)) {
            $dataArray['timeSchedulePolicy'] = $data->timeSchedulePolicy;
        }
        if (array_key_exists('timeScheduleList', get_object_vars($data)) && null !== ($data->timeScheduleList ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->timeScheduleList, 'json', $context);
            $dataArray['timeScheduleList'] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityCreateIdentityUserRole::class => false];
    }
}