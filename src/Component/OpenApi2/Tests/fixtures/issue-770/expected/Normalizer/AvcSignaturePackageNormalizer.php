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
class AvcSignaturePackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcSignaturePackage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcSignaturePackage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcSignaturePackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('fileName', $data)) {
            $object->fileName = $data['fileName'];
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $data['size'];
        }
        if (\array_key_exists('binariesInfo', $data)) {
            $values = [];
            foreach ($data['binariesInfo'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcSignaturePackageBinary::class, 'json', $context);
            }
            $object->binariesInfo = $values;
        }
        if (\array_key_exists('checkLatestInstallableSettings', $data)) {
            $object->checkLatestInstallableSettings = $this->denormalizer->denormalize($data['checkLatestInstallableSettings'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcCheckLatestInstallableSignaturePackageSettings::class, 'json', $context);
        }
        if (\array_key_exists('latestInstallable', $data)) {
            $object->latestInstallable = $this->denormalizer->denormalize($data['latestInstallable'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcLatestInstallableSignaturePackage::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id;
        }
        if (array_key_exists('fileName', get_object_vars($data)) && null !== ($data->fileName ?? null)) {
            $dataArray['fileName'] = $data->fileName;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version;
        }
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['size'] = $data->size;
        }
        if (array_key_exists('binariesInfo', get_object_vars($data)) && null !== ($data->binariesInfo ?? null)) {
            $values = [];
            foreach ($data->binariesInfo as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['binariesInfo'] = $values;
        }
        if (array_key_exists('checkLatestInstallableSettings', get_object_vars($data)) && null !== ($data->checkLatestInstallableSettings ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->checkLatestInstallableSettings, 'json', $context);
            $dataArray['checkLatestInstallableSettings'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('latestInstallable', get_object_vars($data)) && null !== ($data->latestInstallable ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->latestInstallable, 'json', $context);
            $dataArray['latestInstallable'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcSignaturePackage::class => false];
    }
}