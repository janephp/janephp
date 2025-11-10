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
class DeviceCapacityDevicesSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DeviceCapacityDevicesSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DeviceCapacityDevicesSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DeviceCapacityDevicesSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('maxApOfCluster', $data)) {
            $object->setMaxApOfCluster($data['maxApOfCluster']);
        }
        if (\array_key_exists('maxSwitchOfCluster', $data)) {
            $object->setMaxSwitchOfCluster($data['maxSwitchOfCluster']);
        }
        if (\array_key_exists('apCapacity', $data)) {
            $object->setApCapacity($data['apCapacity']);
        }
        if (\array_key_exists('switchCapacity', $data)) {
            $object->setSwitchCapacity($data['switchCapacity']);
        }
        if (\array_key_exists('totalApCapacity', $data)) {
            $object->setTotalApCapacity($data['totalApCapacity']);
        }
        if (\array_key_exists('totalSwitchCapacity', $data)) {
            $object->setTotalSwitchCapacity($data['totalSwitchCapacity']);
        }
        if (\array_key_exists('totalRemainingApCapacity', $data)) {
            $object->setTotalRemainingApCapacity($data['totalRemainingApCapacity']);
        }
        if (\array_key_exists('totalRemainingSwitchCapacity', $data)) {
            $object->setTotalRemainingSwitchCapacity($data['totalRemainingSwitchCapacity']);
        }
        if (\array_key_exists('aps', $data)) {
            $object->setAps($data['aps']);
        }
        if (\array_key_exists('dualRadioAps', $data)) {
            $object->setDualRadioAps($data['dualRadioAps']);
        }
        if (\array_key_exists('triRadioAps', $data)) {
            $object->setTriRadioAps($data['triRadioAps']);
        }
        if (\array_key_exists('switches', $data)) {
            $object->setSwitches($data['switches']);
        }
        if (\array_key_exists('totalAps', $data)) {
            $object->setTotalAps($data['totalAps']);
        }
        if (\array_key_exists('totalSwitches', $data)) {
            $object->setTotalSwitches($data['totalSwitches']);
        }
        if (\array_key_exists('totalRemainingDps', $data)) {
            $object->setTotalRemainingDps($data['totalRemainingDps']);
        }
        if (\array_key_exists('totalConnectedDps', $data)) {
            $object->setTotalConnectedDps($data['totalConnectedDps']);
        }
        if (\array_key_exists('totalDpCapacity', $data)) {
            $object->setTotalDpCapacity($data['totalDpCapacity']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('maxApOfCluster') && null !== $data->getMaxApOfCluster()) {
            $dataArray['maxApOfCluster'] = $data->getMaxApOfCluster();
        }
        if ($data->isInitialized('maxSwitchOfCluster') && null !== $data->getMaxSwitchOfCluster()) {
            $dataArray['maxSwitchOfCluster'] = $data->getMaxSwitchOfCluster();
        }
        if ($data->isInitialized('apCapacity') && null !== $data->getApCapacity()) {
            $dataArray['apCapacity'] = $data->getApCapacity();
        }
        if ($data->isInitialized('switchCapacity') && null !== $data->getSwitchCapacity()) {
            $dataArray['switchCapacity'] = $data->getSwitchCapacity();
        }
        if ($data->isInitialized('totalApCapacity') && null !== $data->getTotalApCapacity()) {
            $dataArray['totalApCapacity'] = $data->getTotalApCapacity();
        }
        if ($data->isInitialized('totalSwitchCapacity') && null !== $data->getTotalSwitchCapacity()) {
            $dataArray['totalSwitchCapacity'] = $data->getTotalSwitchCapacity();
        }
        if ($data->isInitialized('totalRemainingApCapacity') && null !== $data->getTotalRemainingApCapacity()) {
            $dataArray['totalRemainingApCapacity'] = $data->getTotalRemainingApCapacity();
        }
        if ($data->isInitialized('totalRemainingSwitchCapacity') && null !== $data->getTotalRemainingSwitchCapacity()) {
            $dataArray['totalRemainingSwitchCapacity'] = $data->getTotalRemainingSwitchCapacity();
        }
        if ($data->isInitialized('aps') && null !== $data->getAps()) {
            $dataArray['aps'] = $data->getAps();
        }
        if ($data->isInitialized('dualRadioAps') && null !== $data->getDualRadioAps()) {
            $dataArray['dualRadioAps'] = $data->getDualRadioAps();
        }
        if ($data->isInitialized('triRadioAps') && null !== $data->getTriRadioAps()) {
            $dataArray['triRadioAps'] = $data->getTriRadioAps();
        }
        if ($data->isInitialized('switches') && null !== $data->getSwitches()) {
            $dataArray['switches'] = $data->getSwitches();
        }
        if ($data->isInitialized('totalAps') && null !== $data->getTotalAps()) {
            $dataArray['totalAps'] = $data->getTotalAps();
        }
        if ($data->isInitialized('totalSwitches') && null !== $data->getTotalSwitches()) {
            $dataArray['totalSwitches'] = $data->getTotalSwitches();
        }
        if ($data->isInitialized('totalRemainingDps') && null !== $data->getTotalRemainingDps()) {
            $dataArray['totalRemainingDps'] = $data->getTotalRemainingDps();
        }
        if ($data->isInitialized('totalConnectedDps') && null !== $data->getTotalConnectedDps()) {
            $dataArray['totalConnectedDps'] = $data->getTotalConnectedDps();
        }
        if ($data->isInitialized('totalDpCapacity') && null !== $data->getTotalDpCapacity()) {
            $dataArray['totalDpCapacity'] = $data->getTotalDpCapacity();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DeviceCapacityDevicesSummary::class => false];
    }
}