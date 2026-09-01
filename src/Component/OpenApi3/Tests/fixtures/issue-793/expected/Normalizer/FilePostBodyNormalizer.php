<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedIssue793\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FilePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model\FilePostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model\FilePostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model\FilePostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi3\Tests\ExpectedIssue793\Validator\FilePostBodyConstraint());
        }
        if (\array_key_exists('file', $data)) {
            $object->file = $data['file'];
            unset($data['file']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('fileNullable', $data) && $data['fileNullable'] !== null) {
            $object->fileNullable = $data['fileNullable'];
            unset($data['fileNullable']);
        }
        elseif (\array_key_exists('fileNullable', $data) && $data['fileNullable'] === null) {
            $object->fileNullable = null;
            unset($data['fileNullable']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('file', get_object_vars($data)) && null !== ($data->file ?? null)) {
            $dataArray['file'] = $data->file ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('fileNullable', get_object_vars($data)) && null !== ($data->fileNullable ?? null)) {
            $dataArray['fileNullable'] = $data->fileNullable ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi3\Tests\ExpectedIssue793\Validator\FilePostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model\FilePostBody::class => false];
    }
}