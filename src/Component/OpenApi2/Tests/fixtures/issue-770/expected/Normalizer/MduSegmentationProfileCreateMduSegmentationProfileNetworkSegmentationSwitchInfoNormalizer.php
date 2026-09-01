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
class MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('forceOverwriteReboot', $data) && \is_int($data['forceOverwriteReboot'])) {
            $data['forceOverwriteReboot'] = (bool) $data['forceOverwriteReboot'];
        }
        if (\array_key_exists('switchGroupList', $data)) {
            $values = [];
            foreach ($data['switchGroupList'] as $value) {
                $values[] = $value;
            }
            $object->switchGroupList = $values;
        }
        if (\array_key_exists('distributionSwitches', $data)) {
            $values_1 = [];
            foreach ($data['distributionSwitches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileDistributionSwitchObj::class, 'json', $context);
            }
            $object->distributionSwitches = $values_1;
        }
        if (\array_key_exists('accessSwitches', $data)) {
            $values_2 = [];
            foreach ($data['accessSwitches'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileAccessSwitchObj::class, 'json', $context);
            }
            $object->accessSwitches = $values_2;
        }
        if (\array_key_exists('forceOverwriteReboot', $data)) {
            $object->forceOverwriteReboot = $data['forceOverwriteReboot'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('switchGroupList', get_object_vars($data)) && null !== ($data->switchGroupList ?? null)) {
            $values = [];
            foreach ($data->switchGroupList ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['switchGroupList'] = $values;
        }
        if (array_key_exists('distributionSwitches', get_object_vars($data)) && null !== ($data->distributionSwitches ?? null)) {
            $values_1 = [];
            foreach ($data->distributionSwitches ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['distributionSwitches'] = $values_1;
        }
        if (array_key_exists('accessSwitches', get_object_vars($data)) && null !== ($data->accessSwitches ?? null)) {
            $values_2 = [];
            foreach ($data->accessSwitches ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['accessSwitches'] = $values_2;
        }
        if (array_key_exists('forceOverwriteReboot', get_object_vars($data)) && null !== ($data->forceOverwriteReboot ?? null)) {
            $dataArray['forceOverwriteReboot'] = $data->forceOverwriteReboot ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo::class => false];
    }
}