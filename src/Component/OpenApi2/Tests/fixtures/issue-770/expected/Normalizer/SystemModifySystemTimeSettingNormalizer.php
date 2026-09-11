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
class SystemModifySystemTimeSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifySystemTimeSetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifySystemTimeSetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifySystemTimeSetting();
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
            $object->authenticationKey = $this->denormalizer->denormalize($data['authenticationKey'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemAuthenticationKey::class, 'json', $context);
        }
        if (\array_key_exists('secondaryAuthenticationKey', $data)) {
            $object->secondaryAuthenticationKey = $this->denormalizer->denormalize($data['secondaryAuthenticationKey'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemAuthenticationKey::class, 'json', $context);
        }
        if (\array_key_exists('thirdAuthenticationKey', $data)) {
            $object->thirdAuthenticationKey = $this->denormalizer->denormalize($data['thirdAuthenticationKey'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemAuthenticationKey::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('ntpServer', get_object_vars($data)) && null !== ($data->ntpServer ?? null)) {
            $dataArray['ntpServer'] = $data->ntpServer;
        }
        if (array_key_exists('secondaryNtpServer', get_object_vars($data)) && null !== ($data->secondaryNtpServer ?? null)) {
            $dataArray['secondaryNtpServer'] = $data->secondaryNtpServer;
        }
        if (array_key_exists('thirdNtpServer', get_object_vars($data)) && null !== ($data->thirdNtpServer ?? null)) {
            $dataArray['thirdNtpServer'] = $data->thirdNtpServer;
        }
        if (array_key_exists('timezone', get_object_vars($data)) && null !== ($data->timezone ?? null)) {
            $dataArray['timezone'] = $data->timezone;
        }
        if (array_key_exists('authenticationKey', get_object_vars($data)) && null !== ($data->authenticationKey ?? null)) {
            $normalized = $this->normalizer->normalize($data->authenticationKey, 'json', $context);
            $dataArray['authenticationKey'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('secondaryAuthenticationKey', get_object_vars($data)) && null !== ($data->secondaryAuthenticationKey ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->secondaryAuthenticationKey, 'json', $context);
            $dataArray['secondaryAuthenticationKey'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('thirdAuthenticationKey', get_object_vars($data)) && null !== ($data->thirdAuthenticationKey ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->thirdAuthenticationKey, 'json', $context);
            $dataArray['thirdAuthenticationKey'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifySystemTimeSetting::class => false];
    }
}