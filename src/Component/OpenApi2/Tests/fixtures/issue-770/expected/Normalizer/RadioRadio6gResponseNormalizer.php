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
class RadioRadio6gResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio6gResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio6gResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio6gResponse();
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
        if (\array_key_exists('lowPowerIndoorModeEnabled', $data) && \is_int($data['lowPowerIndoorModeEnabled'])) {
            $data['lowPowerIndoorModeEnabled'] = (bool) $data['lowPowerIndoorModeEnabled'];
        }
        if (\array_key_exists('wlanServiceEnabled', $data) && \is_int($data['wlanServiceEnabled'])) {
            $data['wlanServiceEnabled'] = (bool) $data['wlanServiceEnabled'];
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
        if (\array_key_exists('channelRange', $data)) {
            $values = [];
            foreach ($data['channelRange'] as $value) {
                $values[] = $value;
            }
            $object->channelRange = $values;
        }
        if (\array_key_exists('lowPowerIndoorModeEnabled', $data)) {
            $object->lowPowerIndoorModeEnabled = $data['lowPowerIndoorModeEnabled'];
        }
        if (\array_key_exists('availableChannelRange', $data)) {
            $values_1 = [];
            foreach ($data['availableChannelRange'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->availableChannelRange = $values_1;
        }
        if (\array_key_exists('wlanGroupId', $data)) {
            $object->wlanGroupId = $data['wlanGroupId'];
        }
        if (\array_key_exists('wlanServiceEnabled', $data)) {
            $object->wlanServiceEnabled = $data['wlanServiceEnabled'];
        }
        if (\array_key_exists('protectionMode', $data)) {
            $object->protectionMode = $data['protectionMode'];
        }
        if (\array_key_exists('backgroundScanning', $data)) {
            $object->backgroundScanning = $this->denormalizer->denormalize($data['backgroundScanning'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioBackgroundScanning::class, 'json', $context);
        }
        if (\array_key_exists('autoChannelSelection', $data)) {
            $object->autoChannelSelection = $this->denormalizer->denormalize($data['autoChannelSelection'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioAutoChannelSelection::class, 'json', $context);
        }
        if (\array_key_exists('bssMinRate', $data)) {
            $object->bssMinRate = $data['bssMinRate'];
        }
        if (\array_key_exists('mgmtTxRate', $data)) {
            $object->mgmtTxRate = $data['mgmtTxRate'];
        }
        if (\array_key_exists('multicastUplinkRateLimit', $data)) {
            $object->multicastUplinkRateLimit = $data['multicastUplinkRateLimit'];
        }
        if (\array_key_exists('multicastDownlinkRateLimit', $data)) {
            $object->multicastDownlinkRateLimit = $data['multicastDownlinkRateLimit'];
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
        if (array_key_exists('channelRange', get_object_vars($data)) && null !== ($data->channelRange ?? null)) {
            $values = [];
            foreach ($data->channelRange ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['channelRange'] = $values;
        }
        if (array_key_exists('lowPowerIndoorModeEnabled', get_object_vars($data)) && null !== ($data->lowPowerIndoorModeEnabled ?? null)) {
            $dataArray['lowPowerIndoorModeEnabled'] = $data->lowPowerIndoorModeEnabled ?? null;
        }
        if (array_key_exists('availableChannelRange', get_object_vars($data)) && null !== ($data->availableChannelRange ?? null)) {
            $values_1 = [];
            foreach ($data->availableChannelRange ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['availableChannelRange'] = $values_1;
        }
        if (array_key_exists('wlanGroupId', get_object_vars($data)) && null !== ($data->wlanGroupId ?? null)) {
            $dataArray['wlanGroupId'] = $data->wlanGroupId ?? null;
        }
        if (array_key_exists('wlanServiceEnabled', get_object_vars($data)) && null !== ($data->wlanServiceEnabled ?? null)) {
            $dataArray['wlanServiceEnabled'] = $data->wlanServiceEnabled ?? null;
        }
        if (array_key_exists('protectionMode', get_object_vars($data)) && null !== ($data->protectionMode ?? null)) {
            $dataArray['protectionMode'] = $data->protectionMode ?? null;
        }
        if (array_key_exists('backgroundScanning', get_object_vars($data)) && null !== ($data->backgroundScanning ?? null)) {
            $dataArray['backgroundScanning'] = ($data->backgroundScanning ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->backgroundScanning ?? null, 'json', $context));
        }
        if (array_key_exists('autoChannelSelection', get_object_vars($data)) && null !== ($data->autoChannelSelection ?? null)) {
            $dataArray['autoChannelSelection'] = ($data->autoChannelSelection ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->autoChannelSelection ?? null, 'json', $context));
        }
        if (array_key_exists('bssMinRate', get_object_vars($data)) && null !== ($data->bssMinRate ?? null)) {
            $dataArray['bssMinRate'] = $data->bssMinRate ?? null;
        }
        if (array_key_exists('mgmtTxRate', get_object_vars($data)) && null !== ($data->mgmtTxRate ?? null)) {
            $dataArray['mgmtTxRate'] = $data->mgmtTxRate ?? null;
        }
        if (array_key_exists('multicastUplinkRateLimit', get_object_vars($data)) && null !== ($data->multicastUplinkRateLimit ?? null)) {
            $dataArray['multicastUplinkRateLimit'] = $data->multicastUplinkRateLimit ?? null;
        }
        if (array_key_exists('multicastDownlinkRateLimit', get_object_vars($data)) && null !== ($data->multicastDownlinkRateLimit ?? null)) {
            $dataArray['multicastDownlinkRateLimit'] = $data->multicastDownlinkRateLimit ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio6gResponse::class => false];
    }
}