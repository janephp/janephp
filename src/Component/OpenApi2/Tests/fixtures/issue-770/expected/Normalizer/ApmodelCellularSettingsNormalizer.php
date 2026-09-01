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
            $object->mobileAPName = $data['mobileAPName'];
        }
        if (\array_key_exists('mobileAPName2', $data)) {
            $object->mobileAPName2 = $data['mobileAPName2'];
        }
        if (\array_key_exists('simCardUsage', $data)) {
            $object->simCardUsage = $data['simCardUsage'];
        }
        if (\array_key_exists('select3g4g', $data)) {
            $object->select3g4g = $data['select3g4g'];
        }
        if (\array_key_exists('select3g4g2', $data)) {
            $object->select3g4g2 = $data['select3g4g2'];
        }
        if (\array_key_exists('dataRoaming', $data)) {
            $object->dataRoaming = $data['dataRoaming'];
        }
        if (\array_key_exists('dataRoaming2', $data)) {
            $object->dataRoaming2 = $data['dataRoaming2'];
        }
        if (\array_key_exists('wanConnection', $data)) {
            $object->wanConnection = $data['wanConnection'];
        }
        if (\array_key_exists('wanRecoveryTimer', $data)) {
            $object->wanRecoveryTimer = $data['wanRecoveryTimer'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('mobileAPName', get_object_vars($data)) && null !== ($data->mobileAPName ?? null)) {
            $dataArray['mobileAPName'] = $data->mobileAPName ?? null;
        }
        if (array_key_exists('mobileAPName2', get_object_vars($data)) && null !== ($data->mobileAPName2 ?? null)) {
            $dataArray['mobileAPName2'] = $data->mobileAPName2 ?? null;
        }
        if (array_key_exists('simCardUsage', get_object_vars($data)) && null !== ($data->simCardUsage ?? null)) {
            $dataArray['simCardUsage'] = $data->simCardUsage ?? null;
        }
        $dataArray['select3g4g'] = $data->select3g4g ?? null;
        $dataArray['select3g4g2'] = $data->select3g4g2 ?? null;
        if (array_key_exists('dataRoaming', get_object_vars($data)) && null !== ($data->dataRoaming ?? null)) {
            $dataArray['dataRoaming'] = $data->dataRoaming ?? null;
        }
        if (array_key_exists('dataRoaming2', get_object_vars($data)) && null !== ($data->dataRoaming2 ?? null)) {
            $dataArray['dataRoaming2'] = $data->dataRoaming2 ?? null;
        }
        $dataArray['wanConnection'] = $data->wanConnection ?? null;
        $dataArray['wanRecoveryTimer'] = $data->wanRecoveryTimer ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCellularSettings::class => false];
    }
}