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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DeviceCapacityDevicesSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('maxApOfCluster', $data)) {
            $object->maxApOfCluster = $data['maxApOfCluster'];
        }
        if (\array_key_exists('maxSwitchOfCluster', $data)) {
            $object->maxSwitchOfCluster = $data['maxSwitchOfCluster'];
        }
        if (\array_key_exists('apCapacity', $data)) {
            $object->apCapacity = $data['apCapacity'];
        }
        if (\array_key_exists('switchCapacity', $data)) {
            $object->switchCapacity = $data['switchCapacity'];
        }
        if (\array_key_exists('totalApCapacity', $data)) {
            $object->totalApCapacity = $data['totalApCapacity'];
        }
        if (\array_key_exists('totalSwitchCapacity', $data)) {
            $object->totalSwitchCapacity = $data['totalSwitchCapacity'];
        }
        if (\array_key_exists('totalRemainingApCapacity', $data)) {
            $object->totalRemainingApCapacity = $data['totalRemainingApCapacity'];
        }
        if (\array_key_exists('totalRemainingSwitchCapacity', $data)) {
            $object->totalRemainingSwitchCapacity = $data['totalRemainingSwitchCapacity'];
        }
        if (\array_key_exists('aps', $data)) {
            $object->aps = $data['aps'];
        }
        if (\array_key_exists('dualRadioAps', $data)) {
            $object->dualRadioAps = $data['dualRadioAps'];
        }
        if (\array_key_exists('triRadioAps', $data)) {
            $object->triRadioAps = $data['triRadioAps'];
        }
        if (\array_key_exists('switches', $data)) {
            $object->switches = $data['switches'];
        }
        if (\array_key_exists('totalAps', $data)) {
            $object->totalAps = $data['totalAps'];
        }
        if (\array_key_exists('totalSwitches', $data)) {
            $object->totalSwitches = $data['totalSwitches'];
        }
        if (\array_key_exists('totalRemainingDps', $data)) {
            $object->totalRemainingDps = $data['totalRemainingDps'];
        }
        if (\array_key_exists('totalConnectedDps', $data)) {
            $object->totalConnectedDps = $data['totalConnectedDps'];
        }
        if (\array_key_exists('totalDpCapacity', $data)) {
            $object->totalDpCapacity = $data['totalDpCapacity'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('maxApOfCluster', get_object_vars($data)) && null !== ($data->maxApOfCluster ?? null)) {
            $dataArray['maxApOfCluster'] = $data->maxApOfCluster ?? null;
        }
        if (array_key_exists('maxSwitchOfCluster', get_object_vars($data)) && null !== ($data->maxSwitchOfCluster ?? null)) {
            $dataArray['maxSwitchOfCluster'] = $data->maxSwitchOfCluster ?? null;
        }
        if (array_key_exists('apCapacity', get_object_vars($data)) && null !== ($data->apCapacity ?? null)) {
            $dataArray['apCapacity'] = $data->apCapacity ?? null;
        }
        if (array_key_exists('switchCapacity', get_object_vars($data)) && null !== ($data->switchCapacity ?? null)) {
            $dataArray['switchCapacity'] = $data->switchCapacity ?? null;
        }
        if (array_key_exists('totalApCapacity', get_object_vars($data)) && null !== ($data->totalApCapacity ?? null)) {
            $dataArray['totalApCapacity'] = $data->totalApCapacity ?? null;
        }
        if (array_key_exists('totalSwitchCapacity', get_object_vars($data)) && null !== ($data->totalSwitchCapacity ?? null)) {
            $dataArray['totalSwitchCapacity'] = $data->totalSwitchCapacity ?? null;
        }
        if (array_key_exists('totalRemainingApCapacity', get_object_vars($data)) && null !== ($data->totalRemainingApCapacity ?? null)) {
            $dataArray['totalRemainingApCapacity'] = $data->totalRemainingApCapacity ?? null;
        }
        if (array_key_exists('totalRemainingSwitchCapacity', get_object_vars($data)) && null !== ($data->totalRemainingSwitchCapacity ?? null)) {
            $dataArray['totalRemainingSwitchCapacity'] = $data->totalRemainingSwitchCapacity ?? null;
        }
        if (array_key_exists('aps', get_object_vars($data)) && null !== ($data->aps ?? null)) {
            $dataArray['aps'] = $data->aps ?? null;
        }
        if (array_key_exists('dualRadioAps', get_object_vars($data)) && null !== ($data->dualRadioAps ?? null)) {
            $dataArray['dualRadioAps'] = $data->dualRadioAps ?? null;
        }
        if (array_key_exists('triRadioAps', get_object_vars($data)) && null !== ($data->triRadioAps ?? null)) {
            $dataArray['triRadioAps'] = $data->triRadioAps ?? null;
        }
        if (array_key_exists('switches', get_object_vars($data)) && null !== ($data->switches ?? null)) {
            $dataArray['switches'] = $data->switches ?? null;
        }
        if (array_key_exists('totalAps', get_object_vars($data)) && null !== ($data->totalAps ?? null)) {
            $dataArray['totalAps'] = $data->totalAps ?? null;
        }
        if (array_key_exists('totalSwitches', get_object_vars($data)) && null !== ($data->totalSwitches ?? null)) {
            $dataArray['totalSwitches'] = $data->totalSwitches ?? null;
        }
        if (array_key_exists('totalRemainingDps', get_object_vars($data)) && null !== ($data->totalRemainingDps ?? null)) {
            $dataArray['totalRemainingDps'] = $data->totalRemainingDps ?? null;
        }
        if (array_key_exists('totalConnectedDps', get_object_vars($data)) && null !== ($data->totalConnectedDps ?? null)) {
            $dataArray['totalConnectedDps'] = $data->totalConnectedDps ?? null;
        }
        if (array_key_exists('totalDpCapacity', get_object_vars($data)) && null !== ($data->totalDpCapacity ?? null)) {
            $dataArray['totalDpCapacity'] = $data->totalDpCapacity ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DeviceCapacityDevicesSummary::class => false];
    }
}