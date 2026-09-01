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
class RadioRadio5gResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('autoCellSizing', $data) && \is_int($data['autoCellSizing'])) {
            $data['autoCellSizing'] = (bool) $data['autoCellSizing'];
        }
        if (\array_key_exists('dfsChannelEnabled', $data) && \is_int($data['dfsChannelEnabled'])) {
            $data['dfsChannelEnabled'] = (bool) $data['dfsChannelEnabled'];
        }
        if (\array_key_exists('cbandChannelEnabled', $data) && \is_int($data['cbandChannelEnabled'])) {
            $data['cbandChannelEnabled'] = (bool) $data['cbandChannelEnabled'];
        }
        if (\array_key_exists('cbandChannelLicenseEnabled', $data) && \is_int($data['cbandChannelLicenseEnabled'])) {
            $data['cbandChannelLicenseEnabled'] = (bool) $data['cbandChannelLicenseEnabled'];
        }
        if (\array_key_exists('channel144Enabled', $data) && \is_int($data['channel144Enabled'])) {
            $data['channel144Enabled'] = (bool) $data['channel144Enabled'];
        }
        if (\array_key_exists('channelModeEnabled', $data) && \is_int($data['channelModeEnabled'])) {
            $data['channelModeEnabled'] = (bool) $data['channelModeEnabled'];
        }
        if (\array_key_exists('autoCellSizing', $data)) {
            $object->autoCellSizing = $data['autoCellSizing'];
        }
        if (\array_key_exists('txPower', $data)) {
            $object->txPower = $data['txPower'];
        }
        if (\array_key_exists('channelWidth', $data)) {
            $object->channelWidth = $data['channelWidth'];
        }
        if (\array_key_exists('channel', $data)) {
            $object->channel = $data['channel'];
        }
        if (\array_key_exists('channelIndoor', $data)) {
            $object->channelIndoor = $data['channelIndoor'];
        }
        if (\array_key_exists('secondaryChannel', $data)) {
            $object->secondaryChannel = $data['secondaryChannel'];
        }
        if (\array_key_exists('secondaryChannelIndoor', $data)) {
            $object->secondaryChannelIndoor = $data['secondaryChannelIndoor'];
        }
        if (\array_key_exists('channelRange', $data)) {
            $values = [];
            foreach ($data['channelRange'] as $value) {
                $values[] = $value;
            }
            $object->channelRange = $values;
        }
        if (\array_key_exists('channelRangeIndoor', $data)) {
            $values_1 = [];
            foreach ($data['channelRangeIndoor'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->channelRangeIndoor = $values_1;
        }
        if (\array_key_exists('dfsChannelEnabled', $data)) {
            $object->dfsChannelEnabled = $data['dfsChannelEnabled'];
        }
        if (\array_key_exists('cbandChannelEnabled', $data)) {
            $object->cbandChannelEnabled = $data['cbandChannelEnabled'];
        }
        if (\array_key_exists('cbandChannelLicenseEnabled', $data)) {
            $object->cbandChannelLicenseEnabled = $data['cbandChannelLicenseEnabled'];
        }
        if (\array_key_exists('channel144Enabled', $data)) {
            $object->channel144Enabled = $data['channel144Enabled'];
        }
        if (\array_key_exists('channelModeEnabled', $data)) {
            $object->channelModeEnabled = $data['channelModeEnabled'];
        }
        if (\array_key_exists('availableChannelRange', $data)) {
            $values_2 = [];
            foreach ($data['availableChannelRange'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->availableChannelRange = $values_2;
        }
        if (\array_key_exists('availableChannelRangeIndoor', $data)) {
            $values_3 = [];
            foreach ($data['availableChannelRangeIndoor'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->availableChannelRangeIndoor = $values_3;
        }
        if (\array_key_exists('wlanGroupId', $data)) {
            $object->wlanGroupId = $data['wlanGroupId'];
        }
        if (\array_key_exists('protectionMode', $data)) {
            $object->protectionMode = $data['protectionMode'];
        }
        if (\array_key_exists('backgroundScanning', $data)) {
            $object->backgroundScanning = $this->denormalizer->denormalize($data['backgroundScanning'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioBackgroundScanning::class, 'json', $context);
        }
        if (\array_key_exists('autoChannelSelection', $data)) {
            $object->autoChannelSelection = $this->denormalizer->denormalize($data['autoChannelSelection'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioAutoChannelSelection::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('autoCellSizing', get_object_vars($data)) && null !== ($data->autoCellSizing ?? null)) {
            $dataArray['autoCellSizing'] = $data->autoCellSizing ?? null;
        }
        if (array_key_exists('txPower', get_object_vars($data)) && null !== ($data->txPower ?? null)) {
            $dataArray['txPower'] = $data->txPower ?? null;
        }
        if (array_key_exists('channelWidth', get_object_vars($data)) && null !== ($data->channelWidth ?? null)) {
            $dataArray['channelWidth'] = $data->channelWidth ?? null;
        }
        if (array_key_exists('channel', get_object_vars($data)) && null !== ($data->channel ?? null)) {
            $dataArray['channel'] = $data->channel ?? null;
        }
        if (array_key_exists('channelIndoor', get_object_vars($data)) && null !== ($data->channelIndoor ?? null)) {
            $dataArray['channelIndoor'] = $data->channelIndoor ?? null;
        }
        if (array_key_exists('secondaryChannel', get_object_vars($data)) && null !== ($data->secondaryChannel ?? null)) {
            $dataArray['secondaryChannel'] = $data->secondaryChannel ?? null;
        }
        if (array_key_exists('secondaryChannelIndoor', get_object_vars($data)) && null !== ($data->secondaryChannelIndoor ?? null)) {
            $dataArray['secondaryChannelIndoor'] = $data->secondaryChannelIndoor ?? null;
        }
        if (array_key_exists('channelRange', get_object_vars($data)) && null !== ($data->channelRange ?? null)) {
            $values = [];
            foreach ($data->channelRange ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['channelRange'] = $values;
        }
        if (array_key_exists('channelRangeIndoor', get_object_vars($data)) && null !== ($data->channelRangeIndoor ?? null)) {
            $values_1 = [];
            foreach ($data->channelRangeIndoor ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['channelRangeIndoor'] = $values_1;
        }
        if (array_key_exists('dfsChannelEnabled', get_object_vars($data)) && null !== ($data->dfsChannelEnabled ?? null)) {
            $dataArray['dfsChannelEnabled'] = $data->dfsChannelEnabled ?? null;
        }
        if (array_key_exists('cbandChannelEnabled', get_object_vars($data)) && null !== ($data->cbandChannelEnabled ?? null)) {
            $dataArray['cbandChannelEnabled'] = $data->cbandChannelEnabled ?? null;
        }
        if (array_key_exists('cbandChannelLicenseEnabled', get_object_vars($data)) && null !== ($data->cbandChannelLicenseEnabled ?? null)) {
            $dataArray['cbandChannelLicenseEnabled'] = $data->cbandChannelLicenseEnabled ?? null;
        }
        if (array_key_exists('channel144Enabled', get_object_vars($data)) && null !== ($data->channel144Enabled ?? null)) {
            $dataArray['channel144Enabled'] = $data->channel144Enabled ?? null;
        }
        if (array_key_exists('channelModeEnabled', get_object_vars($data)) && null !== ($data->channelModeEnabled ?? null)) {
            $dataArray['channelModeEnabled'] = $data->channelModeEnabled ?? null;
        }
        if (array_key_exists('availableChannelRange', get_object_vars($data)) && null !== ($data->availableChannelRange ?? null)) {
            $values_2 = [];
            foreach ($data->availableChannelRange ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['availableChannelRange'] = $values_2;
        }
        if (array_key_exists('availableChannelRangeIndoor', get_object_vars($data)) && null !== ($data->availableChannelRangeIndoor ?? null)) {
            $values_3 = [];
            foreach ($data->availableChannelRangeIndoor ?? null as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['availableChannelRangeIndoor'] = $values_3;
        }
        if (array_key_exists('wlanGroupId', get_object_vars($data)) && null !== ($data->wlanGroupId ?? null)) {
            $dataArray['wlanGroupId'] = $data->wlanGroupId ?? null;
        }
        if (array_key_exists('protectionMode', get_object_vars($data)) && null !== ($data->protectionMode ?? null)) {
            $dataArray['protectionMode'] = $data->protectionMode ?? null;
        }
        if (array_key_exists('backgroundScanning', get_object_vars($data)) && null !== ($data->backgroundScanning ?? null)) {
            $dataArray['backgroundScanning'] = ($data->backgroundScanning ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->backgroundScanning ?? null, 'json', $context));
        }
        if (array_key_exists('autoChannelSelection', get_object_vars($data)) && null !== ($data->autoChannelSelection ?? null)) {
            $dataArray['autoChannelSelection'] = ($data->autoChannelSelection ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->autoChannelSelection ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gResponse::class => false];
    }
}