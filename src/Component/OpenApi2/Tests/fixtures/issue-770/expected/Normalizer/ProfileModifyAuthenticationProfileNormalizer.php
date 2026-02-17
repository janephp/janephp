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
class ProfileModifyAuthenticationProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyAuthenticationProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyAuthenticationProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyAuthenticationProfile();
        if (\array_key_exists('gppSuppportEnabled', $data) && \is_int($data['gppSuppportEnabled'])) {
            $data['gppSuppportEnabled'] = (bool) $data['gppSuppportEnabled'];
        }
        if (\array_key_exists('h20SuppportEnabled', $data) && \is_int($data['h20SuppportEnabled'])) {
            $data['h20SuppportEnabled'] = (bool) $data['h20SuppportEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mvnoId', $data)) {
            $object->setMvnoId($data['mvnoId']);
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
        if (\array_key_exists('ttgCommonSetting', $data)) {
            $object->setTtgCommonSetting($this->denormalizer->denormalize($data['ttgCommonSetting'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileTtgCommonSetting::class, 'json', $context));
        }
        if (\array_key_exists('realmMappings', $data)) {
            $values = [];
            foreach ($data['realmMappings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRealmAuthServiceMapping::class, 'json', $context);
            }
            $object->setRealmMappings($values);
        }
        if (\array_key_exists('gppSuppportEnabled', $data)) {
            $object->setGppSuppportEnabled($data['gppSuppportEnabled']);
        }
        if (\array_key_exists('h20SuppportEnabled', $data)) {
            $object->setH20SuppportEnabled($data['h20SuppportEnabled']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('mvnoId') && null !== $data->getMvnoId()) {
            $dataArray['mvnoId'] = $data->getMvnoId();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('ttgCommonSetting') && null !== $data->getTtgCommonSetting()) {
            $dataArray['ttgCommonSetting'] = $this->normalizer->normalize($data->getTtgCommonSetting(), 'json', $context);
        }
        if ($data->isInitialized('realmMappings') && null !== $data->getRealmMappings()) {
            $values = [];
            foreach ($data->getRealmMappings() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['realmMappings'] = $values;
        }
        if ($data->isInitialized('gppSuppportEnabled') && null !== $data->getGppSuppportEnabled()) {
            $dataArray['gppSuppportEnabled'] = $data->getGppSuppportEnabled();
        }
        if ($data->isInitialized('h20SuppportEnabled') && null !== $data->getH20SuppportEnabled()) {
            $dataArray['h20SuppportEnabled'] = $data->getH20SuppportEnabled();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyAuthenticationProfile::class => false];
    }
}