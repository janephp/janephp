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
class ClusterbladeUploadPatchInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeUploadPatchInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeUploadPatchInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeUploadPatchInfo();
        if (\array_key_exists('fileSize', $data) && \is_int($data['fileSize'])) {
            $data['fileSize'] = (double) $data['fileSize'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fileName', $data)) {
            $object->setFileName($data['fileName']);
        }
        if (\array_key_exists('fileSize', $data)) {
            $object->setFileSize($data['fileSize']);
        }
        if (\array_key_exists('fileUploadPath', $data)) {
            $object->setFileUploadPath($data['fileUploadPath']);
        }
        if (\array_key_exists('controlbladeVersion', $data)) {
            $object->setControlbladeVersion($data['controlbladeVersion']);
        }
        if (\array_key_exists('databladeVersion', $data)) {
            $object->setDatabladeVersion($data['databladeVersion']);
        }
        if (\array_key_exists('apVersion', $data)) {
            $object->setApVersion($data['apVersion']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        if (\array_key_exists('allowVersions', $data)) {
            $values = [];
            foreach ($data['allowVersions'] as $value) {
                $values[] = $value;
            }
            $object->setAllowVersions($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('fileName') && null !== $data->getFileName()) {
            $dataArray['fileName'] = $data->getFileName();
        }
        if ($data->isInitialized('fileSize') && null !== $data->getFileSize()) {
            $dataArray['fileSize'] = $data->getFileSize();
        }
        if ($data->isInitialized('fileUploadPath') && null !== $data->getFileUploadPath()) {
            $dataArray['fileUploadPath'] = $data->getFileUploadPath();
        }
        if ($data->isInitialized('controlbladeVersion') && null !== $data->getControlbladeVersion()) {
            $dataArray['controlbladeVersion'] = $data->getControlbladeVersion();
        }
        if ($data->isInitialized('databladeVersion') && null !== $data->getDatabladeVersion()) {
            $dataArray['databladeVersion'] = $data->getDatabladeVersion();
        }
        if ($data->isInitialized('apVersion') && null !== $data->getApVersion()) {
            $dataArray['apVersion'] = $data->getApVersion();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('allowVersions') && null !== $data->getAllowVersions()) {
            $values = [];
            foreach ($data->getAllowVersions() as $value) {
                $values[] = $value;
            }
            $dataArray['allowVersions'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeUploadPatchInfo::class => false];
    }
}