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
class ProfileFirewallProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFirewallProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFirewallProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFirewallProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('uplinkRateLimitingMbps', $data) && \is_int($data['uplinkRateLimitingMbps'])) {
            $data['uplinkRateLimitingMbps'] = (float) $data['uplinkRateLimitingMbps'];
        }
        if (\array_key_exists('downlinkRateLimitingMbps', $data) && \is_int($data['downlinkRateLimitingMbps'])) {
            $data['downlinkRateLimitingMbps'] = (float) $data['downlinkRateLimitingMbps'];
        }
        if (\array_key_exists('factoryDefault', $data) && \is_int($data['factoryDefault'])) {
            $data['factoryDefault'] = (bool) $data['factoryDefault'];
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
        if (\array_key_exists('uplinkRateLimitingMbps', $data)) {
            $object->uplinkRateLimitingMbps = $data['uplinkRateLimitingMbps'];
        }
        if (\array_key_exists('downlinkRateLimitingMbps', $data)) {
            $object->downlinkRateLimitingMbps = $data['downlinkRateLimitingMbps'];
        }
        if (\array_key_exists('factoryDefault', $data)) {
            $object->factoryDefault = $data['factoryDefault'];
        }
        if (\array_key_exists('l3AccessControlPolicyId', $data)) {
            $object->l3AccessControlPolicyId = $data['l3AccessControlPolicyId'];
        }
        if (\array_key_exists('l2AccessControlPolicyId', $data)) {
            $object->l2AccessControlPolicyId = $data['l2AccessControlPolicyId'];
        }
        if (\array_key_exists('appPolicyId', $data)) {
            $object->appPolicyId = $data['appPolicyId'];
        }
        if (\array_key_exists('urlFilteringPolicyId', $data)) {
            $object->urlFilteringPolicyId = $data['urlFilteringPolicyId'];
        }
        if (\array_key_exists('devicePolicyId', $data)) {
            $object->devicePolicyId = $data['devicePolicyId'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->modifierUsername = $data['modifierUsername'];
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->createDateTime = $data['createDateTime'];
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->creatorUsername = $data['creatorUsername'];
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
        if (array_key_exists('uplinkRateLimitingMbps', get_object_vars($data)) && null !== ($data->uplinkRateLimitingMbps ?? null)) {
            $dataArray['uplinkRateLimitingMbps'] = $data->uplinkRateLimitingMbps ?? null;
        }
        if (array_key_exists('downlinkRateLimitingMbps', get_object_vars($data)) && null !== ($data->downlinkRateLimitingMbps ?? null)) {
            $dataArray['downlinkRateLimitingMbps'] = $data->downlinkRateLimitingMbps ?? null;
        }
        if (array_key_exists('factoryDefault', get_object_vars($data)) && null !== ($data->factoryDefault ?? null)) {
            $dataArray['factoryDefault'] = $data->factoryDefault ?? null;
        }
        if (array_key_exists('l3AccessControlPolicyId', get_object_vars($data)) && null !== ($data->l3AccessControlPolicyId ?? null)) {
            $dataArray['l3AccessControlPolicyId'] = $data->l3AccessControlPolicyId ?? null;
        }
        if (array_key_exists('l2AccessControlPolicyId', get_object_vars($data)) && null !== ($data->l2AccessControlPolicyId ?? null)) {
            $dataArray['l2AccessControlPolicyId'] = $data->l2AccessControlPolicyId ?? null;
        }
        if (array_key_exists('appPolicyId', get_object_vars($data)) && null !== ($data->appPolicyId ?? null)) {
            $dataArray['appPolicyId'] = $data->appPolicyId ?? null;
        }
        if (array_key_exists('urlFilteringPolicyId', get_object_vars($data)) && null !== ($data->urlFilteringPolicyId ?? null)) {
            $dataArray['urlFilteringPolicyId'] = $data->urlFilteringPolicyId ?? null;
        }
        if (array_key_exists('devicePolicyId', get_object_vars($data)) && null !== ($data->devicePolicyId ?? null)) {
            $dataArray['devicePolicyId'] = $data->devicePolicyId ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('modifiedDateTime', get_object_vars($data)) && null !== ($data->modifiedDateTime ?? null)) {
            $dataArray['modifiedDateTime'] = $data->modifiedDateTime ?? null;
        }
        if (array_key_exists('modifierUsername', get_object_vars($data)) && null !== ($data->modifierUsername ?? null)) {
            $dataArray['modifierUsername'] = $data->modifierUsername ?? null;
        }
        if (array_key_exists('createDateTime', get_object_vars($data)) && null !== ($data->createDateTime ?? null)) {
            $dataArray['createDateTime'] = $data->createDateTime ?? null;
        }
        if (array_key_exists('creatorUsername', get_object_vars($data)) && null !== ($data->creatorUsername ?? null)) {
            $dataArray['creatorUsername'] = $data->creatorUsername ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFirewallProfile::class => false];
    }
}