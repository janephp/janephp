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
            $object->setId($data['id']);
        }
        if (\array_key_exists('fileName', $data)) {
            $object->setFileName($data['fileName']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
        }
        if (\array_key_exists('binariesInfo', $data)) {
            $values = [];
            foreach ($data['binariesInfo'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\AvcSignaturePackageBinary::class, 'json', $context);
            }
            $object->setBinariesInfo($values);
        }
        if (\array_key_exists('checkLatestInstallableSettings', $data)) {
            $object->setCheckLatestInstallableSettings($this->denormalizer->denormalize($data['checkLatestInstallableSettings'], \Jane\Component\OpenApi3\Tests\Expected\Model\AvcCheckLatestInstallableSignaturePackageSettings::class, 'json', $context));
        }
        if (\array_key_exists('latestInstallable', $data)) {
            $object->setLatestInstallable($this->denormalizer->denormalize($data['latestInstallable'], \Jane\Component\OpenApi3\Tests\Expected\Model\AvcLatestInstallableSignaturePackage::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('fileName') && null !== $data->getFileName()) {
            $dataArray['fileName'] = $data->getFileName();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['size'] = $data->getSize();
        }
        if ($data->isInitialized('binariesInfo') && null !== $data->getBinariesInfo()) {
            $values = [];
            foreach ($data->getBinariesInfo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['binariesInfo'] = $values;
        }
        if ($data->isInitialized('checkLatestInstallableSettings') && null !== $data->getCheckLatestInstallableSettings()) {
            $dataArray['checkLatestInstallableSettings'] = $this->normalizer->normalize($data->getCheckLatestInstallableSettings(), 'json', $context);
        }
        if ($data->isInitialized('latestInstallable') && null !== $data->getLatestInstallable()) {
            $dataArray['latestInstallable'] = $this->normalizer->normalize($data->getLatestInstallable(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AvcSignaturePackage::class => false];
    }
}