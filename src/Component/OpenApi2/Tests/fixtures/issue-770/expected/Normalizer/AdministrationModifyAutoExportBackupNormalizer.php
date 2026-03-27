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
class AdministrationModifyAutoExportBackupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAutoExportBackup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAutoExportBackup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAutoExportBackup();
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
            $object->setEnableAutoExportBackup($data['enableAutoExportBackup']);
        }
        if (\array_key_exists('ftpNamePrefix', $data)) {
            $object->setFtpNamePrefix($data['ftpNamePrefix']);
        }
        if (\array_key_exists('ftpServer', $data)) {
            $object->setFtpServer($data['ftpServer']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('enableAutoExportBackup') && null !== $data->getEnableAutoExportBackup()) {
            $dataArray['enableAutoExportBackup'] = $data->getEnableAutoExportBackup();
        }
        if ($data->isInitialized('ftpNamePrefix') && null !== $data->getFtpNamePrefix()) {
            $dataArray['ftpNamePrefix'] = $data->getFtpNamePrefix();
        }
        if ($data->isInitialized('ftpServer') && null !== $data->getFtpServer()) {
            $dataArray['ftpServer'] = $data->getFtpServer();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAutoExportBackup::class => false];
    }
}