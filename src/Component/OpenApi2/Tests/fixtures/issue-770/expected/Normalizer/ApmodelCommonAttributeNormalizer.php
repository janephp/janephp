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
class ApmodelCommonAttributeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCommonAttribute::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCommonAttribute::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCommonAttribute();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nonEditablePorts', $data)) {
            $values = [];
            foreach ($data['nonEditablePorts'] as $value) {
                $values[] = $value;
            }
            $object->setNonEditablePorts($values);
        }
        if (\array_key_exists('isAllowDisableExtAnt', $data)) {
            $object->setIsAllowDisableExtAnt($data['isAllowDisableExtAnt']);
        }
        if (\array_key_exists('nonVisiblePorts', $data)) {
            $values_1 = [];
            foreach ($data['nonVisiblePorts'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNonVisiblePorts($values_1);
        }
        if (\array_key_exists('hasScanRadio', $data)) {
            $object->setHasScanRadio($data['hasScanRadio']);
        }
        if (\array_key_exists('hasCablemodem', $data)) {
            $object->setHasCablemodem($data['hasCablemodem']);
        }
        if (\array_key_exists('hasGps', $data)) {
            $object->setHasGps($data['hasGps']);
        }
        if (\array_key_exists('isDualRadio', $data)) {
            $object->setIsDualRadio($data['isDualRadio']);
        }
        if (\array_key_exists('isOutdoor', $data)) {
            $object->setIsOutdoor($data['isOutdoor']);
        }
        if (\array_key_exists('maxChannelization24G', $data)) {
            $object->setMaxChannelization24G($data['maxChannelization24G']);
        }
        if (\array_key_exists('maxChannelization5G', $data)) {
            $object->setMaxChannelization5G($data['maxChannelization5G']);
        }
        if (\array_key_exists('maxClientsUpper', $data)) {
            $object->setMaxClientsUpper($data['maxClientsUpper']);
        }
        if (\array_key_exists('maxWlanNum24G', $data)) {
            $object->setMaxWlanNum24G($data['maxWlanNum24G']);
        }
        if (\array_key_exists('maxWlanNum5G', $data)) {
            $object->setMaxWlanNum5G($data['maxWlanNum5G']);
        }
        if (\array_key_exists('noAvc', $data)) {
            $object->setNoAvc($data['noAvc']);
        }
        if (\array_key_exists('noMesh', $data)) {
            $object->setNoMesh($data['noMesh']);
        }
        if (\array_key_exists('meshRadioCaps', $data)) {
            $object->setMeshRadioCaps($data['meshRadioCaps']);
        }
        if (\array_key_exists('reserved5GWlanForMesh', $data)) {
            $object->setReserved5GWlanForMesh($data['reserved5GWlanForMesh']);
        }
        if (\array_key_exists('support11AC', $data)) {
            $object->setSupport11AC($data['support11AC']);
        }
        if (\array_key_exists('supportChannelization160', $data)) {
            $object->setSupportChannelization160($data['supportChannelization160']);
        }
        if (\array_key_exists('supportAPUsbSoftwarePackage', $data)) {
            $object->setSupportAPUsbSoftwarePackage($data['supportAPUsbSoftwarePackage']);
        }
        if (\array_key_exists('supportBandSwitch', $data)) {
            $object->setSupportBandSwitch($data['supportBandSwitch']);
        }
        if (\array_key_exists('supportBonjour', $data)) {
            $object->setSupportBonjour($data['supportBonjour']);
        }
        if (\array_key_exists('supportIpsec', $data)) {
            $object->setSupportIpsec($data['supportIpsec']);
        }
        if (\array_key_exists('supportLBS', $data)) {
            $object->setSupportLBS($data['supportLBS']);
        }
        if (\array_key_exists('supportResetCablemodem', $data)) {
            $object->setSupportResetCablemodem($data['supportResetCablemodem']);
        }
        if (\array_key_exists('allowDfsCountry', $data)) {
            $object->setAllowDfsCountry($data['allowDfsCountry']);
        }
        if (\array_key_exists('ram', $data)) {
            $object->setRam($data['ram']);
        }
        if (\array_key_exists('numOfCores', $data)) {
            $object->setNumOfCores($data['numOfCores']);
        }
        if (\array_key_exists('cpuFrequency', $data)) {
            $object->setCpuFrequency($data['cpuFrequency']);
        }
        if (\array_key_exists('scalingFactor', $data)) {
            $object->setScalingFactor($data['scalingFactor']);
        }
        if (\array_key_exists('capabilityScore', $data)) {
            $object->setCapabilityScore($data['capabilityScore']);
        }
        if (\array_key_exists('poeModeCaps', $data)) {
            $object->setPoeModeCaps($data['poeModeCaps']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nonEditablePorts') && null !== $data->getNonEditablePorts()) {
            $values = [];
            foreach ($data->getNonEditablePorts() as $value) {
                $values[] = $value;
            }
            $dataArray['nonEditablePorts'] = $values;
        }
        if ($data->isInitialized('isAllowDisableExtAnt') && null !== $data->getIsAllowDisableExtAnt()) {
            $dataArray['isAllowDisableExtAnt'] = $data->getIsAllowDisableExtAnt();
        }
        if ($data->isInitialized('nonVisiblePorts') && null !== $data->getNonVisiblePorts()) {
            $values_1 = [];
            foreach ($data->getNonVisiblePorts() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['nonVisiblePorts'] = $values_1;
        }
        if ($data->isInitialized('hasScanRadio') && null !== $data->getHasScanRadio()) {
            $dataArray['hasScanRadio'] = $data->getHasScanRadio();
        }
        if ($data->isInitialized('hasCablemodem') && null !== $data->getHasCablemodem()) {
            $dataArray['hasCablemodem'] = $data->getHasCablemodem();
        }
        if ($data->isInitialized('hasGps') && null !== $data->getHasGps()) {
            $dataArray['hasGps'] = $data->getHasGps();
        }
        if ($data->isInitialized('isDualRadio') && null !== $data->getIsDualRadio()) {
            $dataArray['isDualRadio'] = $data->getIsDualRadio();
        }
        if ($data->isInitialized('isOutdoor') && null !== $data->getIsOutdoor()) {
            $dataArray['isOutdoor'] = $data->getIsOutdoor();
        }
        if ($data->isInitialized('maxChannelization24G') && null !== $data->getMaxChannelization24G()) {
            $dataArray['maxChannelization24G'] = $data->getMaxChannelization24G();
        }
        if ($data->isInitialized('maxChannelization5G') && null !== $data->getMaxChannelization5G()) {
            $dataArray['maxChannelization5G'] = $data->getMaxChannelization5G();
        }
        if ($data->isInitialized('maxClientsUpper') && null !== $data->getMaxClientsUpper()) {
            $dataArray['maxClientsUpper'] = $data->getMaxClientsUpper();
        }
        if ($data->isInitialized('maxWlanNum24G') && null !== $data->getMaxWlanNum24G()) {
            $dataArray['maxWlanNum24G'] = $data->getMaxWlanNum24G();
        }
        if ($data->isInitialized('maxWlanNum5G') && null !== $data->getMaxWlanNum5G()) {
            $dataArray['maxWlanNum5G'] = $data->getMaxWlanNum5G();
        }
        if ($data->isInitialized('noAvc') && null !== $data->getNoAvc()) {
            $dataArray['noAvc'] = $data->getNoAvc();
        }
        if ($data->isInitialized('noMesh') && null !== $data->getNoMesh()) {
            $dataArray['noMesh'] = $data->getNoMesh();
        }
        if ($data->isInitialized('meshRadioCaps') && null !== $data->getMeshRadioCaps()) {
            $dataArray['meshRadioCaps'] = $data->getMeshRadioCaps();
        }
        if ($data->isInitialized('reserved5GWlanForMesh') && null !== $data->getReserved5GWlanForMesh()) {
            $dataArray['reserved5GWlanForMesh'] = $data->getReserved5GWlanForMesh();
        }
        if ($data->isInitialized('support11AC') && null !== $data->getSupport11AC()) {
            $dataArray['support11AC'] = $data->getSupport11AC();
        }
        if ($data->isInitialized('supportChannelization160') && null !== $data->getSupportChannelization160()) {
            $dataArray['supportChannelization160'] = $data->getSupportChannelization160();
        }
        if ($data->isInitialized('supportAPUsbSoftwarePackage') && null !== $data->getSupportAPUsbSoftwarePackage()) {
            $dataArray['supportAPUsbSoftwarePackage'] = $data->getSupportAPUsbSoftwarePackage();
        }
        if ($data->isInitialized('supportBandSwitch') && null !== $data->getSupportBandSwitch()) {
            $dataArray['supportBandSwitch'] = $data->getSupportBandSwitch();
        }
        if ($data->isInitialized('supportBonjour') && null !== $data->getSupportBonjour()) {
            $dataArray['supportBonjour'] = $data->getSupportBonjour();
        }
        if ($data->isInitialized('supportIpsec') && null !== $data->getSupportIpsec()) {
            $dataArray['supportIpsec'] = $data->getSupportIpsec();
        }
        if ($data->isInitialized('supportLBS') && null !== $data->getSupportLBS()) {
            $dataArray['supportLBS'] = $data->getSupportLBS();
        }
        if ($data->isInitialized('supportResetCablemodem') && null !== $data->getSupportResetCablemodem()) {
            $dataArray['supportResetCablemodem'] = $data->getSupportResetCablemodem();
        }
        if ($data->isInitialized('allowDfsCountry') && null !== $data->getAllowDfsCountry()) {
            $dataArray['allowDfsCountry'] = $data->getAllowDfsCountry();
        }
        if ($data->isInitialized('ram') && null !== $data->getRam()) {
            $dataArray['ram'] = $data->getRam();
        }
        if ($data->isInitialized('numOfCores') && null !== $data->getNumOfCores()) {
            $dataArray['numOfCores'] = $data->getNumOfCores();
        }
        if ($data->isInitialized('cpuFrequency') && null !== $data->getCpuFrequency()) {
            $dataArray['cpuFrequency'] = $data->getCpuFrequency();
        }
        if ($data->isInitialized('scalingFactor') && null !== $data->getScalingFactor()) {
            $dataArray['scalingFactor'] = $data->getScalingFactor();
        }
        if ($data->isInitialized('capabilityScore') && null !== $data->getCapabilityScore()) {
            $dataArray['capabilityScore'] = $data->getCapabilityScore();
        }
        if ($data->isInitialized('poeModeCaps') && null !== $data->getPoeModeCaps()) {
            $dataArray['poeModeCaps'] = $data->getPoeModeCaps();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCommonAttribute::class => false];
    }
}