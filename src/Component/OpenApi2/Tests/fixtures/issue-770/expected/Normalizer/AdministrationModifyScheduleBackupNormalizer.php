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
class AdministrationModifyScheduleBackupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationModifyScheduleBackup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationModifyScheduleBackup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationModifyScheduleBackup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('enableScheduleBackup', $data) && \is_int($data['enableScheduleBackup'])) {
            $data['enableScheduleBackup'] = (bool) $data['enableScheduleBackup'];
        }
        if (\array_key_exists('enableScheduleBackup', $data)) {
            $object->enableScheduleBackup = $data['enableScheduleBackup'];
        }
        if (\array_key_exists('interval', $data)) {
            $object->interval = $data['interval'];
        }
        if (\array_key_exists('dayOfWeek', $data)) {
            $object->dayOfWeek = $data['dayOfWeek'];
        }
        if (\array_key_exists('dateOfMonth', $data)) {
            $object->dateOfMonth = $data['dateOfMonth'];
        }
        if (\array_key_exists('hour', $data)) {
            $object->hour = $data['hour'];
        }
        if (\array_key_exists('minute', $data)) {
            $object->minute = $data['minute'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('enableScheduleBackup', get_object_vars($data)) && null !== ($data->enableScheduleBackup ?? null)) {
            $dataArray['enableScheduleBackup'] = $data->enableScheduleBackup ?? null;
        }
        if (array_key_exists('interval', get_object_vars($data)) && null !== ($data->interval ?? null)) {
            $dataArray['interval'] = $data->interval ?? null;
        }
        if (array_key_exists('dayOfWeek', get_object_vars($data)) && null !== ($data->dayOfWeek ?? null)) {
            $dataArray['dayOfWeek'] = $data->dayOfWeek ?? null;
        }
        if (array_key_exists('dateOfMonth', get_object_vars($data)) && null !== ($data->dateOfMonth ?? null)) {
            $dataArray['dateOfMonth'] = $data->dateOfMonth ?? null;
        }
        if (array_key_exists('hour', get_object_vars($data)) && null !== ($data->hour ?? null)) {
            $dataArray['hour'] = $data->hour ?? null;
        }
        if (array_key_exists('minute', get_object_vars($data)) && null !== ($data->minute ?? null)) {
            $dataArray['minute'] = $data->minute ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationModifyScheduleBackup::class => false];
    }
}