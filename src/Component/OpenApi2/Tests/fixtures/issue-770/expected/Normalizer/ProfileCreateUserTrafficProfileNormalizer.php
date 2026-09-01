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
class ProfileCreateUserTrafficProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateUserTrafficProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateUserTrafficProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateUserTrafficProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('defaultAction', $data)) {
            $object->defaultAction = $data['defaultAction'];
        }
        if (\array_key_exists('uplinkRateLimiting', $data)) {
            $object->uplinkRateLimiting = $this->denormalizer->denormalize($data['uplinkRateLimiting'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUplinkRateLimiting::class, 'json', $context);
        }
        if (\array_key_exists('downlinkRateLimiting', $data)) {
            $object->downlinkRateLimiting = $this->denormalizer->denormalize($data['downlinkRateLimiting'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDownlinkRateLimiting::class, 'json', $context);
        }
        if (\array_key_exists('ipAclRules', $data)) {
            $values = [];
            foreach ($data['ipAclRules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules::class, 'json', $context);
            }
            $object->ipAclRules = $values;
        }
        if (\array_key_exists('appPolicyId', $data)) {
            $object->appPolicyId = $data['appPolicyId'];
        }
        if (\array_key_exists('qmAppPolicyId', $data)) {
            $object->qmAppPolicyId = $data['qmAppPolicyId'];
        }
        if (\array_key_exists('urlFilteringPolicyId', $data)) {
            $object->urlFilteringPolicyId = $data['urlFilteringPolicyId'];
        }
        if (\array_key_exists('mvnoId', $data)) {
            $object->mvnoId = $data['mvnoId'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        $dataArray['defaultAction'] = $data->defaultAction ?? null;
        if (array_key_exists('uplinkRateLimiting', get_object_vars($data)) && null !== ($data->uplinkRateLimiting ?? null)) {
            $dataArray['uplinkRateLimiting'] = ($data->uplinkRateLimiting ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->uplinkRateLimiting ?? null, 'json', $context));
        }
        if (array_key_exists('downlinkRateLimiting', get_object_vars($data)) && null !== ($data->downlinkRateLimiting ?? null)) {
            $dataArray['downlinkRateLimiting'] = ($data->downlinkRateLimiting ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->downlinkRateLimiting ?? null, 'json', $context));
        }
        if (array_key_exists('ipAclRules', get_object_vars($data)) && null !== ($data->ipAclRules ?? null)) {
            $values = [];
            foreach ($data->ipAclRules ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['ipAclRules'] = $values;
        }
        if (array_key_exists('appPolicyId', get_object_vars($data)) && null !== ($data->appPolicyId ?? null)) {
            $dataArray['appPolicyId'] = $data->appPolicyId ?? null;
        }
        if (array_key_exists('qmAppPolicyId', get_object_vars($data)) && null !== ($data->qmAppPolicyId ?? null)) {
            $dataArray['qmAppPolicyId'] = $data->qmAppPolicyId ?? null;
        }
        if (array_key_exists('urlFilteringPolicyId', get_object_vars($data)) && null !== ($data->urlFilteringPolicyId ?? null)) {
            $dataArray['urlFilteringPolicyId'] = $data->urlFilteringPolicyId ?? null;
        }
        if (array_key_exists('mvnoId', get_object_vars($data)) && null !== ($data->mvnoId ?? null)) {
            $dataArray['mvnoId'] = $data->mvnoId ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateUserTrafficProfile::class => false];
    }
}