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
class RadioRadio6gApGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio6gApGroup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio6gApGroup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio6gApGroup();
        if (\array_key_exists('autoCellSizing', $data) && \is_int($data['autoCellSizing'])) {
            $data['autoCellSizing'] = (bool) $data['autoCellSizing'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('autoCellSizing', $data)) {
            $object->setAutoCellSizing($data['autoCellSizing']);
        }
        if (\array_key_exists('txPower', $data)) {
            $object->setTxPower($data['txPower']);
        }
        if (\array_key_exists('channelWidth', $data)) {
            $object->setChannelWidth($data['channelWidth']);
        }
        if (\array_key_exists('channel', $data)) {
            $object->setChannel($data['channel']);
        }
        if (\array_key_exists('channelRange', $data)) {
            $values = [];
            foreach ($data['channelRange'] as $value) {
                $values[] = $value;
            }
            $object->setChannelRange($values);
        }
        if (\array_key_exists('wlanGroupId', $data)) {
            $object->setWlanGroupId($data['wlanGroupId']);
        }
        if (\array_key_exists('autoChannelSelection', $data)) {
            $object->setAutoChannelSelection($this->denormalizer->denormalize($data['autoChannelSelection'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioAutoChannelSelection::class, 'json', $context));
        }
        if (\array_key_exists('bssMinRate', $data)) {
            $object->setBssMinRate($data['bssMinRate']);
        }
        if (\array_key_exists('mgmtTxRate', $data)) {
            $object->setMgmtTxRate($data['mgmtTxRate']);
        }
        if (\array_key_exists('multicastUplinkRateLimit', $data)) {
            $object->setMulticastUplinkRateLimit($data['multicastUplinkRateLimit']);
        }
        if (\array_key_exists('multicastDownlinkRateLimit', $data)) {
            $object->setMulticastDownlinkRateLimit($data['multicastDownlinkRateLimit']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('autoCellSizing') && null !== $data->getAutoCellSizing()) {
            $dataArray['autoCellSizing'] = $data->getAutoCellSizing();
        }
        if ($data->isInitialized('txPower') && null !== $data->getTxPower()) {
            $dataArray['txPower'] = $data->getTxPower();
        }
        if ($data->isInitialized('channelWidth') && null !== $data->getChannelWidth()) {
            $dataArray['channelWidth'] = $data->getChannelWidth();
        }
        if ($data->isInitialized('channel') && null !== $data->getChannel()) {
            $dataArray['channel'] = $data->getChannel();
        }
        if ($data->isInitialized('channelRange') && null !== $data->getChannelRange()) {
            $values = [];
            foreach ($data->getChannelRange() as $value) {
                $values[] = $value;
            }
            $dataArray['channelRange'] = $values;
        }
        if ($data->isInitialized('wlanGroupId') && null !== $data->getWlanGroupId()) {
            $dataArray['wlanGroupId'] = $data->getWlanGroupId();
        }
        if ($data->isInitialized('autoChannelSelection') && null !== $data->getAutoChannelSelection()) {
            $dataArray['autoChannelSelection'] = $this->normalizer->normalize($data->getAutoChannelSelection(), 'json', $context);
        }
        if ($data->isInitialized('bssMinRate') && null !== $data->getBssMinRate()) {
            $dataArray['bssMinRate'] = $data->getBssMinRate();
        }
        if ($data->isInitialized('mgmtTxRate') && null !== $data->getMgmtTxRate()) {
            $dataArray['mgmtTxRate'] = $data->getMgmtTxRate();
        }
        if ($data->isInitialized('multicastUplinkRateLimit') && null !== $data->getMulticastUplinkRateLimit()) {
            $dataArray['multicastUplinkRateLimit'] = $data->getMulticastUplinkRateLimit();
        }
        if ($data->isInitialized('multicastDownlinkRateLimit') && null !== $data->getMulticastDownlinkRateLimit()) {
            $dataArray['multicastDownlinkRateLimit'] = $data->getMulticastDownlinkRateLimit();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio6gApGroup::class => false];
    }
}