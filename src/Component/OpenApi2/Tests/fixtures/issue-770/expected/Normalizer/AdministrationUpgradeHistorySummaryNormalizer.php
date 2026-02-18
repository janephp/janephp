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
class AdministrationUpgradeHistorySummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationUpgradeHistorySummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationUpgradeHistorySummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationUpgradeHistorySummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('startTime', $data)) {
            $object->setStartTime($data['startTime']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        if (\array_key_exists('cbVersion', $data)) {
            $object->setCbVersion($data['cbVersion']);
        }
        if (\array_key_exists('dpVersion', $data)) {
            $object->setDpVersion($data['dpVersion']);
        }
        if (\array_key_exists('apFwVersion', $data)) {
            $object->setApFwVersion($data['apFwVersion']);
        }
        if (\array_key_exists('oldVersion', $data)) {
            $object->setOldVersion($data['oldVersion']);
        }
        if (\array_key_exists('oldCbVersion', $data)) {
            $object->setOldCbVersion($data['oldCbVersion']);
        }
        if (\array_key_exists('oldDpVersion', $data)) {
            $object->setOldDpVersion($data['oldDpVersion']);
        }
        if (\array_key_exists('oldApFwVersion', $data)) {
            $object->setOldApFwVersion($data['oldApFwVersion']);
        }
        if (\array_key_exists('fileName', $data)) {
            $object->setFileName($data['fileName']);
        }
        if (\array_key_exists('elapsedSeconds', $data)) {
            $object->setElapsedSeconds($data['elapsedSeconds']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('startTime') && null !== $data->getStartTime()) {
            $dataArray['startTime'] = $data->getStartTime();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('cbVersion') && null !== $data->getCbVersion()) {
            $dataArray['cbVersion'] = $data->getCbVersion();
        }
        if ($data->isInitialized('dpVersion') && null !== $data->getDpVersion()) {
            $dataArray['dpVersion'] = $data->getDpVersion();
        }
        if ($data->isInitialized('apFwVersion') && null !== $data->getApFwVersion()) {
            $dataArray['apFwVersion'] = $data->getApFwVersion();
        }
        if ($data->isInitialized('oldVersion') && null !== $data->getOldVersion()) {
            $dataArray['oldVersion'] = $data->getOldVersion();
        }
        if ($data->isInitialized('oldCbVersion') && null !== $data->getOldCbVersion()) {
            $dataArray['oldCbVersion'] = $data->getOldCbVersion();
        }
        if ($data->isInitialized('oldDpVersion') && null !== $data->getOldDpVersion()) {
            $dataArray['oldDpVersion'] = $data->getOldDpVersion();
        }
        if ($data->isInitialized('oldApFwVersion') && null !== $data->getOldApFwVersion()) {
            $dataArray['oldApFwVersion'] = $data->getOldApFwVersion();
        }
        if ($data->isInitialized('fileName') && null !== $data->getFileName()) {
            $dataArray['fileName'] = $data->getFileName();
        }
        if ($data->isInitialized('elapsedSeconds') && null !== $data->getElapsedSeconds()) {
            $dataArray['elapsedSeconds'] = $data->getElapsedSeconds();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationUpgradeHistorySummary::class => false];
    }
}