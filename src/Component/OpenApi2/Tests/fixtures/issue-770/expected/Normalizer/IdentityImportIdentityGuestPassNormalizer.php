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
class IdentityImportIdentityGuestPassNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityImportIdentityGuestPass::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityImportIdentityGuestPass::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityImportIdentityGuestPass();
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
        if (\array_key_exists('wlan', $data)) {
            $object->wlan = $this->denormalizer->denormalize($data['wlan'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('zone', $data)) {
            $object->zone = $this->denormalizer->denormalize($data['zone'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('passValidFor', $data)) {
            $object->passValidFor = $this->denormalizer->denormalize($data['passValidFor'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityPassValidFor::class, 'json', $context);
        }
        if (\array_key_exists('passEffectSince', $data)) {
            $object->passEffectSince = $data['passEffectSince'];
        }
        if (\array_key_exists('passUseDays', $data)) {
            $object->passUseDays = $data['passUseDays'];
        }
        if (\array_key_exists('maxDevices', $data)) {
            $object->maxDevices = $this->denormalizer->denormalize($data['maxDevices'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityMaxDevices::class, 'json', $context);
        }
        if (\array_key_exists('sessionDuration', $data)) {
            $object->sessionDuration = $this->denormalizer->denormalize($data['sessionDuration'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentitySessionDuration::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        $dataArray['wlan'] = ($data->wlan ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->wlan ?? null, 'json', $context));
        $dataArray['zone'] = ($data->zone ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->zone ?? null, 'json', $context));
        $dataArray['passValidFor'] = ($data->passValidFor ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->passValidFor ?? null, 'json', $context));
        if (array_key_exists('passEffectSince', get_object_vars($data)) && null !== ($data->passEffectSince ?? null)) {
            $dataArray['passEffectSince'] = $data->passEffectSince ?? null;
        }
        if (array_key_exists('passUseDays', get_object_vars($data)) && null !== ($data->passUseDays ?? null)) {
            $dataArray['passUseDays'] = $data->passUseDays ?? null;
        }
        $dataArray['maxDevices'] = ($data->maxDevices ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->maxDevices ?? null, 'json', $context));
        if (array_key_exists('sessionDuration', get_object_vars($data)) && null !== ($data->sessionDuration ?? null)) {
            $dataArray['sessionDuration'] = ($data->sessionDuration ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->sessionDuration ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityImportIdentityGuestPass::class => false];
    }
}