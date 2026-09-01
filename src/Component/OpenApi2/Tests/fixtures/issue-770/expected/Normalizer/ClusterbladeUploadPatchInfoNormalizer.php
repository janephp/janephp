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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeUploadPatchInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('fileSize', $data) && \is_int($data['fileSize'])) {
            $data['fileSize'] = (float) $data['fileSize'];
        }
        if (\array_key_exists('fileName', $data)) {
            $object->fileName = $data['fileName'];
        }
        if (\array_key_exists('fileSize', $data)) {
            $object->fileSize = $data['fileSize'];
        }
        if (\array_key_exists('fileUploadPath', $data)) {
            $object->fileUploadPath = $data['fileUploadPath'];
        }
        if (\array_key_exists('controlbladeVersion', $data)) {
            $object->controlbladeVersion = $data['controlbladeVersion'];
        }
        if (\array_key_exists('databladeVersion', $data)) {
            $object->databladeVersion = $data['databladeVersion'];
        }
        if (\array_key_exists('apVersion', $data)) {
            $object->apVersion = $data['apVersion'];
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
        }
        if (\array_key_exists('allowVersions', $data)) {
            $values = [];
            foreach ($data['allowVersions'] as $value) {
                $values[] = $value;
            }
            $object->allowVersions = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('fileName', get_object_vars($data)) && null !== ($data->fileName ?? null)) {
            $dataArray['fileName'] = $data->fileName ?? null;
        }
        if (array_key_exists('fileSize', get_object_vars($data)) && null !== ($data->fileSize ?? null)) {
            $dataArray['fileSize'] = $data->fileSize ?? null;
        }
        if (array_key_exists('fileUploadPath', get_object_vars($data)) && null !== ($data->fileUploadPath ?? null)) {
            $dataArray['fileUploadPath'] = $data->fileUploadPath ?? null;
        }
        if (array_key_exists('controlbladeVersion', get_object_vars($data)) && null !== ($data->controlbladeVersion ?? null)) {
            $dataArray['controlbladeVersion'] = $data->controlbladeVersion ?? null;
        }
        if (array_key_exists('databladeVersion', get_object_vars($data)) && null !== ($data->databladeVersion ?? null)) {
            $dataArray['databladeVersion'] = $data->databladeVersion ?? null;
        }
        if (array_key_exists('apVersion', get_object_vars($data)) && null !== ($data->apVersion ?? null)) {
            $dataArray['apVersion'] = $data->apVersion ?? null;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version ?? null;
        }
        if (array_key_exists('allowVersions', get_object_vars($data)) && null !== ($data->allowVersions ?? null)) {
            $values = [];
            foreach ($data->allowVersions ?? null as $value) {
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