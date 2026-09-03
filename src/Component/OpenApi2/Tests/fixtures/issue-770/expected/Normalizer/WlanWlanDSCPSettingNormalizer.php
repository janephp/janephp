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
class WlanWlanDSCPSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanDSCPSetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanDSCPSetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanDSCPSetting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('enable', $data) && \is_int($data['enable'])) {
            $data['enable'] = (bool) $data['enable'];
        }
        if (\array_key_exists('enable', $data)) {
            $object->enable = $data['enable'];
        }
        if (\array_key_exists('priority', $data)) {
            $object->priority = $data['priority'];
        }
        if (\array_key_exists('low', $data)) {
            $object->low = $data['low'];
        }
        if (\array_key_exists('high', $data)) {
            $object->high = $data['high'];
        }
        if (\array_key_exists('excepts', $data)) {
            $values = [];
            foreach ($data['excepts'] as $value) {
                $values[] = $value;
            }
            $object->excepts = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['enable'] = $data->enable ?? null;
        $dataArray['priority'] = $data->priority ?? null;
        if (array_key_exists('low', get_object_vars($data)) && null !== ($data->low ?? null)) {
            $dataArray['low'] = $data->low ?? null;
        }
        if (array_key_exists('high', get_object_vars($data)) && null !== ($data->high ?? null)) {
            $dataArray['high'] = $data->high ?? null;
        }
        if (array_key_exists('excepts', get_object_vars($data)) && null !== ($data->excepts ?? null)) {
            $values = [];
            foreach ($data->excepts ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['excepts'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanDSCPSetting::class => false];
    }
}