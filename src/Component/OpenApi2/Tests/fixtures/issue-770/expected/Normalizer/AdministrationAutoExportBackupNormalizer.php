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
class AdministrationAutoExportBackupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationAutoExportBackup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationAutoExportBackup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationAutoExportBackup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('enableAutoExportBackup', $data) && \is_int($data['enableAutoExportBackup'])) {
            $data['enableAutoExportBackup'] = (bool) $data['enableAutoExportBackup'];
        }
        if (\array_key_exists('enableAutoExportBackup', $data)) {
            $object->enableAutoExportBackup = $data['enableAutoExportBackup'];
        }
        if (\array_key_exists('ftpNamePrefix', $data)) {
            $object->ftpNamePrefix = $data['ftpNamePrefix'];
        }
        if (\array_key_exists('ftpServer', $data)) {
            $object->ftpServer = $data['ftpServer'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('enableAutoExportBackup', get_object_vars($data)) && null !== ($data->enableAutoExportBackup ?? null)) {
            $dataArray['enableAutoExportBackup'] = $data->enableAutoExportBackup ?? null;
        }
        if (array_key_exists('ftpNamePrefix', get_object_vars($data)) && null !== ($data->ftpNamePrefix ?? null)) {
            $dataArray['ftpNamePrefix'] = $data->ftpNamePrefix ?? null;
        }
        if (array_key_exists('ftpServer', get_object_vars($data)) && null !== ($data->ftpServer ?? null)) {
            $dataArray['ftpServer'] = $data->ftpServer ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationAutoExportBackup::class => false];
    }
}