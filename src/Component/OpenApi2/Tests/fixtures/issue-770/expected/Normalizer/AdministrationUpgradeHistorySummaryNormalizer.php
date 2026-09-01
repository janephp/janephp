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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationUpgradeHistorySummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('startTime', $data)) {
            $object->startTime = $data['startTime'];
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
        }
        if (\array_key_exists('cbVersion', $data)) {
            $object->cbVersion = $data['cbVersion'];
        }
        if (\array_key_exists('dpVersion', $data)) {
            $object->dpVersion = $data['dpVersion'];
        }
        if (\array_key_exists('apFwVersion', $data)) {
            $object->apFwVersion = $data['apFwVersion'];
        }
        if (\array_key_exists('oldVersion', $data)) {
            $object->oldVersion = $data['oldVersion'];
        }
        if (\array_key_exists('oldCbVersion', $data)) {
            $object->oldCbVersion = $data['oldCbVersion'];
        }
        if (\array_key_exists('oldDpVersion', $data)) {
            $object->oldDpVersion = $data['oldDpVersion'];
        }
        if (\array_key_exists('oldApFwVersion', $data)) {
            $object->oldApFwVersion = $data['oldApFwVersion'];
        }
        if (\array_key_exists('fileName', $data)) {
            $object->fileName = $data['fileName'];
        }
        if (\array_key_exists('elapsedSeconds', $data)) {
            $object->elapsedSeconds = $data['elapsedSeconds'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('startTime', get_object_vars($data)) && null !== ($data->startTime ?? null)) {
            $dataArray['startTime'] = $data->startTime ?? null;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version ?? null;
        }
        if (array_key_exists('cbVersion', get_object_vars($data)) && null !== ($data->cbVersion ?? null)) {
            $dataArray['cbVersion'] = $data->cbVersion ?? null;
        }
        if (array_key_exists('dpVersion', get_object_vars($data)) && null !== ($data->dpVersion ?? null)) {
            $dataArray['dpVersion'] = $data->dpVersion ?? null;
        }
        if (array_key_exists('apFwVersion', get_object_vars($data)) && null !== ($data->apFwVersion ?? null)) {
            $dataArray['apFwVersion'] = $data->apFwVersion ?? null;
        }
        if (array_key_exists('oldVersion', get_object_vars($data)) && null !== ($data->oldVersion ?? null)) {
            $dataArray['oldVersion'] = $data->oldVersion ?? null;
        }
        if (array_key_exists('oldCbVersion', get_object_vars($data)) && null !== ($data->oldCbVersion ?? null)) {
            $dataArray['oldCbVersion'] = $data->oldCbVersion ?? null;
        }
        if (array_key_exists('oldDpVersion', get_object_vars($data)) && null !== ($data->oldDpVersion ?? null)) {
            $dataArray['oldDpVersion'] = $data->oldDpVersion ?? null;
        }
        if (array_key_exists('oldApFwVersion', get_object_vars($data)) && null !== ($data->oldApFwVersion ?? null)) {
            $dataArray['oldApFwVersion'] = $data->oldApFwVersion ?? null;
        }
        if (array_key_exists('fileName', get_object_vars($data)) && null !== ($data->fileName ?? null)) {
            $dataArray['fileName'] = $data->fileName ?? null;
        }
        if (array_key_exists('elapsedSeconds', get_object_vars($data)) && null !== ($data->elapsedSeconds ?? null)) {
            $dataArray['elapsedSeconds'] = $data->elapsedSeconds ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationUpgradeHistorySummary::class => false];
    }
}