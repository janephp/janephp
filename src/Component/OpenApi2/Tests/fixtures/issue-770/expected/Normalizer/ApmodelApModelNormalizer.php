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
            $object->ledStatusEnabled = $data['ledStatusEnabled'];
        }
        if (\array_key_exists('lldp', $data)) {
            $object->lldp = $this->denormalizer->denormalize($data['lldp'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLldpSetting::class, 'json', $context);
        }
        if (\array_key_exists('lacp', $data)) {
            $object->lacp = $this->denormalizer->denormalize($data['lacp'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLacpSetting::class, 'json', $context);
        }
        if (\array_key_exists('cellularSettings', $data)) {
            $object->cellularSettings = $this->denormalizer->denormalize($data['cellularSettings'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCellularSettings::class, 'json', $context);
        }
        if (\array_key_exists('ledMode', $data)) {
            $object->ledMode = $data['ledMode'];
        }
        if (\array_key_exists('internalHeaterEnabled', $data)) {
            $object->internalHeaterEnabled = $data['internalHeaterEnabled'];
        }
        if (\array_key_exists('poeOutPortEnabled', $data)) {
            $object->poeOutPortEnabled = $data['poeOutPortEnabled'];
        }
        if (\array_key_exists('usbPowerEnable', $data)) {
            $object->usbPowerEnable = $data['usbPowerEnable'];
        }
        if (\array_key_exists('poeModeSetting', $data)) {
            $object->poeModeSetting = $data['poeModeSetting'];
        }
        if (\array_key_exists('poeTxChain', $data)) {
            $object->poeTxChain = $data['poeTxChain'];
        }
        if (\array_key_exists('radioBand', $data)) {
            $object->radioBand = $data['radioBand'];
        }
        if (\array_key_exists('externalAntenna24', $data)) {
            $object->externalAntenna24 = $this->denormalizer->denormalize($data['externalAntenna24'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelExternalAntenna::class, 'json', $context);
        }
        if (\array_key_exists('externalAntenna50', $data)) {
            $object->externalAntenna50 = $this->denormalizer->denormalize($data['externalAntenna50'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelExternalAntenna::class, 'json', $context);
        }
        if (\array_key_exists('lanPorts', $data)) {
            $values = [];
            foreach ($data['lanPorts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortSetting::class, 'json', $context);
            }
            $object->lanPorts = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('ledStatusEnabled', get_object_vars($data)) && null !== ($data->ledStatusEnabled ?? null)) {
            $dataArray['ledStatusEnabled'] = $data->ledStatusEnabled ?? null;
        }
        if (array_key_exists('lldp', get_object_vars($data)) && null !== ($data->lldp ?? null)) {
            $dataArray['lldp'] = ($data->lldp ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->lldp ?? null, 'json', $context));
        }
        if (array_key_exists('lacp', get_object_vars($data)) && null !== ($data->lacp ?? null)) {
            $dataArray['lacp'] = ($data->lacp ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->lacp ?? null, 'json', $context));
        }
        if (array_key_exists('cellularSettings', get_object_vars($data)) && null !== ($data->cellularSettings ?? null)) {
            $dataArray['cellularSettings'] = ($data->cellularSettings ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->cellularSettings ?? null, 'json', $context));
        }
        if (array_key_exists('ledMode', get_object_vars($data)) && null !== ($data->ledMode ?? null)) {
            $dataArray['ledMode'] = $data->ledMode ?? null;
        }
        if (array_key_exists('internalHeaterEnabled', get_object_vars($data)) && null !== ($data->internalHeaterEnabled ?? null)) {
            $dataArray['internalHeaterEnabled'] = $data->internalHeaterEnabled ?? null;
        }
        if (array_key_exists('poeOutPortEnabled', get_object_vars($data)) && null !== ($data->poeOutPortEnabled ?? null)) {
            $dataArray['poeOutPortEnabled'] = $data->poeOutPortEnabled ?? null;
        }
        if (array_key_exists('usbPowerEnable', get_object_vars($data)) && null !== ($data->usbPowerEnable ?? null)) {
            $dataArray['usbPowerEnable'] = $data->usbPowerEnable ?? null;
        }
        if (array_key_exists('poeModeSetting', get_object_vars($data)) && null !== ($data->poeModeSetting ?? null)) {
            $dataArray['poeModeSetting'] = $data->poeModeSetting ?? null;
        }
        if (array_key_exists('poeTxChain', get_object_vars($data)) && null !== ($data->poeTxChain ?? null)) {
            $dataArray['poeTxChain'] = $data->poeTxChain ?? null;
        }
        if (array_key_exists('radioBand', get_object_vars($data)) && null !== ($data->radioBand ?? null)) {
            $dataArray['radioBand'] = $data->radioBand ?? null;
        }
        if (array_key_exists('externalAntenna24', get_object_vars($data)) && null !== ($data->externalAntenna24 ?? null)) {
            $dataArray['externalAntenna24'] = ($data->externalAntenna24 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->externalAntenna24 ?? null, 'json', $context));
        }
        if (array_key_exists('externalAntenna50', get_object_vars($data)) && null !== ($data->externalAntenna50 ?? null)) {
            $dataArray['externalAntenna50'] = ($data->externalAntenna50 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->externalAntenna50 ?? null, 'json', $context));
        }
        if (array_key_exists('lanPorts', get_object_vars($data)) && null !== ($data->lanPorts ?? null)) {
            $values = [];
            foreach ($data->lanPorts ?? null as $value) {
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