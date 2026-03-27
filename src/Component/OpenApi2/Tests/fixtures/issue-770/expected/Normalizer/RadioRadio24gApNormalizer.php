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
class RadioRadio24gApNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio24gAp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio24gAp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio24gAp();
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
        if (\array_key_exists('wlanServiceEnabled', $data)) {
            $object->setWlanServiceEnabled($data['wlanServiceEnabled']);
        }
        if (\array_key_exists('protectionMode', $data)) {
            $object->setProtectionMode($data['protectionMode']);
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
        if ($data->isInitialized('wlanServiceEnabled') && null !== $data->getWlanServiceEnabled()) {
            $dataArray['wlanServiceEnabled'] = $data->getWlanServiceEnabled();
        }
        if ($data->isInitialized('protectionMode') && null !== $data->getProtectionMode()) {
            $dataArray['protectionMode'] = $data->getProtectionMode();
        }
        if ($data->isInitialized('autoChannelSelection') && null !== $data->getAutoChannelSelection()) {
            $dataArray['autoChannelSelection'] = $this->normalizer->normalize($data->getAutoChannelSelection(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio24gAp::class => false];
    }
}