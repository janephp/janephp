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
class ProfileHs20ProviderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20Provider::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20Provider::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20Provider();
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
        if (\array_key_exists('realms', $data)) {
            $values = [];
            foreach ($data['realms'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderRealm::class, 'json', $context);
            }
            $object->setRealms($values);
        }
        if (\array_key_exists('plmns', $data)) {
            $values_1 = [];
            foreach ($data['plmns'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderPLMN::class, 'json', $context);
            }
            $object->setPlmns($values_1);
        }
        if (\array_key_exists('homeOis', $data)) {
            $values_2 = [];
            foreach ($data['homeOis'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderHomeOIs::class, 'json', $context);
            }
            $object->setHomeOis($values_2);
        }
        if (\array_key_exists('authentications', $data)) {
            $values_3 = [];
            foreach ($data['authentications'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderAuthentication::class, 'json', $context);
            }
            $object->setAuthentications($values_3);
        }
        if (\array_key_exists('accountings', $data)) {
            $values_4 = [];
            foreach ($data['accountings'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderAccounting::class, 'json', $context);
            }
            $object->setAccountings($values_4);
        }
        if (\array_key_exists('osu', $data)) {
            $object->setOsu($this->denormalizer->denormalize($data['osu'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderOnlineSignup::class, 'json', $context));
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
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
        if ($data->isInitialized('realms') && null !== $data->getRealms()) {
            $values = [];
            foreach ($data->getRealms() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['realms'] = $values;
        }
        if ($data->isInitialized('plmns') && null !== $data->getPlmns()) {
            $values_1 = [];
            foreach ($data->getPlmns() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['plmns'] = $values_1;
        }
        if ($data->isInitialized('homeOis') && null !== $data->getHomeOis()) {
            $values_2 = [];
            foreach ($data->getHomeOis() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['homeOis'] = $values_2;
        }
        if ($data->isInitialized('authentications') && null !== $data->getAuthentications()) {
            $values_3 = [];
            foreach ($data->getAuthentications() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['authentications'] = $values_3;
        }
        if ($data->isInitialized('accountings') && null !== $data->getAccountings()) {
            $values_4 = [];
            foreach ($data->getAccountings() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['accountings'] = $values_4;
        }
        if ($data->isInitialized('osu') && null !== $data->getOsu()) {
            $dataArray['osu'] = $this->normalizer->normalize($data->getOsu(), 'json', $context);
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
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
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20Provider::class => false];
    }
}