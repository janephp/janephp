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
class AdministrationBackupFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationBackupFile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationBackupFile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationBackupFile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('createdOn', $data) && \is_int($data['createdOn'])) {
            $data['createdOn'] = (double) $data['createdOn'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('createdOn', $data)) {
            $object->setCreatedOn($data['createdOn']);
        }
        if (\array_key_exists('scgVersion', $data)) {
            $object->setScgVersion($data['scgVersion']);
        }
        if (\array_key_exists('controlPlaneSoftwareVersion', $data)) {
            $object->setControlPlaneSoftwareVersion($data['controlPlaneSoftwareVersion']);
        }
        if (\array_key_exists('dataPlaneSoftwareVersion', $data)) {
            $object->setDataPlaneSoftwareVersion($data['dataPlaneSoftwareVersion']);
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($data['createdBy']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('backupElapsed', $data)) {
            $object->setBackupElapsed($data['backupElapsed']);
        }
        if (\array_key_exists('fileSize', $data)) {
            $object->setFileSize($data['fileSize']);
        }
        if (\array_key_exists('md5', $data)) {
            $object->setMd5($data['md5']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('createdOn') && null !== $data->getCreatedOn()) {
            $dataArray['createdOn'] = $data->getCreatedOn();
        }
        if ($data->isInitialized('scgVersion') && null !== $data->getScgVersion()) {
            $dataArray['scgVersion'] = $data->getScgVersion();
        }
        if ($data->isInitialized('controlPlaneSoftwareVersion') && null !== $data->getControlPlaneSoftwareVersion()) {
            $dataArray['controlPlaneSoftwareVersion'] = $data->getControlPlaneSoftwareVersion();
        }
        if ($data->isInitialized('dataPlaneSoftwareVersion') && null !== $data->getDataPlaneSoftwareVersion()) {
            $dataArray['dataPlaneSoftwareVersion'] = $data->getDataPlaneSoftwareVersion();
        }
        if ($data->isInitialized('createdBy') && null !== $data->getCreatedBy()) {
            $dataArray['createdBy'] = $data->getCreatedBy();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('backupElapsed') && null !== $data->getBackupElapsed()) {
            $dataArray['backupElapsed'] = $data->getBackupElapsed();
        }
        if ($data->isInitialized('fileSize') && null !== $data->getFileSize()) {
            $dataArray['fileSize'] = $data->getFileSize();
        }
        if ($data->isInitialized('md5') && null !== $data->getMd5()) {
            $dataArray['md5'] = $data->getMd5();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationBackupFile::class => false];
    }
}