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
class ApmodelCommonAttributeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelCommonAttribute::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelCommonAttribute::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelCommonAttribute();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isAllowDisableExtAnt', $data) && \is_int($data['isAllowDisableExtAnt'])) {
            $data['isAllowDisableExtAnt'] = (bool) $data['isAllowDisableExtAnt'];
        }
        if (\array_key_exists('hasScanRadio', $data) && \is_int($data['hasScanRadio'])) {
            $data['hasScanRadio'] = (bool) $data['hasScanRadio'];
        }
        if (\array_key_exists('hasCablemodem', $data) && \is_int($data['hasCablemodem'])) {
            $data['hasCablemodem'] = (bool) $data['hasCablemodem'];
        }
        if (\array_key_exists('hasGps', $data) && \is_int($data['hasGps'])) {
            $data['hasGps'] = (bool) $data['hasGps'];
        }
        if (\array_key_exists('isDualRadio', $data) && \is_int($data['isDualRadio'])) {
            $data['isDualRadio'] = (bool) $data['isDualRadio'];
        }
        if (\array_key_exists('isOutdoor', $data) && \is_int($data['isOutdoor'])) {
            $data['isOutdoor'] = (bool) $data['isOutdoor'];
        }
        if (\array_key_exists('noAvc', $data) && \is_int($data['noAvc'])) {
            $data['noAvc'] = (bool) $data['noAvc'];
        }
        if (\array_key_exists('noMesh', $data) && \is_int($data['noMesh'])) {
            $data['noMesh'] = (bool) $data['noMesh'];
        }
        if (\array_key_exists('support11AC', $data) && \is_int($data['support11AC'])) {
            $data['support11AC'] = (bool) $data['support11AC'];
        }
        if (\array_key_exists('supportChannelization160', $data) && \is_int($data['supportChannelization160'])) {
            $data['supportChannelization160'] = (bool) $data['supportChannelization160'];
        }
        if (\array_key_exists('supportAPUsbSoftwarePackage', $data) && \is_int($data['supportAPUsbSoftwarePackage'])) {
            $data['supportAPUsbSoftwarePackage'] = (bool) $data['supportAPUsbSoftwarePackage'];
        }
        if (\array_key_exists('supportBandSwitch', $data) && \is_int($data['supportBandSwitch'])) {
            $data['supportBandSwitch'] = (bool) $data['supportBandSwitch'];
        }
        if (\array_key_exists('supportBonjour', $data) && \is_int($data['supportBonjour'])) {
            $data['supportBonjour'] = (bool) $data['supportBonjour'];
        }
        if (\array_key_exists('supportIpsec', $data) && \is_int($data['supportIpsec'])) {
            $data['supportIpsec'] = (bool) $data['supportIpsec'];
        }
        if (\array_key_exists('supportLBS', $data) && \is_int($data['supportLBS'])) {
            $data['supportLBS'] = (bool) $data['supportLBS'];
        }
        if (\array_key_exists('supportResetCablemodem', $data) && \is_int($data['supportResetCablemodem'])) {
            $data['supportResetCablemodem'] = (bool) $data['supportResetCablemodem'];
        }
        if (\array_key_exists('nonEditablePorts', $data)) {
            $values = [];
            foreach ($data['nonEditablePorts'] as $value) {
                $values[] = $value;
            }
            $object->nonEditablePorts = $values;
        }
        if (\array_key_exists('isAllowDisableExtAnt', $data)) {
            $object->isAllowDisableExtAnt = $data['isAllowDisableExtAnt'];
        }
        if (\array_key_exists('nonVisiblePorts', $data)) {
            $values_1 = [];
            foreach ($data['nonVisiblePorts'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->nonVisiblePorts = $values_1;
        }
        if (\array_key_exists('hasScanRadio', $data)) {
            $object->hasScanRadio = $data['hasScanRadio'];
        }
        if (\array_key_exists('hasCablemodem', $data)) {
            $object->hasCablemodem = $data['hasCablemodem'];
        }
        if (\array_key_exists('hasGps', $data)) {
            $object->hasGps = $data['hasGps'];
        }
        if (\array_key_exists('isDualRadio', $data)) {
            $object->isDualRadio = $data['isDualRadio'];
        }
        if (\array_key_exists('isOutdoor', $data)) {
            $object->isOutdoor = $data['isOutdoor'];
        }
        if (\array_key_exists('maxChannelization24G', $data)) {
            $object->maxChannelization24G = $data['maxChannelization24G'];
        }
        if (\array_key_exists('maxChannelization5G', $data)) {
            $object->maxChannelization5G = $data['maxChannelization5G'];
        }
        if (\array_key_exists('maxClientsUpper', $data)) {
            $object->maxClientsUpper = $data['maxClientsUpper'];
        }
        if (\array_key_exists('maxWlanNum24G', $data)) {
            $object->maxWlanNum24G = $data['maxWlanNum24G'];
        }
        if (\array_key_exists('maxWlanNum5G', $data)) {
            $object->maxWlanNum5G = $data['maxWlanNum5G'];
        }
        if (\array_key_exists('noAvc', $data)) {
            $object->noAvc = $data['noAvc'];
        }
        if (\array_key_exists('noMesh', $data)) {
            $object->noMesh = $data['noMesh'];
        }
        if (\array_key_exists('meshRadioCaps', $data)) {
            $object->meshRadioCaps = $data['meshRadioCaps'];
        }
        if (\array_key_exists('reserved5GWlanForMesh', $data)) {
            $object->reserved5GWlanForMesh = $data['reserved5GWlanForMesh'];
        }
        if (\array_key_exists('support11AC', $data)) {
            $object->support11AC = $data['support11AC'];
        }
        if (\array_key_exists('supportChannelization160', $data)) {
            $object->supportChannelization160 = $data['supportChannelization160'];
        }
        if (\array_key_exists('supportAPUsbSoftwarePackage', $data)) {
            $object->supportAPUsbSoftwarePackage = $data['supportAPUsbSoftwarePackage'];
        }
        if (\array_key_exists('supportBandSwitch', $data)) {
            $object->supportBandSwitch = $data['supportBandSwitch'];
        }
        if (\array_key_exists('supportBonjour', $data)) {
            $object->supportBonjour = $data['supportBonjour'];
        }
        if (\array_key_exists('supportIpsec', $data)) {
            $object->supportIpsec = $data['supportIpsec'];
        }
        if (\array_key_exists('supportLBS', $data)) {
            $object->supportLBS = $data['supportLBS'];
        }
        if (\array_key_exists('supportResetCablemodem', $data)) {
            $object->supportResetCablemodem = $data['supportResetCablemodem'];
        }
        if (\array_key_exists('allowDfsCountry', $data)) {
            $object->allowDfsCountry = $data['allowDfsCountry'];
        }
        if (\array_key_exists('ram', $data)) {
            $object->ram = $data['ram'];
        }
        if (\array_key_exists('numOfCores', $data)) {
            $object->numOfCores = $data['numOfCores'];
        }
        if (\array_key_exists('cpuFrequency', $data)) {
            $object->cpuFrequency = $data['cpuFrequency'];
        }
        if (\array_key_exists('scalingFactor', $data)) {
            $object->scalingFactor = $data['scalingFactor'];
        }
        if (\array_key_exists('capabilityScore', $data)) {
            $object->capabilityScore = $data['capabilityScore'];
        }
        if (\array_key_exists('poeModeCaps', $data)) {
            $object->poeModeCaps = $data['poeModeCaps'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('nonEditablePorts', get_object_vars($data)) && null !== ($data->nonEditablePorts ?? null)) {
            $values = [];
            foreach ($data->nonEditablePorts ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['nonEditablePorts'] = $values;
        }
        if (array_key_exists('isAllowDisableExtAnt', get_object_vars($data)) && null !== ($data->isAllowDisableExtAnt ?? null)) {
            $dataArray['isAllowDisableExtAnt'] = $data->isAllowDisableExtAnt ?? null;
        }
        if (array_key_exists('nonVisiblePorts', get_object_vars($data)) && null !== ($data->nonVisiblePorts ?? null)) {
            $values_1 = [];
            foreach ($data->nonVisiblePorts ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['nonVisiblePorts'] = $values_1;
        }
        if (array_key_exists('hasScanRadio', get_object_vars($data)) && null !== ($data->hasScanRadio ?? null)) {
            $dataArray['hasScanRadio'] = $data->hasScanRadio ?? null;
        }
        if (array_key_exists('hasCablemodem', get_object_vars($data)) && null !== ($data->hasCablemodem ?? null)) {
            $dataArray['hasCablemodem'] = $data->hasCablemodem ?? null;
        }
        if (array_key_exists('hasGps', get_object_vars($data)) && null !== ($data->hasGps ?? null)) {
            $dataArray['hasGps'] = $data->hasGps ?? null;
        }
        if (array_key_exists('isDualRadio', get_object_vars($data)) && null !== ($data->isDualRadio ?? null)) {
            $dataArray['isDualRadio'] = $data->isDualRadio ?? null;
        }
        if (array_key_exists('isOutdoor', get_object_vars($data)) && null !== ($data->isOutdoor ?? null)) {
            $dataArray['isOutdoor'] = $data->isOutdoor ?? null;
        }
        if (array_key_exists('maxChannelization24G', get_object_vars($data)) && null !== ($data->maxChannelization24G ?? null)) {
            $dataArray['maxChannelization24G'] = $data->maxChannelization24G ?? null;
        }
        if (array_key_exists('maxChannelization5G', get_object_vars($data)) && null !== ($data->maxChannelization5G ?? null)) {
            $dataArray['maxChannelization5G'] = $data->maxChannelization5G ?? null;
        }
        if (array_key_exists('maxClientsUpper', get_object_vars($data)) && null !== ($data->maxClientsUpper ?? null)) {
            $dataArray['maxClientsUpper'] = $data->maxClientsUpper ?? null;
        }
        if (array_key_exists('maxWlanNum24G', get_object_vars($data)) && null !== ($data->maxWlanNum24G ?? null)) {
            $dataArray['maxWlanNum24G'] = $data->maxWlanNum24G ?? null;
        }
        if (array_key_exists('maxWlanNum5G', get_object_vars($data)) && null !== ($data->maxWlanNum5G ?? null)) {
            $dataArray['maxWlanNum5G'] = $data->maxWlanNum5G ?? null;
        }
        if (array_key_exists('noAvc', get_object_vars($data)) && null !== ($data->noAvc ?? null)) {
            $dataArray['noAvc'] = $data->noAvc ?? null;
        }
        if (array_key_exists('noMesh', get_object_vars($data)) && null !== ($data->noMesh ?? null)) {
            $dataArray['noMesh'] = $data->noMesh ?? null;
        }
        if (array_key_exists('meshRadioCaps', get_object_vars($data)) && null !== ($data->meshRadioCaps ?? null)) {
            $dataArray['meshRadioCaps'] = $data->meshRadioCaps ?? null;
        }
        if (array_key_exists('reserved5GWlanForMesh', get_object_vars($data)) && null !== ($data->reserved5GWlanForMesh ?? null)) {
            $dataArray['reserved5GWlanForMesh'] = $data->reserved5GWlanForMesh ?? null;
        }
        if (array_key_exists('support11AC', get_object_vars($data)) && null !== ($data->support11AC ?? null)) {
            $dataArray['support11AC'] = $data->support11AC ?? null;
        }
        if (array_key_exists('supportChannelization160', get_object_vars($data)) && null !== ($data->supportChannelization160 ?? null)) {
            $dataArray['supportChannelization160'] = $data->supportChannelization160 ?? null;
        }
        if (array_key_exists('supportAPUsbSoftwarePackage', get_object_vars($data)) && null !== ($data->supportAPUsbSoftwarePackage ?? null)) {
            $dataArray['supportAPUsbSoftwarePackage'] = $data->supportAPUsbSoftwarePackage ?? null;
        }
        if (array_key_exists('supportBandSwitch', get_object_vars($data)) && null !== ($data->supportBandSwitch ?? null)) {
            $dataArray['supportBandSwitch'] = $data->supportBandSwitch ?? null;
        }
        if (array_key_exists('supportBonjour', get_object_vars($data)) && null !== ($data->supportBonjour ?? null)) {
            $dataArray['supportBonjour'] = $data->supportBonjour ?? null;
        }
        if (array_key_exists('supportIpsec', get_object_vars($data)) && null !== ($data->supportIpsec ?? null)) {
            $dataArray['supportIpsec'] = $data->supportIpsec ?? null;
        }
        if (array_key_exists('supportLBS', get_object_vars($data)) && null !== ($data->supportLBS ?? null)) {
            $dataArray['supportLBS'] = $data->supportLBS ?? null;
        }
        if (array_key_exists('supportResetCablemodem', get_object_vars($data)) && null !== ($data->supportResetCablemodem ?? null)) {
            $dataArray['supportResetCablemodem'] = $data->supportResetCablemodem ?? null;
        }
        if (array_key_exists('allowDfsCountry', get_object_vars($data)) && null !== ($data->allowDfsCountry ?? null)) {
            $dataArray['allowDfsCountry'] = $data->allowDfsCountry ?? null;
        }
        if (array_key_exists('ram', get_object_vars($data)) && null !== ($data->ram ?? null)) {
            $dataArray['ram'] = $data->ram ?? null;
        }
        if (array_key_exists('numOfCores', get_object_vars($data)) && null !== ($data->numOfCores ?? null)) {
            $dataArray['numOfCores'] = $data->numOfCores ?? null;
        }
        if (array_key_exists('cpuFrequency', get_object_vars($data)) && null !== ($data->cpuFrequency ?? null)) {
            $dataArray['cpuFrequency'] = $data->cpuFrequency ?? null;
        }
        if (array_key_exists('scalingFactor', get_object_vars($data)) && null !== ($data->scalingFactor ?? null)) {
            $dataArray['scalingFactor'] = $data->scalingFactor ?? null;
        }
        if (array_key_exists('capabilityScore', get_object_vars($data)) && null !== ($data->capabilityScore ?? null)) {
            $dataArray['capabilityScore'] = $data->capabilityScore ?? null;
        }
        if (array_key_exists('poeModeCaps', get_object_vars($data)) && null !== ($data->poeModeCaps ?? null)) {
            $dataArray['poeModeCaps'] = $data->poeModeCaps ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelCommonAttribute::class => false];
    }
}