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
class ApmodelApModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelApModel::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelApModel::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelApModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ledStatusEnabled', $data) && \is_int($data['ledStatusEnabled'])) {
            $data['ledStatusEnabled'] = (bool) $data['ledStatusEnabled'];
        }
        if (\array_key_exists('internalHeaterEnabled', $data) && \is_int($data['internalHeaterEnabled'])) {
            $data['internalHeaterEnabled'] = (bool) $data['internalHeaterEnabled'];
        }
        if (\array_key_exists('poeOutPortEnabled', $data) && \is_int($data['poeOutPortEnabled'])) {
            $data['poeOutPortEnabled'] = (bool) $data['poeOutPortEnabled'];
        }
        if (\array_key_exists('usbPowerEnable', $data) && \is_int($data['usbPowerEnable'])) {
            $data['usbPowerEnable'] = (bool) $data['usbPowerEnable'];
        }
        if (\array_key_exists('ledStatusEnabled', $data)) {
            $object->setLedStatusEnabled($data['ledStatusEnabled']);
        }
        if (\array_key_exists('lldp', $data)) {
            $object->setLldp($this->denormalizer->denormalize($data['lldp'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLldpSetting::class, 'json', $context));
        }
        if (\array_key_exists('lacp', $data)) {
            $object->setLacp($this->denormalizer->denormalize($data['lacp'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLacpSetting::class, 'json', $context));
        }
        if (\array_key_exists('cellularSettings', $data)) {
            $object->setCellularSettings($this->denormalizer->denormalize($data['cellularSettings'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCellularSettings::class, 'json', $context));
        }
        if (\array_key_exists('ledMode', $data)) {
            $object->setLedMode($data['ledMode']);
        }
        if (\array_key_exists('internalHeaterEnabled', $data)) {
            $object->setInternalHeaterEnabled($data['internalHeaterEnabled']);
        }
        if (\array_key_exists('poeOutPortEnabled', $data)) {
            $object->setPoeOutPortEnabled($data['poeOutPortEnabled']);
        }
        if (\array_key_exists('usbPowerEnable', $data)) {
            $object->setUsbPowerEnable($data['usbPowerEnable']);
        }
        if (\array_key_exists('poeModeSetting', $data)) {
            $object->setPoeModeSetting($data['poeModeSetting']);
        }
        if (\array_key_exists('poeTxChain', $data)) {
            $object->setPoeTxChain($data['poeTxChain']);
        }
        if (\array_key_exists('radioBand', $data)) {
            $object->setRadioBand($data['radioBand']);
        }
        if (\array_key_exists('externalAntenna24', $data)) {
            $object->setExternalAntenna24($this->denormalizer->denormalize($data['externalAntenna24'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelExternalAntenna::class, 'json', $context));
        }
        if (\array_key_exists('externalAntenna50', $data)) {
            $object->setExternalAntenna50($this->denormalizer->denormalize($data['externalAntenna50'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelExternalAntenna::class, 'json', $context));
        }
        if (\array_key_exists('lanPorts', $data)) {
            $values = [];
            foreach ($data['lanPorts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortSetting::class, 'json', $context);
            }
            $object->setLanPorts($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ledStatusEnabled') && null !== $data->getLedStatusEnabled()) {
            $dataArray['ledStatusEnabled'] = $data->getLedStatusEnabled();
        }
        if ($data->isInitialized('lldp') && null !== $data->getLldp()) {
            $dataArray['lldp'] = $data->getLldp() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getLldp(), 'json', $context));
        }
        if ($data->isInitialized('lacp') && null !== $data->getLacp()) {
            $dataArray['lacp'] = $data->getLacp() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getLacp(), 'json', $context));
        }
        if ($data->isInitialized('cellularSettings') && null !== $data->getCellularSettings()) {
            $dataArray['cellularSettings'] = $data->getCellularSettings() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getCellularSettings(), 'json', $context));
        }
        if ($data->isInitialized('ledMode') && null !== $data->getLedMode()) {
            $dataArray['ledMode'] = $data->getLedMode();
        }
        if ($data->isInitialized('internalHeaterEnabled') && null !== $data->getInternalHeaterEnabled()) {
            $dataArray['internalHeaterEnabled'] = $data->getInternalHeaterEnabled();
        }
        if ($data->isInitialized('poeOutPortEnabled') && null !== $data->getPoeOutPortEnabled()) {
            $dataArray['poeOutPortEnabled'] = $data->getPoeOutPortEnabled();
        }
        if ($data->isInitialized('usbPowerEnable') && null !== $data->getUsbPowerEnable()) {
            $dataArray['usbPowerEnable'] = $data->getUsbPowerEnable();
        }
        if ($data->isInitialized('poeModeSetting') && null !== $data->getPoeModeSetting()) {
            $dataArray['poeModeSetting'] = $data->getPoeModeSetting();
        }
        if ($data->isInitialized('poeTxChain') && null !== $data->getPoeTxChain()) {
            $dataArray['poeTxChain'] = $data->getPoeTxChain();
        }
        if ($data->isInitialized('radioBand') && null !== $data->getRadioBand()) {
            $dataArray['radioBand'] = $data->getRadioBand();
        }
        if ($data->isInitialized('externalAntenna24') && null !== $data->getExternalAntenna24()) {
            $dataArray['externalAntenna24'] = $data->getExternalAntenna24() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getExternalAntenna24(), 'json', $context));
        }
        if ($data->isInitialized('externalAntenna50') && null !== $data->getExternalAntenna50()) {
            $dataArray['externalAntenna50'] = $data->getExternalAntenna50() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getExternalAntenna50(), 'json', $context));
        }
        if ($data->isInitialized('lanPorts') && null !== $data->getLanPorts()) {
            $values = [];
            foreach ($data->getLanPorts() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['lanPorts'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelApModel::class => false];
    }
}