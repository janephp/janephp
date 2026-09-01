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
class RadioRadio5gApNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gAp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gAp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gAp();
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
        if (\array_key_exists('secondaryChannel', $data)) {
            $object->secondaryChannel = $data['secondaryChannel'];
        }
        if (\array_key_exists('channelRange', $data)) {
            $values = [];
            foreach ($data['channelRange'] as $value) {
                $values[] = $value;
            }
            $object->channelRange = $values;
        }
        if (\array_key_exists('wlanGroupId', $data)) {
            $object->wlanGroupId = $data['wlanGroupId'];
        }
        if (\array_key_exists('wlanServiceEnabled', $data)) {
            $object->wlanServiceEnabled = $data['wlanServiceEnabled'];
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
        if (array_key_exists('secondaryChannel', get_object_vars($data)) && null !== ($data->secondaryChannel ?? null)) {
            $dataArray['secondaryChannel'] = $data->secondaryChannel ?? null;
        }
        if (array_key_exists('channelRange', get_object_vars($data)) && null !== ($data->channelRange ?? null)) {
            $values = [];
            foreach ($data->channelRange ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['channelRange'] = $values;
        }
        if (array_key_exists('wlanGroupId', get_object_vars($data)) && null !== ($data->wlanGroupId ?? null)) {
            $dataArray['wlanGroupId'] = $data->wlanGroupId ?? null;
        }
        if (array_key_exists('wlanServiceEnabled', get_object_vars($data)) && null !== ($data->wlanServiceEnabled ?? null)) {
            $dataArray['wlanServiceEnabled'] = $data->wlanServiceEnabled ?? null;
        }
        if (array_key_exists('autoChannelSelection', get_object_vars($data)) && null !== ($data->autoChannelSelection ?? null)) {
            $dataArray['autoChannelSelection'] = ($data->autoChannelSelection ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->autoChannelSelection ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gAp::class => false];
    }
}