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
class ApmodelCellularSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCellularSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCellularSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCellularSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('mobileAPName', $data)) {
            $object->setMobileAPName($data['mobileAPName']);
        }
        if (\array_key_exists('mobileAPName2', $data)) {
            $object->setMobileAPName2($data['mobileAPName2']);
        }
        if (\array_key_exists('simCardUsage', $data)) {
            $object->setSimCardUsage($data['simCardUsage']);
        }
        if (\array_key_exists('select3g4g', $data)) {
            $object->setSelect3g4g($data['select3g4g']);
        }
        if (\array_key_exists('select3g4g2', $data)) {
            $object->setSelect3g4g2($data['select3g4g2']);
        }
        if (\array_key_exists('dataRoaming', $data)) {
            $object->setDataRoaming($data['dataRoaming']);
        }
        if (\array_key_exists('dataRoaming2', $data)) {
            $object->setDataRoaming2($data['dataRoaming2']);
        }
        if (\array_key_exists('wanConnection', $data)) {
            $object->setWanConnection($data['wanConnection']);
        }
        if (\array_key_exists('wanRecoveryTimer', $data)) {
            $object->setWanRecoveryTimer($data['wanRecoveryTimer']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('mobileAPName') && null !== $data->getMobileAPName()) {
            $dataArray['mobileAPName'] = $data->getMobileAPName();
        }
        if ($data->isInitialized('mobileAPName2') && null !== $data->getMobileAPName2()) {
            $dataArray['mobileAPName2'] = $data->getMobileAPName2();
        }
        if ($data->isInitialized('simCardUsage') && null !== $data->getSimCardUsage()) {
            $dataArray['simCardUsage'] = $data->getSimCardUsage();
        }
        $dataArray['select3g4g'] = $data->getSelect3g4g();
        $dataArray['select3g4g2'] = $data->getSelect3g4g2();
        if ($data->isInitialized('dataRoaming') && null !== $data->getDataRoaming()) {
            $dataArray['dataRoaming'] = $data->getDataRoaming();
        }
        if ($data->isInitialized('dataRoaming2') && null !== $data->getDataRoaming2()) {
            $dataArray['dataRoaming2'] = $data->getDataRoaming2();
        }
        $dataArray['wanConnection'] = $data->getWanConnection();
        $dataArray['wanRecoveryTimer'] = $data->getWanRecoveryTimer();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCellularSettings::class => false];
    }
}