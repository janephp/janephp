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
class SystemCloudOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemCloudOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemCloudOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemCloudOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('apCloudOnboardingEnabled', $data) && \is_int($data['apCloudOnboardingEnabled'])) {
            $data['apCloudOnboardingEnabled'] = (bool) $data['apCloudOnboardingEnabled'];
        }
        if (\array_key_exists('isRuckusCloudOnboarded', $data) && \is_int($data['isRuckusCloudOnboarded'])) {
            $data['isRuckusCloudOnboarded'] = (bool) $data['isRuckusCloudOnboarded'];
        }
        if (\array_key_exists('apCloudOnboardingEnabled', $data)) {
            $object->apCloudOnboardingEnabled = $data['apCloudOnboardingEnabled'];
        }
        if (\array_key_exists('isRuckusCloudOnboarded', $data)) {
            $object->isRuckusCloudOnboarded = $data['isRuckusCloudOnboarded'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apCloudOnboardingEnabled', get_object_vars($data)) && null !== ($data->apCloudOnboardingEnabled ?? null)) {
            $dataArray['apCloudOnboardingEnabled'] = $data->apCloudOnboardingEnabled ?? null;
        }
        if (array_key_exists('isRuckusCloudOnboarded', get_object_vars($data)) && null !== ($data->isRuckusCloudOnboarded ?? null)) {
            $dataArray['isRuckusCloudOnboarded'] = $data->isRuckusCloudOnboarded ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemCloudOptions::class => false];
    }
}