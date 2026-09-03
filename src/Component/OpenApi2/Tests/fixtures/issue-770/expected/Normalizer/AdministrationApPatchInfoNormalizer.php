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
class AdministrationApPatchInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationApPatchInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationApPatchInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationApPatchInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('fileName', $data)) {
            $object->fileName = $data['fileName'];
        }
        if (\array_key_exists('fileSize', $data)) {
            $object->fileSize = $data['fileSize'];
        }
        if (\array_key_exists('apVersion', $data)) {
            $object->apVersion = $data['apVersion'];
        }
        if (\array_key_exists('apModels', $data)) {
            $values = [];
            foreach ($data['apModels'] as $value) {
                $values[] = $value;
            }
            $object->apModels = $values;
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
        if (array_key_exists('apVersion', get_object_vars($data)) && null !== ($data->apVersion ?? null)) {
            $dataArray['apVersion'] = $data->apVersion ?? null;
        }
        if (array_key_exists('apModels', get_object_vars($data)) && null !== ($data->apModels ?? null)) {
            $values = [];
            foreach ($data->apModels ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['apModels'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationApPatchInfo::class => false];
    }
}