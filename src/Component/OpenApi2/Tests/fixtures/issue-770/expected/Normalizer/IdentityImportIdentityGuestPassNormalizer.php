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
class IdentityImportIdentityGuestPassNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityImportIdentityGuestPass::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityImportIdentityGuestPass::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityImportIdentityGuestPass();
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
        if (\array_key_exists('wlan', $data)) {
            $object->setWlan($this->denormalizer->denormalize($data['wlan'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('zone', $data)) {
            $object->setZone($this->denormalizer->denormalize($data['zone'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('passValidFor', $data)) {
            $object->setPassValidFor($this->denormalizer->denormalize($data['passValidFor'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityPassValidFor::class, 'json', $context));
        }
        if (\array_key_exists('passEffectSince', $data)) {
            $object->setPassEffectSince($data['passEffectSince']);
        }
        if (\array_key_exists('passUseDays', $data)) {
            $object->setPassUseDays($data['passUseDays']);
        }
        if (\array_key_exists('maxDevices', $data)) {
            $object->setMaxDevices($this->denormalizer->denormalize($data['maxDevices'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityMaxDevices::class, 'json', $context));
        }
        if (\array_key_exists('sessionDuration', $data)) {
            $object->setSessionDuration($this->denormalizer->denormalize($data['sessionDuration'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentitySessionDuration::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        $dataArray['wlan'] = $this->normalizer->normalize($data->getWlan(), 'json', $context);
        $dataArray['zone'] = $this->normalizer->normalize($data->getZone(), 'json', $context);
        $dataArray['passValidFor'] = $this->normalizer->normalize($data->getPassValidFor(), 'json', $context);
        if ($data->isInitialized('passEffectSince') && null !== $data->getPassEffectSince()) {
            $dataArray['passEffectSince'] = $data->getPassEffectSince();
        }
        if ($data->isInitialized('passUseDays') && null !== $data->getPassUseDays()) {
            $dataArray['passUseDays'] = $data->getPassUseDays();
        }
        $dataArray['maxDevices'] = $this->normalizer->normalize($data->getMaxDevices(), 'json', $context);
        if ($data->isInitialized('sessionDuration') && null !== $data->getSessionDuration()) {
            $dataArray['sessionDuration'] = $this->normalizer->normalize($data->getSessionDuration(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityImportIdentityGuestPass::class => false];
    }
}