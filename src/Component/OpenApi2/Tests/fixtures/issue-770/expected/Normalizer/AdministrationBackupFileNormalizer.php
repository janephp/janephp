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
            $data['createdOn'] = (float) $data['createdOn'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('createdOn', $data)) {
            $object->createdOn = $data['createdOn'];
        }
        if (\array_key_exists('scgVersion', $data)) {
            $object->scgVersion = $data['scgVersion'];
        }
        if (\array_key_exists('controlPlaneSoftwareVersion', $data)) {
            $object->controlPlaneSoftwareVersion = $data['controlPlaneSoftwareVersion'];
        }
        if (\array_key_exists('dataPlaneSoftwareVersion', $data)) {
            $object->dataPlaneSoftwareVersion = $data['dataPlaneSoftwareVersion'];
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->createdBy = $data['createdBy'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('backupElapsed', $data)) {
            $object->backupElapsed = $data['backupElapsed'];
        }
        if (\array_key_exists('fileSize', $data)) {
            $object->fileSize = $data['fileSize'];
        }
        if (\array_key_exists('md5', $data)) {
            $object->md5 = $data['md5'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('createdOn', get_object_vars($data)) && null !== ($data->createdOn ?? null)) {
            $dataArray['createdOn'] = $data->createdOn ?? null;
        }
        if (array_key_exists('scgVersion', get_object_vars($data)) && null !== ($data->scgVersion ?? null)) {
            $dataArray['scgVersion'] = $data->scgVersion ?? null;
        }
        if (array_key_exists('controlPlaneSoftwareVersion', get_object_vars($data)) && null !== ($data->controlPlaneSoftwareVersion ?? null)) {
            $dataArray['controlPlaneSoftwareVersion'] = $data->controlPlaneSoftwareVersion ?? null;
        }
        if (array_key_exists('dataPlaneSoftwareVersion', get_object_vars($data)) && null !== ($data->dataPlaneSoftwareVersion ?? null)) {
            $dataArray['dataPlaneSoftwareVersion'] = $data->dataPlaneSoftwareVersion ?? null;
        }
        if (array_key_exists('createdBy', get_object_vars($data)) && null !== ($data->createdBy ?? null)) {
            $dataArray['createdBy'] = $data->createdBy ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('backupElapsed', get_object_vars($data)) && null !== ($data->backupElapsed ?? null)) {
            $dataArray['backupElapsed'] = $data->backupElapsed ?? null;
        }
        if (array_key_exists('fileSize', get_object_vars($data)) && null !== ($data->fileSize ?? null)) {
            $dataArray['fileSize'] = $data->fileSize ?? null;
        }
        if (array_key_exists('md5', get_object_vars($data)) && null !== ($data->md5 ?? null)) {
            $dataArray['md5'] = $data->md5 ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationBackupFile::class => false];
    }
}