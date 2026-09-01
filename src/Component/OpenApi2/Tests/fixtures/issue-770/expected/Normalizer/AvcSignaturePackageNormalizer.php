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
class AvcSignaturePackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AvcSignaturePackage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AvcSignaturePackage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AvcSignaturePackage();
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
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\AvcSignaturePackageBinary::class, 'json', $context);
            }
            $object->binariesInfo = $values;
        }
        if (\array_key_exists('checkLatestInstallableSettings', $data)) {
            $object->checkLatestInstallableSettings = $this->denormalizer->denormalize($data['checkLatestInstallableSettings'], \Jane\Component\OpenApi3\Tests\Expected\Model\AvcCheckLatestInstallableSignaturePackageSettings::class, 'json', $context);
        }
        if (\array_key_exists('latestInstallable', $data)) {
            $object->latestInstallable = $this->denormalizer->denormalize($data['latestInstallable'], \Jane\Component\OpenApi3\Tests\Expected\Model\AvcLatestInstallableSignaturePackage::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('fileName', get_object_vars($data)) && null !== ($data->fileName ?? null)) {
            $dataArray['fileName'] = $data->fileName ?? null;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version ?? null;
        }
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['size'] = $data->size ?? null;
        }
        if (array_key_exists('binariesInfo', get_object_vars($data)) && null !== ($data->binariesInfo ?? null)) {
            $values = [];
            foreach ($data->binariesInfo ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['binariesInfo'] = $values;
        }
        if (array_key_exists('checkLatestInstallableSettings', get_object_vars($data)) && null !== ($data->checkLatestInstallableSettings ?? null)) {
            $dataArray['checkLatestInstallableSettings'] = ($data->checkLatestInstallableSettings ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->checkLatestInstallableSettings ?? null, 'json', $context));
        }
        if (array_key_exists('latestInstallable', get_object_vars($data)) && null !== ($data->latestInstallable ?? null)) {
            $dataArray['latestInstallable'] = ($data->latestInstallable ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->latestInstallable ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AvcSignaturePackage::class => false];
    }
}