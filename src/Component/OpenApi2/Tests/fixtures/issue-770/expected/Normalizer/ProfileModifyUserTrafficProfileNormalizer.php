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
class ProfileModifyUserTrafficProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyUserTrafficProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyUserTrafficProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyUserTrafficProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('defaultAction', $data)) {
            $object->setDefaultAction($data['defaultAction']);
        }
        if (\array_key_exists('uplinkRateLimiting', $data)) {
            $object->setUplinkRateLimiting($this->denormalizer->denormalize($data['uplinkRateLimiting'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUplinkRateLimiting::class, 'json', $context));
        }
        if (\array_key_exists('downlinkRateLimiting', $data)) {
            $object->setDownlinkRateLimiting($this->denormalizer->denormalize($data['downlinkRateLimiting'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDownlinkRateLimiting::class, 'json', $context));
        }
        if (\array_key_exists('ipAclRules', $data)) {
            $values = [];
            foreach ($data['ipAclRules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyIpAclRules::class, 'json', $context);
            }
            $object->setIpAclRules($values);
        }
        if (\array_key_exists('appPolicyId', $data)) {
            $object->setAppPolicyId($data['appPolicyId']);
        }
        if (\array_key_exists('qmAppPolicyId', $data)) {
            $object->setQmAppPolicyId($data['qmAppPolicyId']);
        }
        if (\array_key_exists('urlFilteringPolicyId', $data)) {
            $object->setUrlFilteringPolicyId($data['urlFilteringPolicyId']);
        }
        if (\array_key_exists('mvnoId', $data)) {
            $object->setMvnoId($data['mvnoId']);
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
        if ($data->isInitialized('defaultAction') && null !== $data->getDefaultAction()) {
            $dataArray['defaultAction'] = $data->getDefaultAction();
        }
        if ($data->isInitialized('uplinkRateLimiting') && null !== $data->getUplinkRateLimiting()) {
            $dataArray['uplinkRateLimiting'] = $this->normalizer->normalize($data->getUplinkRateLimiting(), 'json', $context);
        }
        if ($data->isInitialized('downlinkRateLimiting') && null !== $data->getDownlinkRateLimiting()) {
            $dataArray['downlinkRateLimiting'] = $this->normalizer->normalize($data->getDownlinkRateLimiting(), 'json', $context);
        }
        if ($data->isInitialized('ipAclRules') && null !== $data->getIpAclRules()) {
            $values = [];
            foreach ($data->getIpAclRules() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ipAclRules'] = $values;
        }
        if ($data->isInitialized('appPolicyId') && null !== $data->getAppPolicyId()) {
            $dataArray['appPolicyId'] = $data->getAppPolicyId();
        }
        if ($data->isInitialized('qmAppPolicyId') && null !== $data->getQmAppPolicyId()) {
            $dataArray['qmAppPolicyId'] = $data->getQmAppPolicyId();
        }
        if ($data->isInitialized('urlFilteringPolicyId') && null !== $data->getUrlFilteringPolicyId()) {
            $dataArray['urlFilteringPolicyId'] = $data->getUrlFilteringPolicyId();
        }
        if ($data->isInitialized('mvnoId') && null !== $data->getMvnoId()) {
            $dataArray['mvnoId'] = $data->getMvnoId();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyUserTrafficProfile::class => false];
    }
}