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
class SystemSystemTimeSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSystemTimeSetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSystemTimeSetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSystemTimeSetting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('currentSystemTimeString', $data)) {
            $object->setCurrentSystemTimeString($data['currentSystemTimeString']);
        }
        if (\array_key_exists('currentSystemTimeUTCString', $data)) {
            $object->setCurrentSystemTimeUTCString($data['currentSystemTimeUTCString']);
        }
        if (\array_key_exists('ntpServer', $data)) {
            $object->setNtpServer($data['ntpServer']);
        }
        if (\array_key_exists('secondaryNtpServer', $data)) {
            $object->setSecondaryNtpServer($data['secondaryNtpServer']);
        }
        if (\array_key_exists('thirdNtpServer', $data)) {
            $object->setThirdNtpServer($data['thirdNtpServer']);
        }
        if (\array_key_exists('timezone', $data)) {
            $object->setTimezone($data['timezone']);
        }
        if (\array_key_exists('authenticationKey', $data)) {
            $object->setAuthenticationKey($this->denormalizer->denormalize($data['authenticationKey'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemAuthenticationKey::class, 'json', $context));
        }
        if (\array_key_exists('secondaryAuthenticationKey', $data)) {
            $object->setSecondaryAuthenticationKey($this->denormalizer->denormalize($data['secondaryAuthenticationKey'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemAuthenticationKey::class, 'json', $context));
        }
        if (\array_key_exists('thirdAuthenticationKey', $data)) {
            $object->setThirdAuthenticationKey($this->denormalizer->denormalize($data['thirdAuthenticationKey'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemAuthenticationKey::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('currentSystemTimeString') && null !== $data->getCurrentSystemTimeString()) {
            $dataArray['currentSystemTimeString'] = $data->getCurrentSystemTimeString();
        }
        if ($data->isInitialized('currentSystemTimeUTCString') && null !== $data->getCurrentSystemTimeUTCString()) {
            $dataArray['currentSystemTimeUTCString'] = $data->getCurrentSystemTimeUTCString();
        }
        if ($data->isInitialized('ntpServer') && null !== $data->getNtpServer()) {
            $dataArray['ntpServer'] = $data->getNtpServer();
        }
        if ($data->isInitialized('secondaryNtpServer') && null !== $data->getSecondaryNtpServer()) {
            $dataArray['secondaryNtpServer'] = $data->getSecondaryNtpServer();
        }
        if ($data->isInitialized('thirdNtpServer') && null !== $data->getThirdNtpServer()) {
            $dataArray['thirdNtpServer'] = $data->getThirdNtpServer();
        }
        if ($data->isInitialized('timezone') && null !== $data->getTimezone()) {
            $dataArray['timezone'] = $data->getTimezone();
        }
        if ($data->isInitialized('authenticationKey') && null !== $data->getAuthenticationKey()) {
            $dataArray['authenticationKey'] = $this->normalizer->normalize($data->getAuthenticationKey(), 'json', $context);
        }
        if ($data->isInitialized('secondaryAuthenticationKey') && null !== $data->getSecondaryAuthenticationKey()) {
            $dataArray['secondaryAuthenticationKey'] = $this->normalizer->normalize($data->getSecondaryAuthenticationKey(), 'json', $context);
        }
        if ($data->isInitialized('thirdAuthenticationKey') && null !== $data->getThirdAuthenticationKey()) {
            $dataArray['thirdAuthenticationKey'] = $this->normalizer->normalize($data->getThirdAuthenticationKey(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemSystemTimeSetting::class => false];
    }
}