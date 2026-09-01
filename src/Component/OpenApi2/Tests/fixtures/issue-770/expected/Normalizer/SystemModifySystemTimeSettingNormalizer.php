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
class SystemModifySystemTimeSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifySystemTimeSetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifySystemTimeSetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifySystemTimeSetting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ntpServer', $data)) {
            $object->ntpServer = $data['ntpServer'];
        }
        if (\array_key_exists('secondaryNtpServer', $data)) {
            $object->secondaryNtpServer = $data['secondaryNtpServer'];
        }
        if (\array_key_exists('thirdNtpServer', $data)) {
            $object->thirdNtpServer = $data['thirdNtpServer'];
        }
        if (\array_key_exists('timezone', $data)) {
            $object->timezone = $data['timezone'];
        }
        if (\array_key_exists('authenticationKey', $data)) {
            $object->authenticationKey = $this->denormalizer->denormalize($data['authenticationKey'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemAuthenticationKey::class, 'json', $context);
        }
        if (\array_key_exists('secondaryAuthenticationKey', $data)) {
            $object->secondaryAuthenticationKey = $this->denormalizer->denormalize($data['secondaryAuthenticationKey'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemAuthenticationKey::class, 'json', $context);
        }
        if (\array_key_exists('thirdAuthenticationKey', $data)) {
            $object->thirdAuthenticationKey = $this->denormalizer->denormalize($data['thirdAuthenticationKey'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemAuthenticationKey::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('ntpServer', get_object_vars($data)) && null !== ($data->ntpServer ?? null)) {
            $dataArray['ntpServer'] = $data->ntpServer ?? null;
        }
        if (array_key_exists('secondaryNtpServer', get_object_vars($data)) && null !== ($data->secondaryNtpServer ?? null)) {
            $dataArray['secondaryNtpServer'] = $data->secondaryNtpServer ?? null;
        }
        if (array_key_exists('thirdNtpServer', get_object_vars($data)) && null !== ($data->thirdNtpServer ?? null)) {
            $dataArray['thirdNtpServer'] = $data->thirdNtpServer ?? null;
        }
        if (array_key_exists('timezone', get_object_vars($data)) && null !== ($data->timezone ?? null)) {
            $dataArray['timezone'] = $data->timezone ?? null;
        }
        if (array_key_exists('authenticationKey', get_object_vars($data)) && null !== ($data->authenticationKey ?? null)) {
            $dataArray['authenticationKey'] = ($data->authenticationKey ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->authenticationKey ?? null, 'json', $context));
        }
        if (array_key_exists('secondaryAuthenticationKey', get_object_vars($data)) && null !== ($data->secondaryAuthenticationKey ?? null)) {
            $dataArray['secondaryAuthenticationKey'] = ($data->secondaryAuthenticationKey ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->secondaryAuthenticationKey ?? null, 'json', $context));
        }
        if (array_key_exists('thirdAuthenticationKey', get_object_vars($data)) && null !== ($data->thirdAuthenticationKey ?? null)) {
            $dataArray['thirdAuthenticationKey'] = ($data->thirdAuthenticationKey ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->thirdAuthenticationKey ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifySystemTimeSetting::class => false];
    }
}