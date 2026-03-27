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
class ProfileUserTrafficProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUserTrafficProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUserTrafficProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUserTrafficProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isFactoryDefault', $data) && \is_int($data['isFactoryDefault'])) {
            $data['isFactoryDefault'] = (bool) $data['isFactoryDefault'];
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
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules::class, 'json', $context);
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
        if (\array_key_exists('isFactoryDefault', $data)) {
            $object->setIsFactoryDefault($data['isFactoryDefault']);
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->setCreateDateTime($data['createDateTime']);
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->setModifiedDateTime($data['modifiedDateTime']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->setModifierId($data['modifierId']);
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->setCreatorUsername($data['creatorUsername']);
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->setModifierUsername($data['modifierUsername']);
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
        if ($data->isInitialized('isFactoryDefault') && null !== $data->getIsFactoryDefault()) {
            $dataArray['isFactoryDefault'] = $data->getIsFactoryDefault();
        }
        if ($data->isInitialized('createDateTime') && null !== $data->getCreateDateTime()) {
            $dataArray['createDateTime'] = $data->getCreateDateTime();
        }
        if ($data->isInitialized('modifiedDateTime') && null !== $data->getModifiedDateTime()) {
            $dataArray['modifiedDateTime'] = $data->getModifiedDateTime();
        }
        if ($data->isInitialized('creatorId') && null !== $data->getCreatorId()) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('modifierId') && null !== $data->getModifierId()) {
            $dataArray['modifierId'] = $data->getModifierId();
        }
        if ($data->isInitialized('creatorUsername') && null !== $data->getCreatorUsername()) {
            $dataArray['creatorUsername'] = $data->getCreatorUsername();
        }
        if ($data->isInitialized('modifierUsername') && null !== $data->getModifierUsername()) {
            $dataArray['modifierUsername'] = $data->getModifierUsername();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUserTrafficProfile::class => false];
    }
}