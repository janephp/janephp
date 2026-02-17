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
class MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfo();
        if (\array_key_exists('forceOverwriteReboot', $data) && \is_int($data['forceOverwriteReboot'])) {
            $data['forceOverwriteReboot'] = (bool) $data['forceOverwriteReboot'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('switchGroupList', $data)) {
            $values = [];
            foreach ($data['switchGroupList'] as $value) {
                $values[] = $value;
            }
            $object->setSwitchGroupList($values);
        }
        if (\array_key_exists('distributionSwitches', $data)) {
            $values_1 = [];
            foreach ($data['distributionSwitches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileDistributionSwitchObj::class, 'json', $context);
            }
            $object->setDistributionSwitches($values_1);
        }
        if (\array_key_exists('accessSwitches', $data)) {
            $values_2 = [];
            foreach ($data['accessSwitches'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileAccessSwitchObj::class, 'json', $context);
            }
            $object->setAccessSwitches($values_2);
        }
        if (\array_key_exists('forceOverwriteReboot', $data)) {
            $object->setForceOverwriteReboot($data['forceOverwriteReboot']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('switchGroupList') && null !== $data->getSwitchGroupList()) {
            $values = [];
            foreach ($data->getSwitchGroupList() as $value) {
                $values[] = $value;
            }
            $dataArray['switchGroupList'] = $values;
        }
        if ($data->isInitialized('distributionSwitches') && null !== $data->getDistributionSwitches()) {
            $values_1 = [];
            foreach ($data->getDistributionSwitches() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['distributionSwitches'] = $values_1;
        }
        if ($data->isInitialized('accessSwitches') && null !== $data->getAccessSwitches()) {
            $values_2 = [];
            foreach ($data->getAccessSwitches() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['accessSwitches'] = $values_2;
        }
        if ($data->isInitialized('forceOverwriteReboot') && null !== $data->getForceOverwriteReboot()) {
            $dataArray['forceOverwriteReboot'] = $data->getForceOverwriteReboot();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfo::class => false];
    }
}