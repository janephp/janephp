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
class RadioRadio5gZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gZone::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gZone::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gZone();
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
        if (\array_key_exists('channelIndoor', $data)) {
            $object->setChannelIndoor($data['channelIndoor']);
        }
        if (\array_key_exists('channelRange', $data)) {
            $values = [];
            foreach ($data['channelRange'] as $value) {
                $values[] = $value;
            }
            $object->setChannelRange($values);
        }
        if (\array_key_exists('channelRangeIndoor', $data)) {
            $values_1 = [];
            foreach ($data['channelRangeIndoor'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setChannelRangeIndoor($values_1);
        }
        if (\array_key_exists('secondaryChannel', $data)) {
            $object->setSecondaryChannel($data['secondaryChannel']);
        }
        if (\array_key_exists('secondaryChannelIndoor', $data)) {
            $object->setSecondaryChannelIndoor($data['secondaryChannelIndoor']);
        }
        if (\array_key_exists('dfsChannelEnabled', $data)) {
            $object->setDfsChannelEnabled($data['dfsChannelEnabled']);
        }
        if (\array_key_exists('cbandChannelEnabled', $data)) {
            $object->setCbandChannelEnabled($data['cbandChannelEnabled']);
        }
        if (\array_key_exists('cbandChannelLicenseEnabled', $data)) {
            $object->setCbandChannelLicenseEnabled($data['cbandChannelLicenseEnabled']);
        }
        if (\array_key_exists('channel144Enabled', $data)) {
            $object->setChannel144Enabled($data['channel144Enabled']);
        }
        if (\array_key_exists('channelModeEnabled', $data)) {
            $object->setChannelModeEnabled($data['channelModeEnabled']);
        }
        if (\array_key_exists('backgroundScanning', $data)) {
            $object->setBackgroundScanning($this->denormalizer->denormalize($data['backgroundScanning'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioBackgroundScanning::class, 'json', $context));
        }
        if (\array_key_exists('autoChannelSelection', $data)) {
            $object->setAutoChannelSelection($this->denormalizer->denormalize($data['autoChannelSelection'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioAutoChannelSelection::class, 'json', $context));
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
        if ($data->isInitialized('channelIndoor') && null !== $data->getChannelIndoor()) {
            $dataArray['channelIndoor'] = $data->getChannelIndoor();
        }
        if ($data->isInitialized('channelRange') && null !== $data->getChannelRange()) {
            $values = [];
            foreach ($data->getChannelRange() as $value) {
                $values[] = $value;
            }
            $dataArray['channelRange'] = $values;
        }
        if ($data->isInitialized('channelRangeIndoor') && null !== $data->getChannelRangeIndoor()) {
            $values_1 = [];
            foreach ($data->getChannelRangeIndoor() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['channelRangeIndoor'] = $values_1;
        }
        if ($data->isInitialized('secondaryChannel') && null !== $data->getSecondaryChannel()) {
            $dataArray['secondaryChannel'] = $data->getSecondaryChannel();
        }
        if ($data->isInitialized('secondaryChannelIndoor') && null !== $data->getSecondaryChannelIndoor()) {
            $dataArray['secondaryChannelIndoor'] = $data->getSecondaryChannelIndoor();
        }
        if ($data->isInitialized('dfsChannelEnabled') && null !== $data->getDfsChannelEnabled()) {
            $dataArray['dfsChannelEnabled'] = $data->getDfsChannelEnabled();
        }
        if ($data->isInitialized('cbandChannelEnabled') && null !== $data->getCbandChannelEnabled()) {
            $dataArray['cbandChannelEnabled'] = $data->getCbandChannelEnabled();
        }
        if ($data->isInitialized('cbandChannelLicenseEnabled') && null !== $data->getCbandChannelLicenseEnabled()) {
            $dataArray['cbandChannelLicenseEnabled'] = $data->getCbandChannelLicenseEnabled();
        }
        if ($data->isInitialized('channel144Enabled') && null !== $data->getChannel144Enabled()) {
            $dataArray['channel144Enabled'] = $data->getChannel144Enabled();
        }
        if ($data->isInitialized('channelModeEnabled') && null !== $data->getChannelModeEnabled()) {
            $dataArray['channelModeEnabled'] = $data->getChannelModeEnabled();
        }
        if ($data->isInitialized('backgroundScanning') && null !== $data->getBackgroundScanning()) {
            $dataArray['backgroundScanning'] = $this->normalizer->normalize($data->getBackgroundScanning(), 'json', $context);
        }
        if ($data->isInitialized('autoChannelSelection') && null !== $data->getAutoChannelSelection()) {
            $dataArray['autoChannelSelection'] = $this->normalizer->normalize($data->getAutoChannelSelection(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gZone::class => false];
    }
}