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
class SystemSecuritySettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSecuritySetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSecuritySetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSecuritySetting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('captchaEnabled', $data) && \is_int($data['captchaEnabled'])) {
            $data['captchaEnabled'] = (bool) $data['captchaEnabled'];
        }
        if (\array_key_exists('captchaEnabled', $data)) {
            $object->captchaEnabled = $data['captchaEnabled'];
        }
        if (\array_key_exists('maxInteractiveConcurrentSessions', $data)) {
            $object->maxInteractiveConcurrentSessions = $data['maxInteractiveConcurrentSessions'];
        }
        if (\array_key_exists('maxPublicApiConcurrentSessions', $data)) {
            $object->maxPublicApiConcurrentSessions = $data['maxPublicApiConcurrentSessions'];
        }
        if (\array_key_exists('absoluteSessionTimeout', $data)) {
            $object->absoluteSessionTimeout = $data['absoluteSessionTimeout'];
        }
        if (\array_key_exists('sshAuthMethod', $data)) {
            $object->sshAuthMethod = $data['sshAuthMethod'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('captchaEnabled', get_object_vars($data)) && null !== ($data->captchaEnabled ?? null)) {
            $dataArray['captchaEnabled'] = $data->captchaEnabled ?? null;
        }
        if (array_key_exists('maxInteractiveConcurrentSessions', get_object_vars($data)) && null !== ($data->maxInteractiveConcurrentSessions ?? null)) {
            $dataArray['maxInteractiveConcurrentSessions'] = $data->maxInteractiveConcurrentSessions ?? null;
        }
        if (array_key_exists('maxPublicApiConcurrentSessions', get_object_vars($data)) && null !== ($data->maxPublicApiConcurrentSessions ?? null)) {
            $dataArray['maxPublicApiConcurrentSessions'] = $data->maxPublicApiConcurrentSessions ?? null;
        }
        if (array_key_exists('absoluteSessionTimeout', get_object_vars($data)) && null !== ($data->absoluteSessionTimeout ?? null)) {
            $dataArray['absoluteSessionTimeout'] = $data->absoluteSessionTimeout ?? null;
        }
        if (array_key_exists('sshAuthMethod', get_object_vars($data)) && null !== ($data->sshAuthMethod ?? null)) {
            $dataArray['sshAuthMethod'] = $data->sshAuthMethod ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSecuritySetting::class => false];
    }
}