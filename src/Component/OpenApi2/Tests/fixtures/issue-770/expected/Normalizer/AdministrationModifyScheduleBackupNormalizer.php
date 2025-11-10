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
class AdministrationModifyScheduleBackupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyScheduleBackup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyScheduleBackup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyScheduleBackup();
        if (\array_key_exists('enableScheduleBackup', $data) && \is_int($data['enableScheduleBackup'])) {
            $data['enableScheduleBackup'] = (bool) $data['enableScheduleBackup'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enableScheduleBackup', $data)) {
            $object->setEnableScheduleBackup($data['enableScheduleBackup']);
        }
        if (\array_key_exists('interval', $data)) {
            $object->setInterval($data['interval']);
        }
        if (\array_key_exists('dayOfWeek', $data)) {
            $object->setDayOfWeek($data['dayOfWeek']);
        }
        if (\array_key_exists('dateOfMonth', $data)) {
            $object->setDateOfMonth($data['dateOfMonth']);
        }
        if (\array_key_exists('hour', $data)) {
            $object->setHour($data['hour']);
        }
        if (\array_key_exists('minute', $data)) {
            $object->setMinute($data['minute']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('enableScheduleBackup') && null !== $data->getEnableScheduleBackup()) {
            $dataArray['enableScheduleBackup'] = $data->getEnableScheduleBackup();
        }
        if ($data->isInitialized('interval') && null !== $data->getInterval()) {
            $dataArray['interval'] = $data->getInterval();
        }
        if ($data->isInitialized('dayOfWeek') && null !== $data->getDayOfWeek()) {
            $dataArray['dayOfWeek'] = $data->getDayOfWeek();
        }
        if ($data->isInitialized('dateOfMonth') && null !== $data->getDateOfMonth()) {
            $dataArray['dateOfMonth'] = $data->getDateOfMonth();
        }
        if ($data->isInitialized('hour') && null !== $data->getHour()) {
            $dataArray['hour'] = $data->getHour();
        }
        if ($data->isInitialized('minute') && null !== $data->getMinute()) {
            $dataArray['minute'] = $data->getMinute();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyScheduleBackup::class => false];
    }
}