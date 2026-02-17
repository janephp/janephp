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
class SystemSecuritySettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSecuritySetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSecuritySetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSecuritySetting();
        if (\array_key_exists('captchaEnabled', $data) && \is_int($data['captchaEnabled'])) {
            $data['captchaEnabled'] = (bool) $data['captchaEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('captchaEnabled', $data)) {
            $object->setCaptchaEnabled($data['captchaEnabled']);
        }
        if (\array_key_exists('maxInteractiveConcurrentSessions', $data)) {
            $object->setMaxInteractiveConcurrentSessions($data['maxInteractiveConcurrentSessions']);
        }
        if (\array_key_exists('maxPublicApiConcurrentSessions', $data)) {
            $object->setMaxPublicApiConcurrentSessions($data['maxPublicApiConcurrentSessions']);
        }
        if (\array_key_exists('absoluteSessionTimeout', $data)) {
            $object->setAbsoluteSessionTimeout($data['absoluteSessionTimeout']);
        }
        if (\array_key_exists('sshAuthMethod', $data)) {
            $object->setSshAuthMethod($data['sshAuthMethod']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('captchaEnabled') && null !== $data->getCaptchaEnabled()) {
            $dataArray['captchaEnabled'] = $data->getCaptchaEnabled();
        }
        if ($data->isInitialized('maxInteractiveConcurrentSessions') && null !== $data->getMaxInteractiveConcurrentSessions()) {
            $dataArray['maxInteractiveConcurrentSessions'] = $data->getMaxInteractiveConcurrentSessions();
        }
        if ($data->isInitialized('maxPublicApiConcurrentSessions') && null !== $data->getMaxPublicApiConcurrentSessions()) {
            $dataArray['maxPublicApiConcurrentSessions'] = $data->getMaxPublicApiConcurrentSessions();
        }
        if ($data->isInitialized('absoluteSessionTimeout') && null !== $data->getAbsoluteSessionTimeout()) {
            $dataArray['absoluteSessionTimeout'] = $data->getAbsoluteSessionTimeout();
        }
        if ($data->isInitialized('sshAuthMethod') && null !== $data->getSshAuthMethod()) {
            $dataArray['sshAuthMethod'] = $data->getSshAuthMethod();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemSecuritySetting::class => false];
    }
}